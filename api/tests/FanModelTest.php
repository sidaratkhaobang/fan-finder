<?php
use PHPUnit\Framework\TestCase;
 
final class FanModelTest extends TestCase
{
    public function testPredict(): void
    {
        // $name="",
        // $dob="",
        // $mobileno=""
        $expected_result = [
            "nationality" => 'อังกฤษ',
            "place" => 'ยอดดอยอันหนาวเหน็บ',
            'action' => 'ปิ้งไก่' 
        ];
        $result = FanModel::predict($name, $dob, $mobileno);
        $this->assertEquals($expected_result, $result);
    }
    public function testGetNetionaliy_NameLength4(){
        $expected_result = 'เกาหลี';
        $result = FanModel :: getNationality('หมวย');
        $this->assertEquals($expected_result,$result);
    }
    public function testGetNetionaliy_NameLength7(){
        $expected_result = 'ไทย';
        $result = FanModel :: getNationality('กระหรี่');
        $this->assertEquals($expected_result,$result);
    }
    public function testGetNetionaliy_NameLength14(){
        $expected_result = 'วากานด้า';
        $result = FanModel :: getNationality('มาลีสวยมากครับ');
        $this->assertEquals($expected_result,$result);
    }
    public function testGetNetionaliy_NameLength20(){
        $expected_result = 'จีน';
        $result = FanModel :: getNationality('เด็กชายสุดหล่อพ่อรวย');
        $this->assertEquals($expected_result,$result);
    }
    public function testGetNetionaliy_NameLengthmore21(){
        $expected_result = 'Marvel';
        $result = FanModel :: getNationality('วากานด้าไม่ใช่สถานที่แต่เป็นผู้คน');
        $this->assertEquals($expected_result,$result);
    }
    public function testGet1(){
        $expected_result = 'ดาวอังคาร';
        $result = FanModel :: getPlace('20/01/1501');
        $this->assertEquals($expected_result,$result);
    }
}