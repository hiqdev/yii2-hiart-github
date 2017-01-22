<?php

error_reporting(-1);

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

Yii::$app = new \yii\console\Application([
    'id' => 'hiart-github',
    'basePath' => __DIR__,
    'components' => [
        'hiart' => [
            'class' => \hiqdev\hiart\github\Connection::class,
            'requestClass' => \hiqdev\hiart\stream\Request::class,
        ],
    ],
]);
