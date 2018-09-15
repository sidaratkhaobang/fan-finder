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
    public function testGetPlace0(){
        $expected_result ='คูน้ำ';
        $result =FanModel::getplace('30/07/0000');
        $this->assertEquals($expected_result,$result);
    }
    public function testGetPlace1(){
        $expected_result ='โรงแรม';
        $result =FanModel::getplace('11/09/0000');
        $this->assertEquals($expected_result,$result);
    }
    public function testGetPlace2(){
        $expected_result ='โรงเรียน';
        $result =FanModel::getplace('11/09/0001');
        $this->assertEquals($expected_result,$result);
    }
    public function testGetPlace3(){
        $expected_result ='ป่า';
        $result =FanModel::getplace('30/05/5000');
        $this->assertEquals($expected_result,$result);
    }
    public function testGetPlace4(){
        $expected_result ='สวนสัตว์';
        $result =FanModel::getplace('04/03/2500');
        $this->assertEquals($expected_result,$result);
    }
    public function testGetPlace5(){
        $expected_result ='สวนสาธารณะ';
        $result =FanModel::getplace('05/03/2500');
        $this->assertEquals($expected_result,$result);
    }
    public function testGetPlace6(){
        $expected_result ='สวนสนุก';
        $result =FanModel::getplace('06/03/2500');
        $this->assertEquals($expected_result,$result);
    }
    public function testGetPlace7(){
        $expected_result ='น้ำตก';
        $result =FanModel::getplace('07/03/2500');
        $this->assertEquals($expected_result,$result);
    }
    public function testGetPlace8(){
        $expected_result ='ทะเล';
        $result =FanModel::getplace('08/03/2500');
        $this->assertEquals($expected_result,$result);
    }public function testGetPlace9(){
        $expected_result ='สวรรค์ชั้น7';
        $result =FanModel::getplace('09/03/2500');
        $this->assertEquals($expected_result,$result);
    }
}