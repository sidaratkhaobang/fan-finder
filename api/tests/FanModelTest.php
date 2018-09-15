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
    public function testGetNationality_Namelengthk()
 
    {
        $expected_result = 'เกาหลี';
        $result = FanModel::getNationality('หมวย');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetNationality_Namelengtht()
 
    {
        $expected_result = 'ไทย';
        $result = FanModel::getNationality('ดอกหมวย');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetNationality_Namelengthv()
 
    {
        $expected_result = 'วากานด้า';
        $result = FanModel::getNationality('ดอกหมวยสีทอง');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetNationality_Namelengthc()
 
    {
        $expected_result = 'จีน';
        $result = FanModel::getNationality('ดอกหมวยสีทองมีหนาม');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetNationality_Namelengthko()
    {
        $expected_result = 'คองโก';
        $result = FanModel::getNationality('ดอกหมวยสีทองมีหนามแหลมคม');
        $this->assertEquals($expected_result, $result);
    }

}