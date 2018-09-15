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

    public function testGetNationality_NameLength5(){
        $expected_result = 'เกาหลี';
        $result = FanModel::getNationality('หมวย');
        $this->assertEquals($expected_result,$result);
    }

    public function testGetNationality_NameLength10(){
        $expected_result = 'ไทย';
        $result = FanModel::getNationality('ดอกหมวย');
        $this->assertEquals($expected_result,$result);
    }

    public function testGetNationality_NameLength15(){
        $expected_result = 'วากันด้า';
        $result = FanModel::getNationality('อารีฟีน กุลดี');
        $this->assertEquals($expected_result,$result);
    }

    public function testGetNationality_NameLength20(){
        $expected_result = 'จีน';
        $result = FanModel::getNationality('นายอารีฟีน กุลดีนะ');
        $this->assertEquals($expected_result,$result);
    }

    public function testGetNationality_NameLength25(){
        $expected_result = 'ชาติหน้า';
        $result = FanModel::getNationality('มูฮัมหมัดกัดดาฟี อิดฆอมมูตามาซีลัย');
        $this->assertEquals($expected_result,$result);
    }

    public function testGetPlace(){
        $expected_result = 'อเวจี';
        $result = FanModel::getPlace('15/09/2561');
        $this->assertEquals($expected_result,$result);
    }
}