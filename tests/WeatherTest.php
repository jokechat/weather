<?php
use Weather\Config;
use Weather\Weather;
class WeatherTest extends PHPUnit_Framework_TestCase
{
    public function testConfig()
    {
        $config     = Config::getConfig();
        $this->assertArrayHasKey("uid", $config);
    }

    public function testNow()
    {
        $weather    = new Weather();
        $info       = $weather->now("北京");
        $this->assertArrayHasKey('results', $info);
    }
}
?>