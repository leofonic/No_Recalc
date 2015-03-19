<?php
class norecalc_order_main extends norecalc_order_main_parent
{
    
    public function hasInvoice()
    {
        $soxId = $this->getEditObjectId();

        $oOrder = oxNew( "oxorder" );
        if ($oOrder->load( $soxId) ) {
            if ($oOrder->hasInvoice()){
                return true;
            }
        }
    }
    public function render(){
        $sTpl = parent::render();
        if ( $this->hasInvoice()) {
            $sTpl = 'norecalc_order_main.tpl';
        }
        return $sTpl;
    }
    public function save()
    {
        $aParams = oxRegistry::getConfig()->getRequestParameter( "editval" );
        //No Invoice generated yet, recalculate order and save
        if (!$this->hasInvoice() && !$aParams['oxorder__oxbillnr'] && ( !$aParams['oxorder__oxpaid'] || strpos($aParams['oxorder__oxpaid'], '0000') !== false)){ 
            return parent::save();
        }
        
        //invoice already generated, just save without recalculation
        $oOrder = oxNew( "oxorder" );
        if ( $oOrder->load( $this->getEditObjectId() ) ) {
            $oOrder->assign( $aParams);
            $oOrder->save();
        }
    }
    
    public function resetInvoice()
    {
        $oOrder = oxNew( "oxorder" );
        if ( $oOrder->load( $this->getEditObjectId() ) ) {
            $oOrder->oxorder__oxbilldate->setValue( '0000-00-00' );
            $oOrder->oxorder__oxbillnr->setValue( '' );
            $oOrder->save();
        }
    }
}
