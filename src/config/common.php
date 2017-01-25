<?php
/**
 * GitHub API implementation for yii2-hiart
 *
 * @link      https://github.com/hiqdev/yii2-hiart-github
 * @package   yii2-hiart-github
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

return empty($params['github.enabled']) ? [] : [
    'components' => [
        $params['github.dbname'] => array_filter([
            'class' => \hiqdev\hiart\github\Connection::class,
            'requestClass' => $params['github.requestClass'] ?: $params['hiart.requestClass'],
            'name' => $params['github.dbname'],
            'auth' => $params['github.auth'],
        ]),
    ],
    'container' => [
        'singletons' => [
            \hiqdev\hiart\github\ConnectionInterface::class => function () {
                return Yii::$app->get(Yii::$app->params['github.dbname']);
            },
        ],
    ],
];
