<?php

use PHPUnit\Framework\TestCase;

final class FanModelTest extends TestCase
{
    public function testPredict(): void
    {
        $expected_result = [
            "nationality" => 'เกาหลี',
            "place" => 'น้ำตก',
            'action' => 'เล่น PubG' 
        ];
        $result = FanModel::predict('Peter', '16/09/2018', '083-173-6368');
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
    }
    public function testGetPlace9(){
        $expected_result ='สวรรค์ชั้น7';
        $result =FanModel::getplace('09/03/2500');
        $this->assertEquals($expected_result,$result);
    }
    public function testgetActionMean10()
    {
        $expected_result ='ปิ้งกบ';
        $result =FanModel::getAction('080-000-0002');
        $this->assertEquals($expected_result,$result);
    }
    public function testgetActionMean20()
    {
        $expected_result ='จับไก่';
        $result =FanModel::getAction('080-200-0055');
        $this->assertEquals($expected_result,$result);
    }
    public function testgetActionMean30()
    {
        $expected_result ='นอนหลับ';
        $result =FanModel::getAction('082-325-0055');
        $this->assertEquals($expected_result,$result);
    }
    public function testgetActionMean40()
    {
        $expected_result ='ล่าเสือ';
        $result =FanModel::getAction('082-555-5055');
        $this->assertEquals($expected_result,$result);
    }
    public function testgetActionMean50()
    {
        $expected_result ='เล่น PubG';
        $result =FanModel::getAction('092-919-1955');
        $this->assertEquals($expected_result,$result);
    }
    public function testgetActionMean60()
    {
        $expected_result ='นอนแมว';
        $result =FanModel::getAction('088-545-6789');
        $this->assertEquals($expected_result,$result);
    }
    public function testgetActionMean70()
    {
        $expected_result ='ย่างไก่';
        $result =FanModel::getAction('099-948-6799');
        $this->assertEquals($expected_result,$result);
    }
    public function testgetActionMean80()
    {
        $expected_result ='กินข้าว';
        $result =FanModel::getAction('089-999-9999');
        $this->assertEquals($expected_result,$result);
    }
    public function testgetActionMean90()
    {
        $expected_result ='ปีนต้นไม้';
        $result =FanModel::getAction('999-999-9999');
        $this->assertEquals($expected_result,$result);
    }
}