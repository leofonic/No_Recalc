<?php

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';
 
/**
 * Module information
 */
$aModule = array(
    'id'          => 'norecalc',
    'title'       => 'No Recalc',
    'description' => 'Disables recalculation of orders when saved (e.g. if payment date is set), if invoice has been generated.',
    'url'         => 'http://zunderweb.de',
    'email'       => 'info@zunderweb.de',
    'thumbnail'   => '',
    'version'     => 'Oxid eShop 4.7.x',
    'author'      => 'Zunderweb',
    'extend'      => array(
        'oxorder'    => 'norecalc/models/norecalc_oxorder',
        'order_main'    => 'norecalc/controllers/admin/norecalc_order_main',
        'order_article' => 'norecalc/controllers/admin/norecalc_order_article',
    ),
    'templates'       => array(
        'norecalc_order_article.tpl' => 'norecalc/tpl/admin/norecalc_order_article.tpl',
        'norecalc_order_main.tpl' => 'norecalc/tpl/admin/norecalc_order_main.tpl',
    ),
);