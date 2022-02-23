<?php

defined('TYPO3_MODE') || die();

return [
    'ctrl' => [
        'title' => 'LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem',
        'label' => 'text',
        'label_alt' => 'link, style',
        'label_alt_force' => true,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'hideTable' => true,
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'sortby' => 'sorting',
        'searchFields' => 'text',
        'iconfile' => 'EXT:core/Resources/Public/Icons/T3Icons/svgs/apps/apps-pagetree-page-shortcut-external.svg',
    ],
    'palettes' => [
        'link_settings' => [
            'showitem' => '
                link, text, style, --linebreak--,
                icon, custom_icon, icon_position
            ',
        ],
        'hiddenConfig' => [
            'label' => 'Hidden Config',
            'showitem' => '
                record_type, hidden
            ',
            'isHiddenPalette' => true,
        ],
    ],
    'types' => [
        0 => [
            'showitem' => '
                --palette--;;hiddenConfig,
                --palette--;;link_settings,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime
            ',
        ],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple',
                    ],
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'default' => 0,
                'foreign_table' => 'tx_linkitems_domain_model_linkitem',
                'foreign_table_where' => 'AND tx_linkitems_domain_model_linkitem.pid=###CURRENT_PID### AND tx_linkitems_domain_model_linkitem.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.enabled',
                    ],
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'renderType' => 'inputDateTime',
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'renderType' => 'inputDateTime',
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038),
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'text' => [
            'exclude' => true,
            'label' => 'LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.text',
            'config' => [
                'type' => 'input',
                'max' => 64,
                'eval' => 'trim',
            ],
        ],
        'link' => [
            'exclude' => true,
            'label' => 'LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.link',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputLink',
                'size' => 50,
                'max' => 1024,
                'eval' => 'trim',
                'fieldControl' => [
                    'linkPopup' => [
                        'options' => [
                            'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
                        ],
                    ],
                ],
                'softref' => 'typolink',
            ],
        ],
        'style' => [
            'exclude' => false,
            'label' => 'LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.style.label',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'max' => 32,
                'default' => 'btn btn-primary',
                'items' => [
                    ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.style.btn_primary', 'btn btn-primary'],
                    ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.style.btn_secondary', 'btn btn-secondary'],
                    ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.style.btn_success', 'btn btn-success'],
                    ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.style.btn_danger', 'btn btn-danger'],
                    ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.style.btn_warning', 'btn btn-warning'],
                    ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.style.btn_info', 'btn btn-info'],
                    ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.style.btn_light', 'btn btn-light'],
                    ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.style.btn_dark', 'btn btn-dark'],
                    ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.style.btn_link', 'btn btn-link'],
                ],
            ],
        ],
        'icon' => [
            'exclude' => false,
            'label' => 'LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.icon',
            'description' => 'LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlficon.description',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'max' => 32,
                'items' => [
                    ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:none', ''],
                    ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.icon.custom', 'custom_icon'],
                    ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.icon.arrow-left', 'fas fa-arrow-left'],
                    ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.icon.arrow-right', 'fas fa-arrow-right'],
                    ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.icon.arrow-up', 'fas fa-arrow-up'],
                    ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.icon.arrow-down', 'fas fa-arrow-down'],
                    ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.icon.envelope', 'fas fa-envelope'],
                    ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.icon.scroller', 'fas fa-angle-double-down'],
                    ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.icon.external-alt-link', 'fas fa-external-link-alt'],
                    ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.icon.download', 'fas fa-download'],
                    ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.icon.phone', 'fas fa-phone'],
                    ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.icon.plane', 'fas fa-paper-plane'],
                ],
                'default' => '',
            ],
        ],
        'custom_icon' => [
            'displayCond' => 'FIELD:icon:=:custom_icon',
            'exclude' => true,
            'label' => 'LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.customIcon',
            'description' => 'LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.customIcon.description',
            'config' => [
                'type' => 'input',
                'max' => 64,
                'eval' => 'trim',
            ],
        ],
        'icon_position' => [
            'exclude' => false,
            'label' => 'LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.icon_position',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'max' => 8,
                'items' => [
                    ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.icon_position.left', 'left'],
                    ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.icon_position.right', 'right'],
                    ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.icon_position.above', 'above'],
                    ['LLL:EXT:linkitems/Resources/Private/Language/locallang_db.xlf:tx_linkitems_domain_model_linkitem.icon_position.below', 'below'],
                ],
                'default' => 'left',
            ],
        ],
    ],
];
