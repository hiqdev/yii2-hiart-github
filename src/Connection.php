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

/**
 * GitHub API implementation.
 *
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class Connection extends \hiqdev\hiart\rest\Connection implements ConnectionInterface
{
    public $queryBuilderClass = QueryBuilder::class;

    public $baseUri = 'https://api.github.com/';

    public static $dbname = 'github';

    public $name = 'github';

    public static function getDb($name = null, $class = ConnectionInterface::class)
    {
        return parent::getDb($name, $class);
    }
}
