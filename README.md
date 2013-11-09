No_Recalc
=========

OXID eShop: Disables recalculation of orders when saved (e.g. if payment date is set), if invoice has been generated.

Temporary fix for bug https://bugs.oxid-esales.com/view.php?id=4624

In Oxid eShop there are several possibilities to change an existing Order in Backend. While this may be 
comfortable for shop owners, it causes problems because whenever a change is made, Oxid recalculates all
order positions according to current circumstances. So if for example the price of an article has changed 
since the order was placed, Oxid takes the new price. This is also true if totally unrelated changes are
made, for example if payment date is set, and the order stored in Oxid is then no longer identical to the invoice
that was sent to the customer. With this module, after an invoice is generated, unrelated changes do not
recalculate the order, and the possibilities to change the order in backend are limited so that there will be 
no differences to the invoice that has been sent.
