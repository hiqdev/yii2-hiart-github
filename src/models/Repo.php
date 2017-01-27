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
}
