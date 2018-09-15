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
    // public function testGetNationality_NameLength4(){
    //     $expected_result = 'เกาหลี';
    //     $result = FanModel::getNationality('หมวย');
    //     $this->assertEquals($expected_result, $result);
    // }

    // public function testGetNationality_NameLength7(){
    //     $expected_result = 'ไทย';
    //     $result = FanModel::getNationality('ดอกหมวย');
    //     $this->assertEquals($expected_result, $result);
    // }

    // public function testGetNationality_NameLength11(){
    //     $expected_result = 'วากานด้า';
    //     $result = FanModel::getNationality('ดอกหมวยอิอิ');
    //     $this->assertEquals($expected_result, $result);
    // }

    // public function testGetNationality_NameLength16(){
    //     $expected_result = 'จีน';
    //     $result = FanModel::getNationality('ดอกหมวยอิอิเหี้ย');
    //     $this->assertEquals($expected_result, $result);
    // }

    // public function testGetNationality_NameLength21(){
    //     $expected_result = 'ชาติหน้า';
    //     $result = FanModel::getNationality('ดอกหมวยอิอิเหี้ยมากๆๆ');
    //     $this->assertEquals($expected_result, $result);
    // }

    // public function testGetPlace_Dob0(){
    //     $expected_result = 'วากานด้า';
    //     $result = FanModel::getPlace('0');
    //     $this->assertEquals($expected_result, $result);
    // }

    // public function testGetPlace_Dob1(){
    //     $expected_result = 'รัฐเวอร์เรีย';
    //     $result = FanModel::getPlace('1');
    //     $this->assertEquals($expected_result, $result);
    // }

    // public function testGetPlace_Dob2(){
    //     $expected_result = 'โซโคเวีย';
    //     $result = FanModel::getPlace('2');
    //     $this->assertEquals($expected_result, $result);
    // }

    // public function testGetPlace_Dob3(){
    //     $expected_result = 'แซนดร้า';
    //     $result = FanModel::getPlace('3');
    //     $this->assertEquals($expected_result, $result);
    // }

    // public function testGetPlace_Dob4(){
    //     $expected_result = 'แอสการ์ด';
    //     $result = FanModel::getPlace('4');
    //     $this->assertEquals($expected_result, $result);
    // }

    // public function testGetPlace_Dob5(){
    //     $expected_result = 'บรูคลิน';
    //     $result = FanModel::getPlace('5');
    //     $this->assertEquals($expected_result, $result);
    // }

    // public function testGetPlace_Dob6(){
    //     $expected_result = 'โซล';
    //     $result = FanModel::getPlace('6');
    //     $this->assertEquals($expected_result, $result);
    // }

    // public function testGetPlace_Dob7(){
    //     $expected_result = 'โอคแลนด์';
    //     $result = FanModel::getPlace('7');
    //     $this->assertEquals($expected_result, $result);
    // }

    // public function testGetPlace_Dob8(){
    //     $expected_result = 'โนเแวร์';
    //     $result = FanModel::getPlace('8');
    //     $this->assertEquals($expected_result, $result);
    // }

    public function testGetPlace_Dob(){
        $expected_result = 'บางประกง';
        $result = FanModel::getPlace('21/05/2540');
        $this->assertEquals($expected_result, $result);
    }
    
}