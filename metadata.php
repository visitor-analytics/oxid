<?php

/**
 * Metadata version
 */

$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = [
    'id' => 'twipla',
    'title' => 'TWIPLA (Visitor Analytics IO)',
    'description' => [
        'en' => 'Privacy-First Website Stats, Session Recordings, Heatmaps, Polls and Surveys',
        'de' => 'Datenschutz-Website-Statistiken, Sitzungsaufzeichnungen, Heatmaps, Abstimmungen und Umfragen – alles an erster Stelle'
    ],
    'version' => '1.0.1',
    'author' => 'TWIPLA',
    'email' => 'support@twipla.com',
    'url' => 'https://twipla.com',
    'thumbnail' => 'logo.png',
    'events'       => [
        'onActivate' => '\Twipla\Twipla\Setup\Installer::onActivate',
        'onDeactivate' => '\Twipla\Twipla\Setup\Installer::onDeactivate'
    ],
    'extend' => [
        \OxidEsales\Eshop\Application\Controller\Admin\ModuleConfiguration::class => Twipla\Twipla\Controller\Admin\CustomModuleConfiguration::class,
        \OxidEsales\Eshop\Core\ViewConfig::class => Twipla\Twipla\Core\ViewConfig::class,
    ],
    'settings' => [
        [
            'group' => 'main',
            'name' => 'twipla_website_id',
            'type' => 'str',
            'value' => ''
        ],
    ],
    'blocks' => [
        [
            'template' => 'layout/base.html.twig',
            'block' => 'base_js',
            'file' => 'views/twig/extensions/themes/default/layout/base.html.twig',
        ],
    ],
];
