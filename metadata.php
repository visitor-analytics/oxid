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
    'version' => '1.0.0',
    'author' => 'TWIPLA',
    'email' => 'support@twipla.com',
    'url' => 'https://twipla.com',
    'thumbnail' => 'logo.png',
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
