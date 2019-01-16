<?php

namespace app\common\model;

use think\Model;

/**
 * Class Base
 *
 * @package \app\common\model
 */
class Base extends Model
{
    //时间字段设置为int
    public $autoWriteTimestamp = 'int';
}