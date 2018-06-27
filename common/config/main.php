<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => require(__DIR__ . '/cache.php'),
        'db' => require(__DIR__ . '/db.php'),
        'redis' => require(__DIR__ . '/redis.php'),
        'elasticsearch' => require(__DIR__ . '/elasticsearch.php'),
    ],
];
