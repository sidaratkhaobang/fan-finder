<?php

use PHPUnit\Framework\TestCase;

final class FanModelTest extends TestCase
{
    public function testPredict(): void
    {
        $expected_result = [
            "nationality" => 'อังกฤษ',
            "place" => 'ยอดดอยอันหนาวเหน็บ',
            'action' => 'ปิ้งไก่' 
        ];
        $result = FanModel::predict($name, $dob, $mobileno);
        $this->assertEquals($expected_result, $result);
    }
    public function testGetNationaliy_NameLength4()
    {
        $expected_result = 'เกาหลี';
        $result = FanModel::getNationality('หมวย');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetNationaliy_NameLength7()
    {
        $expected_result = 'ไทย';
        $result = FanModel::getNationality('หมวยลอย');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetNationaliy_NameLength10()
    {
        $expected_result = 'ไทย';
        $result = FanModel::getNationality('หมวยลอยได้');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetNationaliy_NameLength15()
    {
        $expected_result = 'วากานด้า';
        $result = FanModel::getNationality('หมวยลอยได้กรุบๆ');
        $this->assertEquals($expected_result, $result);
    }

   
}