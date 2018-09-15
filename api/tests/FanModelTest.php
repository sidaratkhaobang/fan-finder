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
    public function testGetNationaliy_NameLength4()
    {
        $expected_result = 'เกาหลี';
        $result = FanModel::getNationality('หมวย');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetNationaliy_NameLength7()
    {
        $expected_result = 'ไทย';
        $result = FanModel::getNationality('หมวยลอย');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetNationaliy_NameLength10()
    {
        $expected_result = 'ไทย';
        $result = FanModel::getNationality('หมวยลอยได้');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetNationaliy_NameLength15()
    {
        $expected_result = 'วากานด้า';
        $result = FanModel::getNationality('หมวยลอยได้กรุบๆ');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetPlace0()
    {
        $expected_result = 'สวนมะม่วง';
        $result = FanModel::getPlace('00/00/0000');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetPlace1()
    {
        $expected_result = 'สังขละบุรี';
        $result = FanModel::getPlace('01/00/0000'); 
        $this->assertEquals($expected_result, $result);
    }
    public function testGetPlace2()
    {
        $expected_result = 'เกาะกูด';
        $result = FanModel::getPlace('11/00/0000');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetPlace3()
    {
        $expected_result = 'โมโกจู';
        $result = FanModel::getPlace('12/00/0000');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetPlace4()
    {
        $expected_result = 'วัดเจติยาคีรีวิหาร';
        $result = FanModel::getPlace('13/00/0000');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetPlace5()
    {
        $expected_result = 'เขื่อนรัชชประภา';
        $result = FanModel::getPlace('14/00/0000');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetPlace6()
    {
        $expected_result = 'ดอยหลวงเชียงดาว';
        $result = FanModel::getPlace('15/00/0000');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetPlace7()
    {
        $expected_result = 'เขาช้างเผือก';
        $result = FanModel::getPlace('16/00/0000');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetPlace8()
    {
        $expected_result = 'เขาช้างเผือก2';
        $result = FanModel::getPlace('17/00/0000');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetPlace9()
    {
        $expected_result = 'เกาะตาชัย';
        $result = FanModel::getPlace('18/00/0000');
        $this->assertEquals($expected_result, $result);
    }
}