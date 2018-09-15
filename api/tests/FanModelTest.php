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

    public function testGetNationality_NameLength4(){
        $expected_result = 'เกาหลี';
        $result = Fanmodel::getNationality('หมวย');
        $this->assertEquals($expected_result,$result);
    }

    public function testGetNationality_NameLength7(){
        $expected_result = 'ไทย';
        $result = Fanmodel::getNationality('หมวยสวย');
        $this->assertEquals($expected_result,$result);
    }

    public function testGetNationality_NameLength12(){
        $expected_result = 'วากานด้า';
        $result = Fanmodel::getNationality('กิ๊บอ้วนมากๆ');
        $this->assertEquals($expected_result,$result);
    }

    public function testGetNationality_NameLength18(){
        $expected_result = 'จีน';
        $result = Fanmodel::getNationality('นางสาวณกรตาเปียทอง');
        $this->assertEquals($expected_result,$result);
    }

    public function testGetNationality_NameLength22(){
        $expected_result = 'ชาติหน้า';
        $result = Fanmodel::getNationality('นางสาวณกรตาเปียทองอิอิ');
        $this->assertEquals($expected_result,$result);
    }
    
}