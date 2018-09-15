<?php

use PHPUnit\Framework\TestCase;

final class FanModelTest extends TestCase
{
    public function testPredict(): void
    {
        $expected_result = [
            "nationality" => 'Eng',
            "place" => 'abc',
            'action' => 'pingkai' 
        ];
        $result = FanModel::predict($name, $dob, $mobileno);
        $this->assertEquals($expected_result, $result);
    }

    
    public function testGetnationality_nameLeanght4(): void
    {
        $expected_result = 'เกาหลี';
        $result = FanModel::getNationality('หมวย');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetnationality_nameLeanght7(): void
    {
        $expected_result = 'ไทย';
        $result = FanModel::getNationality('ดอกหมวย');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetnationality_nameLeanght12(): void
    {
        $expected_result = 'วากานด้า';
        $result = FanModel::getNationality('ดอกหมวยน่ารัก');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetnationality_nameLeanght17(): void
    {
        $expected_result = 'จีน';
        $result = FanModel::getNationality('ดอกหมวยน่ารักสุดด');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetnationality_nameLeanght23(): void
    {
        $expected_result = 'ชาติหน้า';
        $result = FanModel::getNationality('ดอกหมวยน่ารักสุดดดดดดดด');
        $this->assertEquals($expected_result, $result);
    }

    public function testPlace_sumdate0()
    {
        $expected_result = 'aaa';
        $result = FanModel::getPlace('11/11/2004');
        $this->assertEquals($expected_result, $result);
    }
    public function testPlace_sumdate1()
    {
        $expected_result = 'bbb';
        $result = FanModel::getPlace('12/11/2004');
        $this->assertEquals($expected_result, $result);
    }
    public function testPlace_sumdate2()
    {
        $expected_result = 'ccc';
        $result = FanModel::getPlace('13/11/2004');
        $this->assertEquals($expected_result, $result);
    }
    public function testPlace_sumdate3()
    {
        $expected_result = 'อาคารรวม5';
        $result = FanModel::getPlace('14/11/2004');
        $this->assertEquals($expected_result, $result);
    }
    public function testPlace_sumdate4()
    {
        $expected_result = 'อาคารรวม7';
        $result = FanModel::getPlace('15/11/2004');
        $this->assertEquals($expected_result, $result);
    }
    public function testPlace_sumdate5()
    {
        $expected_result = 'อาคารรวม1';
        $result = FanModel::getPlace('16/11/2004');
        $this->assertEquals($expected_result, $result);
    }
    public function testPlace_sumdate6()
    {
        $expected_result = 'ไทยบุรี';
        $result = FanModel::getPlace('17/11/2004');
        $this->assertEquals($expected_result, $result);
    }
    public function testPlace_sumdate7()
    {
        $expected_result = 'ศุนย์คอม';
        $result = FanModel::getPlace('18/11/2004');
        $this->assertEquals($expected_result, $result);
    }
    public function testPlace_sumdate8()
    {
        $expected_result = '7-11';
        $result = FanModel::getPlace('19/11/2004');
        $this->assertEquals($expected_result, $result);
    }
    public function testPlace_sumdate9()
    {
        $expected_result = 'family mart';
        $result = FanModel::getPlace('29/11/2004');
        $this->assertEquals($expected_result, $result);
    }
    

    

}