<?php

namespace app\http\middleware;

/**
 * 模板中间件
 * Class Validate
 *
 * @package app\http\middleware
 */
class Template
{
    public function handle($request, \Closure $next)
    {
        $response = $next($request);

        //模板配置
        app(\app\common\lib\TemplateConfig::class);

        return $response;
    }
}
