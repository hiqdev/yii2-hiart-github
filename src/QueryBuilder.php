<?php
/**
 * GitHub API implementation for yii2-hiart.
 *
 * @link      https://github.com/hiqdev/yii2-hiart-github
 * @package   yii2-hiart-github
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\hiart\github;

use hiqdev\hiart\Query;

/**
 * Query builder for GitHub API.
 *
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class QueryBuilder extends \hiqdev\hiart\rest\QueryBuilder
{
    public function buildUri(Query $query)
    {
        $from = $query->from . 's';

        $prefix = $this->buildPrefix($query);

        return ($prefix ? $prefix . '/' : '') . $from;
    }

    public function buildPrefix(Query $query)
    {
        if ($query->from === 'repo') {
            if (!empty($query->where['organization'])) {
                $organization = $query->where['organization'];
                unset($query->where['organization']);

                return "orgs/$organization";
            } elseif (!empty($query->where['user'])) {
                $user = $query->where['user'];
                unset($query->where['user']);

                return "users/$user";
            }
        }
    }
}
