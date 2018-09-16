<?php

use PHPUnit\Framework\TestCase;

final class FanModelTest extends TestCase
{
    public function testPredict(): void
    {
        $expected_result = [
            "nationality" => 'ไทย',
            "place" => 'ตลาด',
            'action' => 'ปิ้งไก่' 
        ];

        $result = FanModel::predict('namfon', '07/11/2541', '0222223331');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetNationality_Namelengthk()
 
    {
        $expected_result = 'เกาหลี';
        $result = FanModel::getNationality('หมวย');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetNationality_Namelengtht()
 
    {
        $expected_result = 'ไทย';
        $result = FanModel::getNationality('ดอกหมวย');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetNationality_Namelengthv()
 
    {
        $expected_result = 'วากานด้า';
        $result = FanModel::getNationality('ดอกหมวยสีทอง');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetNationality_Namelengthc()
 
    {
        $expected_result = 'จีน';
        $result = FanModel::getNationality('ดอกหมวยสีทองมีหนาม');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetNationality_Namelengthko()
    {
        $expected_result = 'คองโก';
        $result = FanModel::getNationality('ดอกหมวยสีทองมีหนามแหลมคม');
        $this->assertEquals($expected_result, $result);
    }    
     

    public function testGetPlace0()
    {
        $expected_result = 'ป่า';
        $result = FanModel::getPlace(0);
        $this->assertEquals($expected_result, $result);
    }
    public function testGetPlace1()
    {
        $expected_result = 'ตลาด';
        $result = FanModel::getPlace(1);
        $this->assertEquals($expected_result, $result);
    }
    public function testGetPlace2()
    {
        $expected_result = 'บ้าน';
        $result = FanModel::getPlace(2);
        $this->assertEquals($expected_result, $result);
    }
    public function testGetPlace3()
    {
        $expected_result = 'หอ';
        $result = FanModel::getPlace(3);
        $this->assertEquals($expected_result, $result);
    }
    public function testGetPlace4()
    {
        $expected_result = 'ห้องสมุด';
        $result = FanModel::getPlace(4);
        $this->assertEquals($expected_result, $result);
    }
    public function testGetPlace5()
    {
        $expected_result = 'ห้าง';
        $result = FanModel::getPlace(5);
        $this->assertEquals($expected_result, $result);
    }
    public function testGetPlace6()
    {
        $expected_result = 'วัด';
        $result = FanModel::getPlace(6);
        $this->assertEquals($expected_result, $result);
    }
    public function testGetPlace7()
    {
        $expected_result = 'โพรง';
        $result = FanModel::getPlace(7);
        $this->assertEquals($expected_result, $result);
    }
    public function testGetPlace8()
    {
        $expected_result = 'แม่น้ำ';
        $result = FanModel::getPlace(8);
        $this->assertEquals($expected_result, $result);
    }
    public function testGetPlace9()
    {
        $expected_result = 'ห้วย';
        $result = FanModel::getPlace(9);
        $this->assertEquals($expected_result, $result);
    }
    public function testGetAction0()
    {
        $expected_result = 'ปิ้งไก่';
        $result = FanModel::getAction('0111111112');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetAction1()
    {
        $expected_result = 'ทอดหมู';
        $result = FanModel::getAction('0111111113');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetAction2()
    {
        $expected_result = 'ต้มมาม่า';
        $result = FanModel::getAction('0111111114');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetAction3()
    {
        $expected_result = 'นึ่งปลา';
        $result = FanModel::getAction('0111111115');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetAction4()
    {
        $expected_result = 'ทอดไข่';
        $result = FanModel::getAction('0111111116');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetAction5()
    {
        $expected_result = 'ต้มหมู';
        $result = FanModel::getAction('0111111117');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetAction6()
    {
        $expected_result = 'ต้มยำ';
        $result = FanModel::getAction('0111111118');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetAction7()
    {
        $expected_result = 'ทอดไก่';
        $result = FanModel::getAction('0111111119');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetAction8()
    {
        $expected_result = 'เจียวไข่';
        $result = FanModel::getAction('0111111129');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetAction9()
    {
        $expected_result = 'ตุ๋นหมู';
        $result = FanModel::getAction('0111111139');
        $this->assertEquals($expected_result, $result);
    }


}