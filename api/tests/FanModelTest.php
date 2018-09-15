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
    public function testGetNationality_Namelength4()
        {
            $expected_result = 'เกาหลี';
            $result = FanModel::getNationality('หมวย');
            $this->assertEquals($expected_result, $result); 
        }
    public function testGetNationality_Namelength7()
        {
            $expected_result = 'ไทย';
            $result = FanModel ::getNationality('อะวาฏิฟ');
            $this->assertEquals($expected_result, $result); 
        }
        public function testGetNationality_Namelength11()
        {
            $expected_result = 'วากานด้า';
            $result = FanModel ::getNationality('กขคงจนยาเด็กญ');
            $this->assertEquals($expected_result, $result); 
        }
        public function testGetNationality_Namelength16()
        {
            $expected_result = 'จีน';
            $result = FanModel ::getNationality('อิทซาลินซิลเวียร');
            $this->assertEquals($expected_result, $result); 
        }
        public function testGetNationality_Namelength21()
        {
            $expected_result = 'ชาติหน้า';
            $result = FanModel ::getNationality('สิดารัศมิ์สะแมวววววก๊ะและบริวาร');
            $this->assertEquals($expected_result, $result); 
        }
} 

