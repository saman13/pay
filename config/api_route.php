<?php

return [
    [
        'class' => 'yii\rest\UrlRule',
        'controller' => 'v1/auth',
        'pluralize'=>false,
        'prefix' => 'api',
        'extraPatterns' => [
            'GET pay' => 'pay',
            'POST callback' => 'callback',
            
            'OPTIONS pay' => 'options',
            'OPTIONS callback' => 'options',
        ],
    ],
];