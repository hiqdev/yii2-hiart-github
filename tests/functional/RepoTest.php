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

class RepoTest extends \PHPUnit\Framework\TestCase
{
    public function testFindByOrganization()
    {
        $query = Repo::find()->where(['organization' => 'hiqdev']);
        $this->checkFound($query);
    }

    public function testFindByUser()
    {
        $query = Repo::find()->where(['user' => 'hiqsol']);
        $this->checkFound($query);
    }

    public function checkFound($query)
    {
        $models = $query->all();

        $this->assertGreaterThan(1, count($models));
        $this->assertInstanceOf(Repo::class, reset($models));
    }
}
