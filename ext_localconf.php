<?php
declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

// Typoscript konfigurieren
// PageTSconfig ist seit V12 in der Datei testext/Configuration/page.tsconfig aufgeführt, es muss nicht extra geladen werden.
ExtensionManagementUtility::addUserTSConfig('@import "EXT:testext/Configuration/TsConfig/User/user.tsconfig">');
