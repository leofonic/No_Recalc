<?php
class norecalc_oxorder extends norecalc_oxorder_parent
{
    public function hasInvoice()
    {
        if ($this->oxorder__oxfolder->value != 'ORDERFOLDER_NEW'){
            return true;
        }
    }
}