<?php
namespace Weather;
use Unirest\Request;

/**
 * Created by PhpStorm.
 * User: jokechat
 * Date: 2017/8/16
 * Time: 18:34
 */
class Weather
{
    /**
     * 获取指定城市的天气实况
     * @param $location
     * 参数值范围：
            城市ID 例如：location=WX4FBXXFKE4F
            城市中文名 例如：location=北京
            省市名称组合 例如：location=辽宁朝阳、location=北京朝阳
            城市拼音/英文名 例如：location=beijing（如拼音相同城市，可在之前加省份和空格，例：shanxi yulin）
            经纬度 例如：location=39.93:116.40（格式是 纬度:经度，英文冒号分隔）
            IP地址 例如：location=220.181.111.86（某些IP地址可能无法定位到城市）
            “ip”两个字母 自动识别请求IP地址，例如：location=ip
     * @param string $language
     * @param string $unit
     * @return mixed
     */
    public function now($location,$language = 'zh-Hans',$unit = 'c')
    {
        $config     = Config::getConfig();
        $url        = $config['weather_now'];
        $params     = [
            'key'       => $config['api_key'],
            'language'  => $language,
            'unit'      => $unit,
            'location'  => $location
        ];
        $result     = Request::get($url,null,$params);
        return json_decode($result->raw_body,true);
    }
}