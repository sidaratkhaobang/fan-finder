<?php

use PHPUnit\Framework\TestCase;

final class FanModelTest extends TestCase
{
    public function testPredict()
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

    public function testgetPlace_dob0(){
        $expected_result = 'โซล';
        $result = Fanmodel::getPlace('01/01/2015');
        $this->assertEquals($expected_result,$result);
    }

    public function testgetPlace_dob1(){
        $expected_result = 'นครศรีธรรมราช';
        $result = Fanmodel::getPlace('01/01/2016');
        $this->assertEquals($expected_result,$result);
    }

    public function testgetPlace_dob2(){
        $expected_result = 'กรุงเทพ';
        $result = Fanmodel::getPlace('01/01/2017');
        $this->assertEquals($expected_result,$result);
    }

    public function testgetPlace_dob3(){
        $expected_result = 'ตลาด';
        $result = Fanmodel::getPlace('01/01/2018');
        $this->assertEquals($expected_result,$result);
    }

    public function testgetPlace_dob4(){
        $expected_result = 'แม่น้ำอเมซอน';
        $result = Fanmodel::getPlace('02/01/2018');
        $this->assertEquals($expected_result,$result);
    }

    public function testgetPlace_dob5(){
        $expected_result = 'คอนเสิร์ตซอนโฮ';
        $result = Fanmodel::getPlace('03/01/2018');
        $this->assertEquals($expected_result,$result);
    }

    public function testgetPlace_dob6(){
        $expected_result = 'สยามพารากอน';
        $result = Fanmodel::getPlace('04/01/2018');
        $this->assertEquals($expected_result,$result);
    }

    public function testgetPlace_dob7(){
        $expected_result = 'ดอยผาหมี';
        $result = Fanmodel::getPlace('05/01/2018');
        $this->assertEquals($expected_result,$result);
    }

    public function testgetPlace_dob8(){
        $expected_result = 'น้ำตกไซเบอ';
        $result = Fanmodel::getPlace('06/01/2018');
        $this->assertEquals($expected_result,$result);
    }

    public function testgetPlace_dob9(){
        $expected_result = 'เขาสะแกกรัง';
        $result = Fanmodel::getPlace('07/01/2018');
        $this->assertEquals($expected_result,$result);
    }

    public function testgetAction_mobileno0(){
        $expected_result = 'ทอดไก่';
        $result = Fanmodel::getAction('0811000000');
        $this->assertEquals($expected_result,$result);
    }

    public function testgetAction_mobileno1(){
        $expected_result = 'เดินแบบ';
        $result = Fanmodel::getAction('0821000000');
        $this->assertEquals($expected_result,$result);
    }

    public function testgetAction_mobileno2(){
        $expected_result = 'อาบน้ำ';
        $result = Fanmodel::getAction('0822000000');
        $this->assertEquals($expected_result,$result);
    }

    public function testgetAction_mobileno3(){
        $expected_result = 'โบกแท่งไฟ';
        $result = Fanmodel::getAction('0823000000');
        $this->assertEquals($expected_result,$result);
    }

    public function testgetAction_mobileno4(){
        $expected_result = 'แกะก้างปลา';
        $result = Fanmodel::getAction('0824000000');
        $this->assertEquals($expected_result,$result);
    }

    public function testgetAction_mobileno5(){
        $expected_result = 'ตั้งใจเรียนวิชาเทสติ้ง';
        $result = Fanmodel::getAction('0825000000');
        $this->assertEquals($expected_result,$result);
    }

    public function testgetAction_mobileno6(){
        $expected_result = 'ปล้นธนาคาร';
        $result = Fanmodel::getAction('0826000000');
        $this->assertEquals($expected_result,$result);
    }

    public function testgetAction_mobileno7(){
        $expected_result = 'เล่นปังย่า';
        $result = Fanmodel::getAction('0827000000');
        $this->assertEquals($expected_result,$result);
    }
    
    public function testgetAction_mobileno8(){
        $expected_result = 'เล่นโยวกัง';
        $result = Fanmodel::getAction('0828000000');
        $this->assertEquals($expected_result,$result);
    }

    public function testgetAction_mobileno9(){
        $expected_result = 'นอนหิว';
        $result = Fanmodel::getAction('0829000000');
        $this->assertEquals($expected_result,$result);
    }
    
}