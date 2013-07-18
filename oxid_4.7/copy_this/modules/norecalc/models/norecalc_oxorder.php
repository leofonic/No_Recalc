<?php
class norecalc_oxorder extends norecalc_oxorder_parent
{
    public function recalculateOrder( $aNewArticles = array() )
    {
        if ($this->hasInvoice()){
            //just save without recalculating
            $this->save();
            return;
        }
        parent::recalculateOrder( $aNewArticles );
    }
    public function hasInvoice()
    {
        if ($this->oxorder__oxfolder->value != 'ORDERFOLDER_NEW'){
            return true;
        }
    }
}