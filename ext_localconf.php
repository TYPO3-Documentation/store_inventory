<?php
// Prevent script from being called directly
defined('TYPO3') or die();

// encapsulate all locally defined variables
(function () {
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
})();
