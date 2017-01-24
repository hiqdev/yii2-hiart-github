<?php
/**
 * GitHub API implementation for yii2-hiart
 *
 * @link      https://github.com/hiqdev/yii2-hiart-github
 * @package   yii2-hiart-github
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\hiart\github\models;

use hiqdev\hiart\github\ActiveRecord;
use hiqdev\hiart\Query;
use hiqdev\hiart\QueryBuilderInterface;

/**
 * GitHub repository.
 * See [documentation](https://developer.github.com/v3/repos/).
 *
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class Repo extends ActiveRecord
{
    public function rules()
    {
        return [
            ['id', 'integer'],
            ['name', 'string'],
        ];
    }

    public static function from()
    {
        return 'repos';
    }

    public static function prepare(Query $query, QueryBuilderInterface $builder)
    {
        if (!empty($query->where['organization'])) {
            $prefix = 'orgs/' . $query->where['organization'];
        } elseif (!empty($query->where['user'])) {
            $prefix = 'users/' . $query->where['user'];
        }

        if (isset($prefix)) {
            $query->from = $prefix . '/' . $query->from;
        }
    }
}
