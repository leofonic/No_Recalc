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
    'title'       => 'Zunderweb no Recalc',
    'description' => 'Disables recalculation of orders when saved (e.g. if payment date is set), if invoice has been generated.',
    'url'         => 'http://zunderweb.de',
    'email'       => 'info@zunderweb.de',
    'thumbnail'   => '',
    'version'     => '1.0',
    'author'      => 'Zunderweb',
    'extend'      => array(
        'oxorder'    => 'zunderweb/norecalc/models/norecalc_oxorder',
        'order_main'    => 'zunderweb/norecalc/controllers/admin/norecalc_order_main',
        'order_article' => 'zunderweb/norecalc/controllers/admin/norecalc_order_article',
    ),
    'templates'       => array(
        'norecalc_order_article.tpl' => 'zunderweb/norecalc/tpl/admin/norecalc_order_article.tpl',
        'norecalc_order_main.tpl' => 'zunderweb/norecalc/tpl/admin/norecalc_order_main.tpl',
    ),
);