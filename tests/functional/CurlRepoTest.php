<?php
/**
 * GitHub API implementation for yii2-hiart
 *
 * @link      https://github.com/hiqdev/yii2-hiart-github
 * @package   yii2-hiart-github
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\hiart\github\tests\functional;

use hiqdev\hiart\curl\Request;
use hiqdev\hiart\github\models\Repo;
use Yii;

class CurlRepoTest extends RepoTest
{
    protected static $github;

    public function setUp()
    {
        if (static::$github === null) {
            static::$github = Yii::$app->getComponents()['github'];
        }

        Yii::$app->set('github', array_merge(static::$github, [
            'requestClass' => Request::class,
        ]));
    }

    public function tearDown()
    {
        Yii::$app->set('github', static::$github);
    }
}
