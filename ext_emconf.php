<?php

// @phpstan-ignore-next-line
$EM_CONF[$_EXTKEY] = [
    'title' => 'Linkitems',
    'description' => '',
    'category' => 'plugin',
    'constraints' => [
        'depends' => [],
        'conflicts' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'FriendsOfTypo3Headless\\Linkitemse\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Niels Seelhöfer',
    'author_email' => 'niels.seelhoefer@trixie.de',
    'author_company' => 'TRIXIE',
    'version' => '1.0.0',
];
