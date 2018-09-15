<?php

use PHPUnit\Framework\TestCase;

final class FanModelTest extends TestCase
{
    public function testPredict(): void
    {

        // $name ="Nat";
        // $dob =" 2 april 1997";
        // $mobileno = "0867454630";
        // $expected_result = [
        //     "nationality" => 'อังกฤษ1',
        //     "place" => 'ยอดดอยอันหนาวเหน็บ',
        //     'action' => 'ปิ้งไก่' 
        // ];
        $expected_result = [
            "nationality" => 'ไทย',
            "place" => 'อาคารเรียนรวม 3',
            'action' => 'ขึ้นบันไดอาคารเรียนรวม 3' 
        ];
        $result = FanModel::predict($name, $dob, $mobileno);
        $this->assertEquals($expected_result, $result);
    }
    public function testGatNationality_NameLenght4()
    {
        $expected_result ='เกาหลี';
        $result = FanModel::getNationality('[บี]');
        $this->assertEquals($expected_result, $result);
    }
    public function testGatNationality_NameLenght10()
    {
        $expected_result ='ไทย';
        $result = FanModel::getNationality('[หมวยดก]');
        $this->assertEquals($expected_result, $result);
    }
    public function testGatNationality_NameLenght15()
    {
        $expected_result ='วากานด้า';
        $result = FanModel::getNationality('[ฟิวฟี่ขี้ลัก]');
        $this->assertEquals($expected_result, $result);
    }
    public function testGatNationality_NameLenght20()
    {
        $expected_result ='จีน';
        $result = FanModel::getNationality('[ณัฐวุฒิชอบขุดดิน]');
        $this->assertEquals($expected_result, $result);
    }
    public function testGatNationality_NameLenghtmore21()
    {
        $expected_result ='ชาติหน้า';
        $result = FanModel::getNationality('[ทีเด็ดเฟี้ยวฟ้าวเยี่ยวราดพื้นลื่นหัวทิ่มดิน]');
        $this->assertEquals($expected_result, $result);
    }
}