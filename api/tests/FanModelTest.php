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
        $result = FanModel::getNationality('หมวยดอก');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetNationality_NameLength12()
    {
        $expected_result = 'วากานด้า';
        $result = FanModel::getNationality('หมีน้อยผู้น่ารัก');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetNationality_NameLength16()
    {
        $expected_result = 'จีน';
        $result = FanModel::getNationality('น้องหมีอ้วนณัฐพร');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetNationality_NameLength22()
    {
        $expected_result = 'คองโก';
        $result = FanModel::getNationality('กรุงเทพมหานครอมรรัตนโกสิน');
        $this->assertEquals($expected_result, $result);
    }
} 