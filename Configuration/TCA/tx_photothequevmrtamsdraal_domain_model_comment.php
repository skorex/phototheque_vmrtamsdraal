<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:phototheque_vmrtamsdraal/Resources/Private/Language/locallang_db.xlf:tx_photothequevmrtamsdraal_domain_model_comment',
        'label' => 'author',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'author,content',
        'iconfile' => 'EXT:phototheque_vmrtamsdraal/Resources/Public/Icons/tx_photothequevmrtamsdraal_domain_model_comment.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, author, content, mark, date',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, author, content, mark, date, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_photothequevmrtamsdraal_domain_model_comment',
                'foreign_table_where' => 'AND {#tx_photothequevmrtamsdraal_domain_model_comment}.{#pid}=###CURRENT_PID### AND {#tx_photothequevmrtamsdraal_domain_model_comment}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'author' => [
            'exclude' => true,
            'label' => 'LLL:EXT:phototheque_vmrtamsdraal/Resources/Private/Language/locallang_db.xlf:tx_photothequevmrtamsdraal_domain_model_comment.author',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'content' => [
            'exclude' => true,
            'label' => 'LLL:EXT:phototheque_vmrtamsdraal/Resources/Private/Language/locallang_db.xlf:tx_photothequevmrtamsdraal_domain_model_comment.content',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim,required'
            ]
        ],
        'mark' => [
            'exclude' => true,
            'label' => 'LLL:EXT:phototheque_vmrtamsdraal/Resources/Private/Language/locallang_db.xlf:tx_photothequevmrtamsdraal_domain_model_comment.mark',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required'
            ]
        ],
        'date' => [
            'exclude' => true,
            'label' => 'LLL:EXT:phototheque_vmrtamsdraal/Resources/Private/Language/locallang_db.xlf:tx_photothequevmrtamsdraal_domain_model_comment.date',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 10,
                'eval' => 'datetime',
                'default' => time()
            ],
        ],
    
        'photo' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
