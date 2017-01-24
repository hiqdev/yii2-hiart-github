<?php

return empty($params['github.enabled']) ? [] : [
    'components' => [
        $params['github.dbname'] => array_filter([
            'class' => \hiqdev\hiart\github\Connection::class,
            'name' => $params['github.dbname'],
            'requestClass' => $params['github.requestClass'] ?: $params['hiart.requestClass'],
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
