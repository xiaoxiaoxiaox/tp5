<?php

namespace app\common\lib;

use think\facade\Cache;
use think\facade\View;

/**
 * 模板全局配置
 * Class TemplateConfig
 *
 * @package app\common\lib
 */
class TemplateConfig
{
    protected $defaultAssign    =   [];

    public function __construct()
    {
        $this->getConfig();
        $this->getActionConfig();
        View::share($this->defaultAssign);
    }

    /**
     * 获取应用基础配置，如网站名称、静态文件目录等
     * @return $this
     */
    protected function getConfig()
    {
        $config = Cache::remember('app_config', function () {
            return ['test' => 1];
            //todo 查询配置
//            return  AppConfig::defaultAssign()->select();
        }, 0);
        $configAssign   =   [];
        foreach ($config as $value) {
            $configAssign['app_config'][$value['config_name']]    =   $value['config_value'];
        }
        $this->defaultAssign    =   array_merge($this->defaultAssign, $configAssign);
        return $this;
    }

    protected function getActionConfig()
    {
        //获取当前请求action的信息
    }
}
