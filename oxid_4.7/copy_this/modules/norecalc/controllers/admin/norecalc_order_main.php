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
}