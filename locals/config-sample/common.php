<?php
return [
    'runtimePath' => __DIR__ . '/../runtime/',
    'components' => [
        'db' => require(__DIR__ . '/db.php'),
        'request' => [
            'cookieValidationKey' => '',
        ],
        'i18n' => [
            // uncomment if multilanguage:
            /*'languages' => ['fa', 'en']
            'translations' => [
                'theme' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@theme/messages',
                ]
            ]*/
        ],
        'mailer' => [
            'htmlLayout' => '@theme/views/layouts/mail.php'
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ]
    ]
];
