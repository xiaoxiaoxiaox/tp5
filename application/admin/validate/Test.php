<?php

namespace app\admin\validate;

/**
 * Class Test
 *
 * @package \app\admin\validate
 */
class Test extends Base
{
    protected $rule = [
        'id' => 'require'
    ];

    protected $scene = [
        'index' => ['id']
    ];
}