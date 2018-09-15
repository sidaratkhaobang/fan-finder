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
    

    

}