<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'PhotothequeVMRTAMSBRAAL.PhotothequeVmrtamsdraal',
            'Pi1',
            'Photos'
        );

        $pluginSignature = str_replace('_', '', 'phototheque_vmrtamsdraal') . '_pi1';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:phototheque_vmrtamsdraal/Configuration/FlexForms/flexform_pi1.xml');

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'PhotothequeVMRTAMSBRAAL.PhotothequeVmrtamsdraal',
            'Pi2',
            'Albums'
        );

        $pluginSignature = str_replace('_', '', 'phototheque_vmrtamsdraal') . '_pi2';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:phototheque_vmrtamsdraal/Configuration/FlexForms/flexform_pi2.xml');

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'PhotothequeVMRTAMSBRAAL.PhotothequeVmrtamsdraal',
            'Pi3',
            'Tag'
        );

        $pluginSignature = str_replace('_', '', 'phototheque_vmrtamsdraal') . '_pi3';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:phototheque_vmrtamsdraal/Configuration/FlexForms/flexform_pi3.xml');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('phototheque_vmrtamsdraal', 'Configuration/TypoScript', 'Photothèque VMRTAMSBRAAL');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_photothequevmrtamsdraal_domain_model_photo', 'EXT:phototheque_vmrtamsdraal/Resources/Private/Language/locallang_csh_tx_photothequevmrtamsdraal_domain_model_photo.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_photothequevmrtamsdraal_domain_model_photo');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_photothequevmrtamsdraal_domain_model_album', 'EXT:phototheque_vmrtamsdraal/Resources/Private/Language/locallang_csh_tx_photothequevmrtamsdraal_domain_model_album.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_photothequevmrtamsdraal_domain_model_album');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_photothequevmrtamsdraal_domain_model_tag', 'EXT:phototheque_vmrtamsdraal/Resources/Private/Language/locallang_csh_tx_photothequevmrtamsdraal_domain_model_tag.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_photothequevmrtamsdraal_domain_model_tag');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_photothequevmrtamsdraal_domain_model_comment', 'EXT:phototheque_vmrtamsdraal/Resources/Private/Language/locallang_csh_tx_photothequevmrtamsdraal_domain_model_comment.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_photothequevmrtamsdraal_domain_model_comment');

    }
);
