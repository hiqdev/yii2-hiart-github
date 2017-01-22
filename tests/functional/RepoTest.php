<?php

namespace hiqdev\hiart\github\tests\functional;

use hiqdev\hiart\github\Connection;
use hiqdev\hiart\github\models\Repo;
use hiqdev\hiart\stream\Request;
use Yii;

class RepoTest extends \PHPUnit_Framework_TestCase
{
    public function testFind()
    {
        $query = Repo::find();
    }
}
