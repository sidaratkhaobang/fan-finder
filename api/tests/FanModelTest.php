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
    public function testGetPlace_Num0(){
        $expected_result = 'ถ้ำหลวง';
        $result = FanModel :: getPlace('22/02/2002'); //10
        $this->assertEquals($expected_result,$result);
    }
    public function testGetPlace_Num1(){
        $expected_result = 'ดาวอังคาร';
        $result = FanModel :: getPlace('20/01/1601'); //11
        $this->assertEquals($expected_result,$result);
    }
    public function testGetPlace_Num2(){
        $expected_result = 'ในป่า';
        $result = FanModel :: getPlace('31/01/2005');//12
        $this->assertEquals($expected_result,$result);
    }
    public function testGetPlace_Num3(){
        $expected_result = 'ทำเนียบรัฐบาล';
        $result = FanModel :: getPlace('01/02/1900');//13
        $this->assertEquals($expected_result,$result);
    }
    public function testGetPlace_Num4(){
        $expected_result = 'เรือนจำกลาง';
        $result = FanModel :: getPlace('18/01/2002'); //14
        $this->assertEquals($expected_result,$result);
    }
    public function testGetPlace_Num5(){
        $expected_result = 'เอเวอร์เรส';
        $result = FanModel :: getPlace('18/02/2002');//15
        $this->assertEquals($expected_result,$result);
    }
    public function testGetPlace_Num6(){
        $expected_result = 'ใต้มหาสมุทรแปซิฟิก';
        $result = FanModel :: getPlace('27/03/2002');//16
        $this->assertEquals($expected_result,$result);
    }
    public function testGetPlace_Num7(){
        $expected_result = 'วลัยลักษณ์';
        $result = FanModel :: getPlace('18/04/2002');//17
        $this->assertEquals($expected_result,$result);
    }
    public function testGetPlace_Num8(){
        $expected_result = '3เวย์';
        $result = FanModel :: getPlace('19/04/2002');//18
        $this->assertEquals($expected_result,$result);
    }
    public function testGetPlace_Num9(){
        $expected_result = 'ลานชา';
        $result = FanModel :: getPlace('28/05/2002');//19
        $this->assertEquals($expected_result,$result);
    }
    public function testGetAction0(){
        $expected_result = 'ยิงตัวตาย';
        $result = FanModel :: getAction('088-0000-04');//20
        $this->assertEquals($expected_result,$result);
    }
    public function testGetAction1(){
        $expected_result = 'ทอดไก่ด้วยน้ำมันหมู';
        $result = FanModel :: getAction('089-0000-04');//21
        $this->assertEquals($expected_result,$result);
    }
    public function testGetAction2(){
        $expected_result = 'ทอดหมูด้วยน้ำมันรถ';
        $result = FanModel :: getAction('089-1000-04');//22
        $this->assertEquals($expected_result,$result);
    }
    public function testGetAction3(){
        $expected_result = 'ยำเนื้อ';
        $result = FanModel :: getAction('089-1010-04');//23
        $this->assertEquals($expected_result,$result);
    }
    public function testGetAction4(){
        $expected_result = 'ตรวจโรคเอดส์';
        $result = FanModel :: getAction('089-1020-04');//24
        $this->assertEquals($expected_result,$result);
    }
    public function testGetAction5(){
        $expected_result = 'ฉลามเเดกก';
        $result = FanModel :: getAction('089-1020-14');//25
        $this->assertEquals($expected_result,$result);
    }
    public function testGetAction6(){
        $expected_result = 'กระทืบยามหน้าหอ';
        $result = FanModel :: getAction('099-0102-14');//26
        $this->assertEquals($expected_result,$result);
    }
    public function testGetAction7(){
        $expected_result = 'หนีตำรวจ';
        $result = FanModel :: getAction('099-0103-14');//27
        $this->assertEquals($expected_result,$result);
    }
    public function testGetAction8(){
        $expected_result = 'คุยกับคนบ้า';
        $result = FanModel :: getAction('099-0103-15');//28
        $this->assertEquals($expected_result,$result);
    }
    public function testGetAction9(){
        $expected_result = 'ไถ่ตังคนเเก่เเตะคนท้อง';
        $result = FanModel :: getAction('099-0105-14');//29
        $this->assertEquals($expected_result,$result);
    }
}