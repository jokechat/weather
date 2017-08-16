<?php
namespace Weather;
class Config
{
    /**
     * 获取统一化的配置信息
     * @return multitype:
     */
    public static function getConfig()
    {
        $config = include __DIR__."/config/xinzhi.php";
        return $config;
    }
}
?>