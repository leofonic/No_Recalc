<?php
class norecalc_order_article extends norecalc_order_article_parent
{
    public function addThisArticle()
    {
        if ($this->hasInvoice()) return;
        parent::addThisArticle();
    }
    
    public function deleteThisArticle()
    {
        if ($this->hasInvoice()) return;
        parent::deleteThisArticle();
    }
    
    public function storno()
    {
        if ($this->hasInvoice()) return;
        parent::storno();
    }
    public function updateOrder()
    {
        if ($this->hasInvoice()) return;
        parent::updateOrder();
    }
    
    public function hasInvoice(){
        $oOrder = oxNew( 'oxorder' );
        if ( $oOrder->load( $this->getEditObjectId() ) && $oOrder->hasInvoice()) {
            return true;
        }
    }
    
    public function render(){
        $sTpl = parent::render();
        if ( $this->hasInvoice()) {
            $sTpl = 'norecalc_order_article.tpl';
        }
        return $sTpl;
    }
}