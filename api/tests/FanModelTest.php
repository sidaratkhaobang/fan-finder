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
    public function testGetplace_datesumcase1(){
        $expected_result = 'ดงดอกไม้';
        $result = FanModel::getPlace("02/09/1540");
        $this->assertEquals($expected_result, $result);
    }
    public function testGetplace_datesumcase2(){
        $expected_result = 'พุ้มไม้';
        $result = FanModel::getPlace("03/09/1540");
        $this->assertEquals($expected_result, $result);
    }
    public function testGetplace_datesumcase3(){
        $expected_result = 'ใต้ต้นไม้';
        $result = FanModel::getPlace("04/09/1540");
        $this->assertEquals($expected_result, $result);
    }
    public function testGetplace_datesumcase4(){
        $expected_result = 'บนต้นไม้';
        $result = FanModel::getPlace("05/09/1540");
        $this->assertEquals($expected_result, $result);
    }
    public function testGetplace_datesumcase5(){
        $expected_result = 'มังกร';
        $result = FanModel::getPlace("06/09/1540");
        $this->assertEquals($expected_result, $result);
    }
    public function testGetplace_datesumcase6(){
        $expected_result = 'บลูบัพ';
        $result = FanModel::getPlace("07/09/1540");
        $this->assertEquals($expected_result, $result);
    }
    public function testGetplace_datesumcase7(){
        $expected_result = 'บ้านผม';
        $result = FanModel::getPlace("08/09/1540");
        $this->assertEquals($expected_result, $result);
    }
    public function testGetplace_datesumcase8(){
        $expected_result = 'หน้ามอ';
        $result = FanModel::getPlace("09/09/1540");
        $this->assertEquals($expected_result, $result);
    }
    public function testGetplace_datesumcase9(){
        $expected_result = 'วากานด้า';
        $result = FanModel::getPlace("09/09/1541");
        $this->assertEquals($expected_result, $result);
    }
    // public function testGetplace_datesumcase1(){
    //     $expected_result = 'ในพุ้ม';
    //     $result = FanModel::getPlace("01/09/2540");
    //     $this->assertEquals($expected_result, $result);
    // }
    
}