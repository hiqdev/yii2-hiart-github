<?php
/**
 * GitHub API implementation for yii2-hiart
 *
 * @link      https://github.com/hiqdev/yii2-hiart-github
 * @package   yii2-hiart-github
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\hiart\github;

use hiqdev\hiart\AbstractConnection;

/**
 * GitHub API implementation.
 *
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class Connection extends AbstractConnection
{
    public $queryBuilderClass = QueryBuilder::class;
}
