<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,                                       // Extension Key
    'Configuration/TypoScript/FluidStyledContent',  // Path to setup.txt and constants.txt
    'Site Package - Fluid Styled Content'        // Title in the selector box
);
