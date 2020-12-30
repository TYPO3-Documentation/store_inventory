<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function () {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'StoreInventory',
            'Pi1',
            [
                \T3docs\StoreInventory\Controller\StoreInventoryController::class => 'list',
            ],
            // non-cacheable actions
            [
                \T3docs\StoreInventory\Controller\StoreInventoryController::class => '',
            ]
        );
    }
);
