<?php

use PHPUnit\Framework\TestCase;

final class FanModelTest extends TestCase
{
    public function testPrdict() 
    {
        $expected_result = [
            "nationality" => 'อังกฤษ',
            "place" => 'ยอดดอยอันหนาวเหน็บ',
            'action' => 'ปิ้งไก่' 
        ];
        $result = FanModel::predict($name, $dob, $mobileno);
        $this->assertEquals($expected_result, $result);
    }
    public function testgetNationalityleaght4(){
        $expected_result='Korea';
        $result = FanModel::$name_lenght(Ween);
        $this->assertEquals($expected_result, $result);
    }
    public function testgetNationalityleaght8(){
        $expected_result='Thai';
        $result = FanModel::$name_lenght(Weenneen);
        $this->assertEquals($expected_result, $result);
    }
    public function testgetNationalityleaght13(){
        $expected_result='Vaganda';
        $result = FanModel::$name_lenght(elephenbiggie);
        $this->assertEquals($expected_result, $result);
    }
    public function testgetNationalityleaght18(){
        $expected_result='Chinese';
        $result = FanModel::$name_lenght(KagamiPieroKanashi);
        $this->assertEquals($expected_result, $result);
    }
    public function testgetNationalityleaght22(){
        $expected_result='Conggo';
        $result = FanModel::$name_lenght(KagamiPieroKanashiBoom);
        $this->assertEquals($expected_result, $result);
    }
}