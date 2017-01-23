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
    public function testFindOrganization()
    {
        $query = Repo::find()->where(['organization' => 'hiqdev']);
        $models = $query->all();
    }

    public function testFindUser()
    {
        $query = Repo::find()->where(['user' => 'hiqsol']);
        $models = $query->all();
    }
}
