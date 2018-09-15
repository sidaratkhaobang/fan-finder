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
    public function testGetNationality_Namelength4()
        {
            $expected_result = 'เกาหลี';
            $result = FanModel::getNationality('หมวย');
            $this->assertEquals($expected_result, $result); 
        }
    public function testGetNationality_Namelength7()
        {
            $expected_result = 'ไทย';
            $result = FanModel ::getNationality('อะวาฏิฟ');
            $this->assertEquals($expected_result, $result); 
        }
        public function testGetNationality_Namelength11()
        {
            $expected_result = 'วากานด้า';
            $result = FanModel ::getNationality('วิชุตาหมาดอะดำ');
            $this->assertEquals($expected_result, $result); 
        }
        public function testGetNationality_Namelength16()
        {
            $expected_result = 'จีน';
            $result = FanModel ::getNationality('อิทซาลินซิลเวียร');
            $this->assertEquals($expected_result, $result); 
        }
        public function testGetNationality_Namelength21()
        {
            $expected_result = 'ชาติหน้า';
            $result = FanModel ::getNationality('สิดารัศมิ์สะแมวววววก๊ะและบริวาร');
            $this->assertEquals($expected_result, $result); 
        }


        public function testDayOfBirthday0()
        {
            $expected_result = 'Paris';
            $result = FanModel ::getPlace('01/02/2005');//10%10=0
            $this->assertEquals($expected_result,$result);
        }
        public function testDayOfBirthday1()
        {
            $expected_result = 'Soul';
            $result = FanModel ::getPlace('04/06/2540');//21%10=1
            $this->assertEquals($expected_result,$result);
        }
        public function testDayOfBirthday2()
        {
            $expected_result = 'bangkok';
            $result = FanModel ::getPlace('04/06/2541');//22%10=2
            $this->assertEquals($expected_result,$result);
        }
        public function testDayOfBirthday3()
        {
            $expected_result = 'London';
            $result = FanModel ::getPlace('06/07/2503');//23%10=3
            $this->assertEquals($expected_result,$result);
        }
        public function testDayOfBirthday4()
        {
            $expected_result = 'japan';
            $result = FanModel ::getPlace('08/06/2503');//24%10=4
            $this->assertEquals($expected_result,$result);
        }
        public function testDayOfBirthday5()
        {
            $expected_result = 'USA';
            $result = FanModel ::getPlace('06/07/2541');//25%10=5
            $this->assertEquals($expected_result,$result);
        }
        public function testDayOfBirthday6()
        {
            $expected_result = 'Sweden';
            $result = FanModel ::getPlace('08/06/2541');//26%10=6
            $this->assertEquals($expected_result,$result);
        }
        public function testDayOfBirthday7()
        {
            $expected_result = 'Arizona';
            $result = FanModel ::getPlace('15/06/2544');//27%10=7
            $this->assertEquals($expected_result,$result);
        }
        public function testDayOfBirthday8()
        {
            $expected_result = 'Spain';
            $result = FanModel ::getPlace('19/06/2541');//28%10=8
            $this->assertEquals($expected_result,$result);
        }
        public function testDayOfBirthday9()
        {
            $expected_result = 'peru';
            $result = FanModel ::getPlace('06/07/2536');//29%10=9
            $this->assertEquals($expected_result,$result);
        }
} 

