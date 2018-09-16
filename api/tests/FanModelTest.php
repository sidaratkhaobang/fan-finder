<?php

use PHPUnit\Framework\TestCase;

final class FanModelTest extends TestCase
{
    public function testPredict()
    {
        $expected_result = [
            'nationality' => 'เกาหลี',
            'place' => 'วากานด้า',
            'action' => 'จาม' 
        ];
        $result = FanModel::predict('Puthy', '07/15/1998', '0935754721');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetNationality_NameLength4(){
        $expected_result = 'เกาหลี';
        $result = FanModel::getNationality('หมวย');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetNationality_NameLength7(){
        $expected_result = 'ไทย';
        $result = FanModel::getNationality('ดอกหมวย');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetNationality_NameLength11(){
        $expected_result = 'วากานด้า';
        $result = FanModel::getNationality('ดอกหมวยอิอิ');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetNationality_NameLength16(){
        $expected_result = 'จีน';
        $result = FanModel::getNationality('ดอกหมวยอิอิเหี้ย');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetNationality_NameLength21(){
        $expected_result = 'ชาติหน้า';
        $result = FanModel::getNationality('ดอกหมวยอิอิเหี้ยมากๆๆ');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetPlace_Dob0(){
        $expected_result = 'วากานด้า';
        $result = FanModel::getPlace('01/06/2001');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetPlace_Dob1(){
        $expected_result = 'รัฐเวอร์เรีย';
        $result = FanModel::getPlace('02/06/2001');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetPlace_Dob2(){
        $expected_result = 'โซโคเวีย';
        $result = FanModel::getPlace('03/06/2001');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetPlace_Dob3(){
        $expected_result = 'แซนดร้า';
        $result = FanModel::getPlace('04/06/2001');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetPlace_Dob4(){
        $expected_result = 'แอสการ์ด';
        $result = FanModel::getPlace('05/06/2001');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetPlace_Dob5(){
        $expected_result = 'บรูคลิน';
        $result = FanModel::getPlace('10/03/2540');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetPlace_Dob6(){
        $expected_result = 'โซล';
        $result = FanModel::getPlace('10/04/2540');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetPlace_Dob7(){
        $expected_result = 'โอคแลนด์';
        $result = FanModel::getPlace('10/05/2540');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetPlace_Dob8(){
        $expected_result = 'โนเแวร์';
        $result = FanModel::getPlace('11/05/2540');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetPlace_Dob9(){
        $expected_result = 'บางประกง';
        $result = FanModel::getPlace('21/05/2540');
        $this->assertEquals($expected_result, $result);
    }

    // test getAction 10 testcases

    public function testGetAction0(){
        $expected_result = 'จูนรถ';
        $result = FanModel::getAction('0805171080');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetAction1(){
        $expected_result = 'นึ่งซาลาเปา';
        $result = FanModel::getAction('0805181080');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetAction2(){
        $expected_result = 'มองนม';
        $result = FanModel::getAction('0806181080');
        $this->assertEquals($expected_result, $result);
    }
    
    public function testGetAction3(){
        $expected_result = 'จาม';
        $result = FanModel::getAction('0806281080');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetAction4(){
        $expected_result = 'ขี้';
        $result = FanModel::getAction('0807281080');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetAction5(){
        $expected_result = 'ชักว่าว';
        $result = FanModel::getAction('0817281080');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetAction6(){
        $expected_result = 'เล่นเกม';
        $result = FanModel::getAction('0817281180');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetAction7(){
        $expected_result = 'ดูหนัง';
        $result = FanModel::getAction('0817281190');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetAction8(){
        $expected_result = 'ดูคอนเสิร์ด';
        $result = FanModel::getAction('0817281290');
        $this->assertEquals($expected_result, $result);
    }

    public function testGetAction9(){
        $expected_result = 'กินข้าว';
        $result = FanModel::getAction('0817283190');
        $this->assertEquals($expected_result, $result);
    }
    
}