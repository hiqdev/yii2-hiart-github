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

use hiqdev\hiart\github\models\Repo;

class RepoTest extends \PHPUnit_Framework_TestCase
{
    public function testFind()
    {
        $query = Repo::find()->where(['organization' => 'hiqdev']);
        $models = $query->all();
    }
}
