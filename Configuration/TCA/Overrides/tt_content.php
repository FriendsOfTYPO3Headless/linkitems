<?php

defined('TYPO3_MODE') || die();

$newFields = [
    'linkitems'       => [
        'label'       => 'LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem',
        'description' => 'LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.description',
        'config'      => [
            'type'                 => 'inline',
            'foreign_table'        => 'tx_linkitems_domain_model_linkitem',
            'foreign_field'        => 'uid_foreign',
            'foreign_match_fields' => [
                'tablename' => 'tt_content',
                'fieldname' => 'linkitems',
            ],
            'appearance'           => [
                'useSortable'                     => true,
                'showSynchronizationLink'         => true,
                'showAllLocalizationLink'         => true,
                'showPossibleLocalizationRecords' => true,
                'expandSingle'                    => true,
                'enabledControls'                 => [
                    'localize' => true,
                ],
            ],
            'behaviour'            => [
                'mode'                         => 'select',
                'allowLanguageSynchronization' => true,
            ],
        ],
    ],
    'linkitem_align'  => [
        'exclude'     => false,
        'label'       => 'LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tt_content.linkitem_align',
        'description' => 'LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tt_content.linkitem_align.description',
        'config'      => [
            'type'       => 'select',
            'renderType' => 'selectSingle',
            'max'        => 16,
            'items'      => [
                ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tt_content.linkitem_align.left', 'left'],
                ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tt_content.linkitem_align.center', 'center'],
                ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tt_content.linkitem_align.right', 'right'],
            ],
            'default'    => '',
        ],
    ],
    'linkitem_layout' => [
        'exclude'     => false,
        'label'       => 'LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tt_content.linkitem_layout',
        'description' => 'LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tt_content.linkitem_layout.description',
        'config'      => [
            'type'       => 'select',
            'renderType' => 'selectSingle',
            'max'        => 16,
            'items'      => [
                ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tt_content.linkitem_layout.none', 'none'],
                ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tt_content.linkitem_layout.list', 'list'],
            ],
            'default'    => '',
        ],
    ],
];
\TYPO3\CMS\Core\Utility\ArrayUtility::mergeRecursiveWithOverrule(
    $GLOBALS['TCA']['tt_content']['columns'],
    $newFields
);

$newPalettes = [
    'linkitem_settings' => [
        'label'    => 'LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:palette.linkitem_settings.label',
        'showitem' => '
             linkitem_layout, linkitem_align, --linebreak--,
             linkitems
        ',
    ],
];
\TYPO3\CMS\Core\Utility\ArrayUtility::mergeRecursiveWithOverrule(
    $GLOBALS['TCA']['tt_content']['palettes'],
    $newPalettes
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    '--div--;LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tab.linkitem_settings.label, --palette--;LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:palette.linkitem_settings.label;linkitem_settings',
    '',
    'after:general'
);
