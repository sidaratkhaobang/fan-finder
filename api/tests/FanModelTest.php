<?php

use PHPUnit\Framework\TestCase;

final class FanModelTest extends TestCase
{
    public function testPredict(): void
    {
        // $name = "สมหญิง ศรีสุข";
        // $dob = "15 Sept 2018";
        // $mobileno = "0987654321";
        $expected_result = [
            "nationality" => 'วากันด้า',
            "place" => 'ทองผาภูมิ',
            'action' => 'หาหอย' 
        ];
        $result = FanModel::predict("สมหญิง ศรีสุข","15/09/2018","09-8765-4321");
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
        $expected_result = 'อเวจีนรก';
        $result = FanModel::getNationality('มูฮัมหมัดกัดดาฟี อิดฆอมมูตามาซีลัย');
        $this->assertEquals($expected_result,$result);
    }

    public function testGetPlace_DateOne()
    {
        $expected_result = 'สวนผึ้ง';
        $result = FanModel::getPlace('01/01/2001');
        $this->assertEquals($expected_result, $result);
    }

    public function testgetAction1(){

        $expected_result = 'หาหอย';
        $result = FanModel::getAction('0-12345-6789');
        $this->assertEquals($expected_result, $result);
    }

    public function testgetAction2(){

        $expected_result = 'หาหอย';
        $result = FanModel::getAction('0-9876-54321');
        $this->assertEquals($expected_result, $result);
    }
}