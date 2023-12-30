<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

// Provide TypoScript-File to select in TS-Template
ExtensionManagementUtility::addStaticFile(
    'testext',
    'Configuration/TypoScript',
    'Conpassione Base Extension'
);
