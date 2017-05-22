<?php
/**
 * GitHub API implementation for yii2-hiart.
 *
 * @link      https://github.com/hiqdev/yii2-hiart-github
 * @package   yii2-hiart-github
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

return empty($params['hiart-github.enabled']) ? [] : [
    'components' => [
        $params['hiart-github.dbname'] => array_filter([
            'class' => \hiqdev\hiart\github\Connection::class,
            'requestClass' => $params['hiart-github.requestClass'] ?: $params['hiart.requestClass'],
            'name' => $params['hiart-github.dbname'],
            'auth' => $params['hiart-github.auth'],
        ]),
    ],
    'container' => [
        'singletons' => [
            \hiqdev\hiart\github\ConnectionInterface::class => function () {
                return Yii::$app->get(Yii::$app->params['hiart-github.dbname']);
            },
        ],
    ],
];
