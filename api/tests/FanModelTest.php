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
    public function testGetNationality_NameLength4(){
        $expected_result = 'เกาหลี';
        $result = FanModel::getNationality('หมวย');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetNationality_NameLength7(){
        $expected_result = 'ไทย';
        $result = FanModel::getNationality('ดอกหมวย');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetNationality_NameLength11(){
        $expected_result = 'วากานด้า';
        $result = FanModel::getNationality('ดอกหมวยอิอิ');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetNationality_NameLength16(){
        $expected_result = 'จีน';
        $result = FanModel::getNationality('ดอกหมวยอิอิเหี้ย');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetNationality_NameLength21(){
        $expected_result = 'ชาติหน้า';
        $result = FanModel::getNationality('ดอกหมวยอิอิเหี้ยมากๆๆ');
        $this->assertEquals($expected_result, $result);
    }
    
}