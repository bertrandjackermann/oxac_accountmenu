<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
    'id'			=>  'oxac_accountmenu',
    'title'			=>  [
        'de'		=>  '&bdquo;Mein Konto&rdquo;-Menü für CMS-Seiten',
        'en'		=>  '&quot;My Account&quot; menu für cms pages',
    ],
    'description'	=>  [
        'de'		=>  'Blendet das Menü aus dem Bereich &quot;Mein Konto&quot; auf CMS-Seiten ein, deren Ident &quot;oxac_my&quot; enthÃ¤lt.',
        'en'		=>  'Displays the &quot;My Account&quot; menu on cms pages that have an ident containing &quot;oxac_my&quot;.',
    ],
    'thumbnail'		=>  '',
    'version'		=>  '1.0.0',
    'author'		=>  'Johannes Ackermann',
    'url'			=>  'http://www.oxid-esales.com/',
    'email'			=>  'johannes.ackermann@oxid-esales.com',
    'extend'		=>  [
        // Core
        \OxidEsales\Eshop\Application\Core\ViewConfig::class    =>  OxidEsales\OxidAcademy\AccountMenuModule\Core\AccountMenu::class,
    ],
    'blocks'		=>	[
        // Sidebar
        [
            'template'	=> 'layout/sidebar.tpl',
            'block'		=> 'sidebar_categoriestree',
            'file'		=> 'views/blocks/sidebaraccountmenu.tpl'
        ],
        // Widget
        [
            'template'	=> 'widget/header/servicebox.tpl',
            'block'		=> 'widget_header_servicebox_items',
            'file'		=> 'views/blocks/headeraccountmenu.tpl'
        ],
    ],
];
