<?php
if (!defined('TYPO3_MODE')) {
  die ('Access denied.');
}

// Einbindung Flexform für Plugin Teamlistekids der Extension Kuhteams
$pluginSignature = 'kuhteams_teamlistekids';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
  $pluginSignature,
  'FILE:EXT:kuhteams/Configuration/FlexForms/Teamlistekids.xml'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'CP.kuhteams',
    'Teamliste',
    'KIND&HUND Teamliste'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'CP.kuhteams',
    'Teamlistekids',
    'KIND&HUND Teamliste Kinder'
);
