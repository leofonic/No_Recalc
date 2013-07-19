<?php
class norecalc_oxorder extends norecalc_oxorder_parent
{
    public function hasInvoice()
    {
        if ($this->oxorder__oxbilldate->value != '0000-00-00' 
            || $this->oxorder__oxbillnr->value != ''
            || $this->oxorder__oxfolder->value != 'ORDERFOLDER_NEW'){
                
            return true;
        }
    }
}