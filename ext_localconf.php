<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'PhotothequeVMRTAMSBRAAL.PhotothequeVmrtamsdraal',
            'Pi1',
            [
                'Photo' => 'list, show, search, cartography',
                'Comment' => 'list, new, create'
            ],
            // non-cacheable actions
            [
                'Photo' => 'search',
                'Comment' => 'create'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'PhotothequeVMRTAMSBRAAL.PhotothequeVmrtamsdraal',
            'Pi2',
            [
                'Album' => 'list, show, search'
            ],
            // non-cacheable actions
            [
                'Album' => 'search'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'PhotothequeVMRTAMSBRAAL.PhotothequeVmrtamsdraal',
            'Pi3',
            [
                'Tag' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Photo' => 'create, ',
                'Album' => '',
                'Tag' => '',
                'Comment' => 'create'
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        pi1 {
                            iconIdentifier = phototheque_vmrtamsdraal-plugin-pi1
                            title = LLL:EXT:phototheque_vmrtamsdraal/Resources/Private/Language/locallang_db.xlf:tx_phototheque_vmrtamsdraal_pi1.name
                            description = LLL:EXT:phototheque_vmrtamsdraal/Resources/Private/Language/locallang_db.xlf:tx_phototheque_vmrtamsdraal_pi1.description
                            tt_content_defValues {
                                CType = list
                                list_type = photothequevmrtamsdraal_pi1
                            }
                        }
                        pi2 {
                            iconIdentifier = phototheque_vmrtamsdraal-plugin-pi2
                            title = LLL:EXT:phototheque_vmrtamsdraal/Resources/Private/Language/locallang_db.xlf:tx_phototheque_vmrtamsdraal_pi2.name
                            description = LLL:EXT:phototheque_vmrtamsdraal/Resources/Private/Language/locallang_db.xlf:tx_phototheque_vmrtamsdraal_pi2.description
                            tt_content_defValues {
                                CType = list
                                list_type = photothequevmrtamsdraal_pi2
                            }
                        }
                        pi3 {
                            iconIdentifier = phototheque_vmrtamsdraal-plugin-pi3
                            title = LLL:EXT:phototheque_vmrtamsdraal/Resources/Private/Language/locallang_db.xlf:tx_phototheque_vmrtamsdraal_pi3.name
                            description = LLL:EXT:phototheque_vmrtamsdraal/Resources/Private/Language/locallang_db.xlf:tx_phototheque_vmrtamsdraal_pi3.description
                            tt_content_defValues {
                                CType = list
                                list_type = photothequevmrtamsdraal_pi3
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'phototheque_vmrtamsdraal-plugin-pi1',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:phototheque_vmrtamsdraal/Resources/Public/Icons/user_plugin_pi1.svg']
			);
		
			$iconRegistry->registerIcon(
				'phototheque_vmrtamsdraal-plugin-pi2',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:phototheque_vmrtamsdraal/Resources/Public/Icons/user_plugin_pi2.svg']
			);
		
			$iconRegistry->registerIcon(
				'phototheque_vmrtamsdraal-plugin-pi3',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:phototheque_vmrtamsdraal/Resources/Public/Icons/user_plugin_pi3.svg']
			);
		
    }
);
