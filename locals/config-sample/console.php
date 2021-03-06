<?php
return [
    'id'        => 'kalpok_console',
    'bootstrap' => ['log'],
    'basePath' => $cms,
    'controllerMap' => [
        'rbac' => 'modules\user\install\console\RbacController',
    ],
    'components' => [
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning']
                ]
            ]
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        'db' => require(__DIR__ . '/db.php')
    ],
    'aliases' => [
        '@core' => '@app/core',
        '@config' => '@app/config',
        '@themes' => '@app/themes',
        '@modules' => '@app/modules',
        '@extensions' => '@app/extensions',
    ],
    'params' => [
        'adminEmail' => 'admin@example.com',
    ]
];
