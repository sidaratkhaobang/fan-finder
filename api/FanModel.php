<?php

class FanModel
{
    public static function predict($name, $dob, $mobileno)
    {
        return [
            "nationality" => 'อังกฤษ',
            "place" => 'ยอดดอยอันหนาวเหน็บ',
            'action' => 'ปิ้งไก่' 
        ];
    }

    public static function getNationality($name)
    {
        // TODO
        // 1-5  : เกาหลี
        // 6-10 : ไทย
        // 11-15: วากานด้า
        // 16-20: จีน
        // 20++ : Marvel
        $name_length = mb_strlen($name);
        $nationaliy = '';
        if($name_length <=5){
            $nationaliy = 'เกาหลี';
        }
        elseif ($name_length <=10){
                 $nationaliy = 'ไทย';
        }
        elseif ($name_length <=15){
                 $nationaliy = 'วากานด้า';
        } 
        elseif ($name_length <=20){
                 $nationaliy = 'จีน';
        }
        else{
                 $nationaliy = 'Marvel';
        }

        return  $nationaliy;
    }

    public static function getPlace($dob)
    {
        // TODO
        // 11/05/2540 (DD//MM/YYYY)
        // sum = (1+1+0+5+2+5+4+0)%10
        $number_without_slash = str_replace('/','',$dob);
        $number_array = str_split($number_without_slash);
        $score = array_sum($number_array)%10;
        $places = [
            'ถ้ำหลวง',
            'ดาวอังคาร',
            'ในป่า',
            'ทำเนียบรัฐบาล',
            'เรือนจำกลาง',
            'เอเวอร์เรส',
            'ใต้มหาสมุทรแปซิฟิก',
            'วลัยลักษณ์',
            '3เวย์',
            'ลานชา',
        ];
        return $places[$score];
        
        

    }

    public static function getAction($mobileno)
    {
        // TODO
        $number_without_slash = str_replace('-','',$mobileno);
        $number_array = str_split($number_without_slash);
        $score = array_sum($number_array)%10;
        $places = [
             'ยิงตัวตาย',
            'ทอดไก่ด้วยน้ำมันหมู',
            'ทอดหมูด้วยน้ำมันรถ',
            'ยำเนื้อ',
            'ตรวจโรคเอดส์',
            'ฉลามเเดกก',
            'กระทืบยามหน้าหอ',
            'หนีตำรวจ',
            'คุยกับคนบ้า',
            'ไถ่ตังคนเเก่เเตะคนท้อง',
        ];
        return $places[$score];

    }
}
