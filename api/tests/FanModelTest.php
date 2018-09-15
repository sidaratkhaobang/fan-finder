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
        $this->assertEquals($expected_result,$result);
    }
    public function testGetNationality_NameLength7()
    {
        $expected_result = 'ไทย';
        $result = FanModel::getNationality('ดอกหมวย');
        $this->assertEquals($expected_result,$result);
    }
    public function testGetNationality_NameLength13()
    {
        $expected_result = 'วากานด้า';
        $result = FanModel::getNationality('หมวยดอกดอกดอก');
        $this->assertEquals($expected_result,$result);
    } 
    public function testGetNationality_NameLength16()
    {
        $expected_result = 'จีน';
        $result = FanModel::getNationality('ดอกหมวยดอกดอกดอก');
        $this->assertEquals($expected_result,$result);
    }   
    public function testGetNationality_NameLength21()
    {
        $expected_result = 'คองโก';
        $result = FanModel::getNationality('ดอกดอดอกหมวยดอกดอกดอก');
        $this->assertEquals($expected_result,$result);
    }   

    public function testGetplace_datesumcase0(){
        $expected_result = 'สมุย';
        $result = FanModel::getPlace("01/09/1540");
        $this->assertEquals($expected_result, $result);
    }
    public function testGetplace_datesumcase0(){
        $expected_result = 'สมุย';
        $result = FanModel::getPlace("01/09/1540");
        $this->assertEquals($expected_result, $result);
    }
    // public function testGetplace_datesumcase1(){
    //     $expected_result = 'ในพุ้ม';
    //     $result = FanModel::getPlace("01/09/2540");
    //     $this->assertEquals($expected_result, $result);
    // }
    
}