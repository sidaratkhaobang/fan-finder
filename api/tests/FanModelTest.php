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

    public function testGetNationality_NameLength4()
    {
        $expected_result = 'เกาหลี';
        $result = FanModel::getNationality('หมวย');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetNationality_NameLength7()
    {
        $expected_result = 'ไทย';
        $result = FanModel::getNationality('ดอกหมวย');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetPlace_DateOne() // :(
    {
        $expected_result = 'สวนผึ้ง';
        $result = FanModel::getPlace('01/01/2001'); // 5%10 = 5
        $this->assertEquals($expected_result, $result);
    }

    public function testGetPlace_DateTwo() // :(
    {
        $expected_result = 'ทองผาภูมิ';
        $result = FanModel::getPlace('11/11/2541'); // 16%10 = 6
        $this->assertEquals($expected_result, $result);
    }

    public function testGetPlace_DateThree() // :(
    {
        $expected_result = 'เกาะไหง';
        $result = FanModel::getPlace('32/33/2018'); // 22%10 = 2
        $this->assertEquals($expected_result, $result);
    }
}