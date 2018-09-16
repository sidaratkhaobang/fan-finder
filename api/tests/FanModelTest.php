<?php

use PHPUnit\Framework\TestCase;

final class FanModelTest extends TestCase
{
    public function testPredict(): void
    {
        $expected_result = [
            "nationality" => 'เกาหลี',
            "place" => 'สมุย',
            'action' => 'ต้มท่อม' 
        ];
        $result = FanModel::predict('หมวย', '01/09/1540','0123411100');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetNationality_NameLength4()
    {
        $expected_result = 'เกาหลี';
        $result = FanModel::getNationality('หมวย');
        $this->assertEquals($expected_result,$result);
    }
    public function testGetNationality_NameLength7()
    {
        $expected_result = 'ไทย';
        $result = FanModel::getNationality('ดอกหมวย');
        $this->assertEquals($expected_result,$result);
    }
    public function testGetNationality_NameLength13()
    {
        $expected_result = 'วากานด้า';
        $result = FanModel::getNationality('หมวยดอกดอกดอก');
        $this->assertEquals($expected_result,$result);
    } 
    public function testGetNationality_NameLength16()
    {
        $expected_result = 'จีน';
        $result = FanModel::getNationality('ดอกหมวยดอกดอกดอก');
        $this->assertEquals($expected_result,$result);
    }   
    public function testGetNationality_NameLength21()
    {
        $expected_result = 'คองโก';
        $result = FanModel::getNationality('ดอกดอดอกหมวยดอกดอกดอก');
        $this->assertEquals($expected_result,$result);
    }   

    public function testGetplace_datesumcase0(){
        $expected_result = 'สมุย';
        $result = FanModel::getPlace("01/09/1540");
        $this->assertEquals($expected_result, $result);
    }
    public function testGetplace_datesumcase1(){
        $expected_result = 'ดงดอกไม้';
        $result = FanModel::getPlace("02/09/1540");
        $this->assertEquals($expected_result, $result);
    }
    public function testGetplace_datesumcase2(){
        $expected_result = 'พุ้มไม้';
        $result = FanModel::getPlace("03/09/1540");
        $this->assertEquals($expected_result, $result);
    }
    public function testGetplace_datesumcase3(){
        $expected_result = 'ใต้ต้นไม้';
        $result = FanModel::getPlace("04/09/1540");
        $this->assertEquals($expected_result, $result);
    }
    public function testGetplace_datesumcase4(){
        $expected_result = 'บนต้นไม้';
        $result = FanModel::getPlace("05/09/1540");
        $this->assertEquals($expected_result, $result);
    }
    public function testGetplace_datesumcase5(){
        $expected_result = 'มังกร';
        $result = FanModel::getPlace("06/09/1540");
        $this->assertEquals($expected_result, $result);
    }
    public function testGetplace_datesumcase6(){
        $expected_result = 'บลูบัพ';
        $result = FanModel::getPlace("07/09/1540");
        $this->assertEquals($expected_result, $result);
    }
    public function testGetplace_datesumcase7(){
        $expected_result = 'บ้านผม';
        $result = FanModel::getPlace("08/09/1540");
        $this->assertEquals($expected_result, $result);
    }
    public function testGetplace_datesumcase8(){
        $expected_result = 'หน้ามอ';
        $result = FanModel::getPlace("09/09/1540");
        $this->assertEquals($expected_result, $result);
    }
    public function testGetplace_datesumcase9(){
        $expected_result = 'วากานด้า';
        $result = FanModel::getPlace("09/09/1541");
        $this->assertEquals($expected_result, $result);
    }
    // public function testGetplace_datesumcase1(){
    //     $expected_result = 'ในพุ้ม';
    //     $result = FanModel::getPlace("01/09/2540");
    //     $this->assertEquals($expected_result, $result);
    // }
    public function testGetAction_datesumcase0(){
        $expected_result = 'ปิ่งไก่';
        $result = FanModel::getAction("0123400000");
        $this->assertEquals($expected_result, $result);
    }
    public function testGetAction_datesumcase1(){
        $expected_result = 'ย่างกบ';
        $result = FanModel::getAction("0123410000");
        $this->assertEquals($expected_result, $result);
    }
    public function testGetAction_datesumcase2(){
        $expected_result = 'กินเหล้า';
        $result = FanModel::getAction("0123411000");
        $this->assertEquals($expected_result, $result);
    }
    public function testGetAction_datesumcase3(){
        $expected_result = 'ต้มท่อม';
        $result = FanModel::getAction("0123411100");
        $this->assertEquals($expected_result, $result);
    }
    public function testGetAction_datesumcase4(){
        $expected_result = 'ดูดหม้อ';
        $result = FanModel::getAction("0123411110");
        $this->assertEquals($expected_result, $result);
    }
    public function testGetAction_datesumcase5(){
        $expected_result = 'ดมกาว';
        $result = FanModel::getAction("0123411111");
        $this->assertEquals($expected_result, $result);
    }
    public function testGetAction_datesumcase6(){
        $expected_result = 'ทอดเนื้อ';
        $result = FanModel::getAction("0123411112");
        $this->assertEquals($expected_result, $result);
    }
    public function testGetAction_datesumcase7(){
        $expected_result = 'ปลูกผัก';
        $result = FanModel::getAction("0123411122");
        $this->assertEquals($expected_result, $result);
    }
    public function testGetAction_datesumcase8(){
        $expected_result = 'รดน้ำ';
        $result = FanModel::getAction("0123411222");
        $this->assertEquals($expected_result, $result);
    }
    public function testGetAction_datesumcase9(){
        $expected_result = 'ออกกำลังกาย';
        $result = FanModel::getAction("0123412222");
        $this->assertEquals($expected_result, $result);
    }
}