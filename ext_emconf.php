<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Store Inventory',
    'description' => 'This TYPO3 extension is an example in the Extbase Fluid Book. See external documentation',
    'category' => 'plugin',
    'author' => 'TYPO3 Documentation Team',
    'author_company' => 'TYPO3',
    'author_email' => 'documentation@typo3.org',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'version' => '0.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.9.99',
        ]
    ],
    'autoload' => [
        'psr-4' => [
            'MyVendor\\StoreInventory\\' => 'Classes'
        ]
    ],
];
