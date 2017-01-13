<?php
return [
    'aliases' => [
        '@themes' => __DIR__ . '/../themes',
        '@theme' => '@themes/themeName' // theme name goes here
    ],
    'components' => [
        'view' => [
            'theme' => [
                'basePath' => '@theme',
                'pathMap' => [
                    '@app/views' => '@theme/views',
                    '@modules' => '@theme/views/modules',
                ],
            ],
        ],
        'urlManager' => [
            // uncomment if multilanguage:
            // 'class' => '\kalpok\i18n\MultiLanguageUrlManager',
        ]
    ],
    'modules' => require(__DIR__ . '/frontend-modules.php')
];
