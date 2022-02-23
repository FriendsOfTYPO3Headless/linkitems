<?php

defined('TYPO3_MODE') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'linkitems',
    'Configuration/TypoScript/',
    'Linkitems'
);
