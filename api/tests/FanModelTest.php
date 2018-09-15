<?php

use PHPUnit\Framework\TestCase;

final class FanModelTest extends TestCase
{
    public function testPredict(): void
    {
        $name = "สมหญิง ศรีสุข";
        $dob = "15 Sept 2018";
        $mobileno = "0987654321";
        $expected_result = [
            "nationality" => 'German',
            "place" => 'โพชิงกิ',
            'action' => 'โดนยิง' 
        ];
        $result = FanModel::predict($name, $dob, $mobileno);
        $this->assertEquals($expected_result, $result);
    }

    public function testGetNationality_NameLength4(){
        $expected_result = 'เกาหลี';
        $result = FanModel::getNationality('หมวย');
        $this->assertEquals($expected_result,$result);
    }

    public function testGetNationality_NameLength7(){
        $expected_result = 'ไทย';
        $result = FanModel::getNationality('ดอกหมวย');
        $this->assertEquals($expected_result,$result);
    }
}