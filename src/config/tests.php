<?php
/**
 * GitHub API implementation for yii2-hiart
 *
 * @link      https://github.com/hiqdev/yii2-hiart-github
 * @package   yii2-hiart-github
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

return array_filter([
    'id' => 'yii2-hiart-github-tests',
    'basePath' => dirname(__DIR__),
    'components' => empty($params['github.enabled']) ? [] : [
        $params['github.dbname'] => [
            'auth' => [
                'headerToken' => '46c92a877da26ae56ed4a062d5baf1fd66a4e066',
            ],
        ],
    ],
]);
