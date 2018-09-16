<?php

class FanModel
{
    public static function predict($name, $dob, $mobileno)
    {
        return [
            "nationality" => FanModel:: getNationality($name),
            "place" => FanModel:: getPlace($dob),
            'action' =>  FanModel:: getAction($mobileno)
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
            $nationaliy = 'เผ่าคนเถื่อน';
        }
        elseif ($name_length <=10){
                 $nationaliy = 'ไทยพุทธ';
        }
        elseif ($name_length <=15){
                 $nationaliy = 'วากานด้า';
        } 
        elseif ($name_length <=20){
                 $nationaliy = 'มุสลิม';
        }
        else{
                 $nationaliy = 'แอสการ์ด';
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
            'ตู้กระจก',
            'ในป่า',
            'ทำเนียบรัฐบาล',
            'เรือนจำกลาง',
            'เอเวอร์เรส',
            'ร้านกระหรี่เบอร์ตอง',
            'ใต้มหาสมุทรแปซิฟิก',
            'โพไซดอน',
            'อาซีเอ',
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
            'เพื่อนกระทืบ',
            'ทอดไก่ด้วยน้ำมันหมู',
            'ทอดหมูด้วยน้ำมันรถ',
            'ดูดกัญชาเผาฟอย',
            'out door',
            'โดนฉลามเเดกก',
            'กระทืบคนพิการ',
            'ตีกระหรี่กลางโรงพัก',
            'คุยกับคนบ้าด่าคนป่วย',
            'ไถ่ตังคนเเก่เเตะคนท้อง',
        ];
        return $places[$score];

    }
}
