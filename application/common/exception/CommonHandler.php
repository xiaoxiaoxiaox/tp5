<?php

namespace app\common\exception;

use think\exception\Handle;
use think\exception\ValidateException;

/**
 * 公共异常类
 * Class CommonHandler
 *
 * @package app\common\exception
 */
class CommonHandler extends Handle
{
    public function render(\Exception $e)
    {
        //自定义的异常类，注意先后顺序
        if ($e instanceof AppValidateException) {
            $result = format($e->getMessage(), $e->getCode(), $e->data, $e->ext);
            return json($result);
        }

        /*// 参数验证错误
        if ($e instanceof ValidateException) {
            return json($e->getMessage());
        }*/

        // 其他错误交给系统处理
        return parent::render($e);
    }
}
