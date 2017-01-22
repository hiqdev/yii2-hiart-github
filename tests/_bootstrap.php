<?php
/**
 * GitHub API implementation for yii2-hiart
 *
 * @link      https://github.com/hiqdev/yii2-hiart-github
 * @package   yii2-hiart-github
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

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
