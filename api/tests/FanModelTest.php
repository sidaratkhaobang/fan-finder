<?php

use PHPUnit\Framework\TestCase;

final class FanModelTest extends TestCase
{
    public function testPredict(): void
    {
        $expected_result = [
            "nationality" => 'ฝรั่งเศษ',
            "place" => 'ทุ่งหญ้าลาเวนเดอร์',
            'action' => 'ปิ้งกบ' 
        ];
        $result = FanModel::predict($name, $dob, $mobileno);
        $this->assertEquals($expected_result, $result);
    }
    public function testGetNationality_NameLength4()
    {
        $expected_result = 'เกาหลี';
        $result = FanModel::getNationality('หมวย');
        $this->assertEquals($expected_result,$result);

    }
    public function testGetNationality_NameLength7()
    {
        $expected_result = 'ไทย';
        $result = FanModel::getNationality('หมวยหมก');
        $this->assertEquals($expected_result,$result);

    }
    public function testGetNationality_NameLength13()
    {
        $expected_result = 'วากานด้า';
        $result = FanModel::getNationality('หมวยหมกมิกหมก');
        $this->assertEquals($expected_result,$result);

    }
    public function testGetNationality_NameLength19()
    {
        $expected_result = 'จีน';
        $result = FanModel::getNationality('หมวยหมกมิกหมกอะโต้ย');
        $this->assertEquals($expected_result,$result);

    }
    public function testGetNationality_NameLength26()
    {
        $expected_result = 'คองโก';
        $result = FanModel::getNationality('หมวยหมกมิกหมกอะโต้ยชิกะลูด');
        $this->assertEquals($expected_result,$result);

    }
}