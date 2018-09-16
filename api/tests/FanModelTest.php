<?php

use PHPUnit\Framework\TestCase;

final class FanModelTest extends TestCase
{
    public function testPredict(): void
    {
        $expected_result = [
            "nationality" => 'ไทย',
            "place" => 'สนามกีฬา',
            'action' => 'ทำการบ้าน' 
        ];
        $result = FanModel::predict('momoji', '18/02/39', '0833969553');
        $this->assertEquals($expected_result, $result);
    }

    public function testPredict2(): void
    {
        $expected_result = [
            "nationality" => 'วากานด้า',
            "place" => 'โรงพยาบาล',
            'action' => 'กำลังคุยกับเพื่อน' 
        ];
        $result = FanModel::predict('momojinarumi', '11/01/60', '0833969755');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetNationality_NameLength4()
    {
        $expected_result = 'เกาหลี';
        $result = FanModel::getNationality('หมวย');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetNationality_NameLength7()
    {
        $expected_result = 'ไท';
        $result = FanModel::getNationality('หมวยดอก');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetNationality_NameLength12()
    {
        $expected_result = 'วากานด้า';
        $result = FanModel::getNationality('หมีน้อยคนสวย');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetNationality_NameLength16()
    {
        $expected_result = 'จีน';
        $result = FanModel::getNationality('น้องหมีอ้วนณัฐพร');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetNationality_NameLength25()
    {
        $expected_result = 'คองโก';
        $result = FanModel::getNationality('กรุงเทพมหานครอมรรัตนโกสิน');
        $this->assertEquals($expected_result, $result);
    }

    public function testPlace_score0()
    {
        $expected_result = 'สระว่ายน้ำ';
        $result = FanModel::getPlace('00/00/00');
        $this->assertEquals($expected_result, $result);
    }

    public function testPlace_score1()
    {
        $expected_result = 'ห้องเรียน';
        $result = FanModel::getPlace('01/00/00');
        $this->assertEquals($expected_result, $result);
    }

    public function testPlace_score2()
    {
        $expected_result = 'โรงอาหาร';
        $result = FanModel::getPlace('02/00/00');
        $this->assertEquals($expected_result, $result);
    }

    public function testPlace_score3()
    {
        $expected_result = 'สนามกีฬา';
        $result = FanModel::getPlace('03/00/00');
        $this->assertEquals($expected_result, $result);
    }

    public function testPlace_score4()
    {
        $expected_result = 'สนามฟุตบอล';
        $result = FanModel::getPlace('04/00/00');
        $this->assertEquals($expected_result, $result);
    }

    public function testPlace_score5()
    {
        $expected_result = 'หอดูดาว';
        $result = FanModel::getPlace('05/00/00');
        $this->assertEquals($expected_result, $result);
    }

    public function testPlace_score6()
    {
        $expected_result = 'สนามเทนนิส';
        $result = FanModel::getPlace('06/00/00');
        $this->assertEquals($expected_result, $result);
    }

    public function testPlace_score7()
    {
        $expected_result = 'ห้องสมุด';
        $result = FanModel::getPlace('07/00/00');
        $this->assertEquals($expected_result, $result);
    }

    public function testPlace_score8()
    {
        $expected_result = 'โลตัส';
        $result = FanModel::getPlace('09/00/90');
        $this->assertEquals($expected_result, $result);
    }

    public function testPlace_score9()
    {
        $expected_result = 'โรงพยาบาล';
        $result = FanModel::getPlace('09/00/00');
        $this->assertEquals($expected_result, $result);
    }

    public function testAction_Phone0()
    {
        $expected_result = 'ทำการบ้าน';
        $result = FanModel::getAction('0833969553');
        $this->assertEquals($expected_result, $result);
    }
} 