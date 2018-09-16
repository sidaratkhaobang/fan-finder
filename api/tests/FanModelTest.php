<?php

use PHPUnit\Framework\TestCase;

final class FanModelTest extends TestCase
{
    public function testPrdict() 
    {
        $expected_result = [
            "nationality" => Fanmodel::getNationality($name),
            "place" => Fanmodel::getPlace($dob),
            'action' => Fanmodel::getAction($mobileno) 
        ];
        $result = FanModel::predict($name, $dob, $mobileno);
        $this->assertEquals($expected_result, $result);
    }
    public function testgetNationalityleaght4(){
        $expected_result='Korea';
        $result = FanModel::$getNationality(Ween);
        $this->assertEquals($expected_result, $result);
    }
    public function testgetNationalityleaght8(){
        $expected_result='Thai';
        $result = FanModel::$getNationality(Weenneen);
        $this->assertEquals($expected_result, $result);
    }
    public function testgetNationalityleaght13(){
        $expected_result='Vaganda';
        $result = FanModel::$getNationality(elephenbiggie);
        $this->assertEquals($expected_result, $result);
    }
    public function testgetNationalityleaght18(){
        $expected_result='Chinese';
        $result = FanModel::$getNationality(KagamiPieroKanashi);
        $this->assertEquals($expected_result, $result);
    }
    public function testgetNationalityleaght22(){
        $expected_result='Conggo';
        $result = FanModel::$getNationality(KagamiPieroKanashiBoom);
        $this->assertEquals($expected_result, $result);
    }
    public function testgetPlaceKorea(){
        $expected_result='Korea';
        $result = FanModel::$getPlace(01/01/2015);
        $this->assertEquals($expected_result, $result);
    }
    public function testgetPlaceUSA(){
        $expected_result='USA';
        $result = FanModel::$getPlace(01/01/2016);
        $this->assertEquals($expected_result, $result);
    }
    public function testgetPlaceBankok(){
        $expected_result='Bankok';
        $result = FanModel::$getPlace(01/01/2017);
        $this->assertEquals($expected_result, $result);
    }
    public function testgetPlaceMarket(){
        $expected_result='Market';
        $result = FanModel::$getPlace(01/01/2018);
        $this->assertEquals($expected_result, $result);
    }
    public function testgetPlaceGana(){
        $expected_result='Gana';
        $result = FanModel::$getPlace(01/01/2019);
        $this->assertEquals($expected_result, $result);
    }
    public function testgetPlaceConcert(){
        $expected_result='Concert';
        $result = FanModel::$getPlace(01/01/2020);
        $this->assertEquals($expected_result, $result);
    }
    public function testgetPlaceColombia(){
        $expected_result='Colombia';
        $result = FanModel::$getPlace(01/01/2021);
        $this->assertEquals($expected_result, $result);
    }
    public function testgetPlaceJapan(){
        $expected_result='Japan';
        $result = FanModel::$getPlace(01/01/2022);
        $this->assertEquals($expected_result, $result);
    }
    public function testgetPlaceGermany(){
        $expected_result='Germany';
        $result = FanModel::$getPlace(01/01/2023);
        $this->assertEquals($expected_result, $result);
    }
    public function testgetPlaceSaudi(){
        $expected_result='Saudi-Arabia';
        $result = FanModel::$getPlace(01/01/2024);
        $this->assertEquals($expected_result, $result);
    }
    public function testgetActionFishing(){
        $expected_result='Fishing';
        $result = FanModel::$getAction(0851111111)
        $this->assertEquals($expected_result, $result);
    }
    public function testgetActionHorse(){
        $expected_result='Ride horse';
        $result = FanModel::$getAction(0851111112)
        $this->assertEquals($expected_result, $result);
    }
    public function testgetActionGiraff(){
        $expected_result='Kill Giraff';
        $result = FanModel::$getAction(0851111113)
        $this->assertEquals($expected_result, $result);
    }
    public function testgetActionDragon(){
        $expected_result='Fight Dragon';
        $result = FanModel::$getAction(0851111114)
        $this->assertEquals($expected_result, $result);
    }
    public function testgetActionBoat(){
        $expected_result='Drive Boat';
        $result = FanModel::$getAction(0851111115)
        $this->assertEquals($expected_result, $result);
    }
}