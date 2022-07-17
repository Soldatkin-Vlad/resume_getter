<?php

/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

use Laminas\Db\Adapter;

return [
    'service_manager' => [
        'abstract_factories' => [
            Adapter\AdapterAbstractServiceFactory::class
        ],
        'factories' => [
            Adapter\AdapterInterface::class => Adapter\AdapterServiceFactory::class,
        ],
        'aliases' => [
            Adapter\Adapter::class => Adapter\AdapterServiceFactory::class
        ]
    ],
    'view_manager' => [
        'display_exceptions' => true,
    ],
    'db' => [
        'driver' => 'Pdo',
        'dsn' => 'mysql:dbname=resume;hostname=192.168.0.101',
        'driver_options' => [
            PDO::MYSSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
        ]
    ]
];
