<?php

use PHPUnit\Framework\TestCase;

final class FanModelTest extends TestCase
{
    public function testPredict(): void
    {

        // $name ="Nat";
        // $dob =" 2 april 1997";
        // $mobileno = "0867454630";
        // $expected_result = [
        //     "nationality" => 'อังกฤษ1',
        //     "place" => 'ยอดดอยอันหนาวเหน็บ',
        //     'action' => 'ปิ้งไก่' 
        // ];
        $expected_result = [
            "nationality" => 'ไทย',
            "place" => 'อาคารเรียนรวม 3',
            'action' => 'ขึ้นบันไดอาคารเรียนรวม 3' 
        ];
        $result = FanModel::predict($name, $dob, $mobileno);
        $this->assertEquals($expected_result, $result);
    }
    public function testGetNationality_NameLengthlt5()
    {
        $expected_result ='เกาหลี';
        $result = FanModel::getNationality('บี');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetNationality_NameLength6to10()
    {
        $expected_result ='ไทย';
        $result = FanModel::getNationality('หมวยดก');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetNationality_NameLength11to15()
    {
        $expected_result ='วากานด้า';
        $result = FanModel::getNationality('ฟิวฟี่ขี้ลัก');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetNationality_NameLength16to20()
    {
        $expected_result ='จีน';
        $result = FanModel::getNationality('ณัฐวุฒิชอบขุดดิน');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetNationality_NameLenghtmore20()
    {
        $expected_result ='ชาติหน้า';
        $result = FanModel::getNationality('ทีเด็ดเฟี้ยวฟ้าวเยี่ยวราดพื้นลื่นหัวทิ่มดิน');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetdob_0(){
        $expected_result = 'วัด';
        $result = FanModel::getPlace('01/08/2540');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetdob_1(){
        $expected_result = 'ร้านขายของเก่า';
        $result = FanModel :: getPlace('01/08/2541');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetdob_2(){
        $expected_result = 'หน้าบ้านอาจารย์อุ...';
        $result = FanModel :: getPlace('01/08/2542');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetdob_3(){
        $expected_result = 'ร้านขายยา';
        $result = FanModel :: getPlace('01/08/2543');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetdob_4(){
        $expected_result = 'ที่โบสถ์เรื่องเดอะก๊ะ';
        $result = FanModel :: getPlace('01/08/2544');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetdob_5(){
        $expected_result = 'ในหม้อง';
        $result = FanModel :: getPlace('01/08/2545');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetdob_6(){
        $expected_result = 'เล้าหมู';
        $result = FanModel :: getPlace('01/08/2546');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetdob_7(){
        $expected_result = 'ในใจ';
        $result = FanModel :: getPlace('01/08/2547');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetdob_8(){
        $expected_result = 'ในฝัน';
        $result = FanModel :: getPlace('01/08/2548');
        $this->assertEquals($expected_result, $result);
    }
    public function testGetdob_9(){
        $expected_result = 'ในสวนยาง';
        $result = FanModel :: getPlace('01/08/2549');
        $this->assertEquals($expected_result, $result);
    }
}