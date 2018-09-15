<?php

class FanModel
{
    public static function predict($name, $dob, $mobileno)
    {
        $expected_result = [
            "nationality" => 'อังกฤษ',
            "place" => 'ยอดดอยอันหนาวเหน็บ',
            'action' => 'ปิ้งไก่' 
        ];
        return $expected_result;
    }

    public static function getNationality($name)
    {
        // TODO
        //1-5: เกาหลี
         //6-10:  ไทย
         //11-15:วากานด้า
         //16-20:จีน
         //21++:คองโก
         $name_length = mb_strlen($name);
         $nationality = '';
         if($name_length <= 5){
            $nationality = 'เกาหลี';
        }
         elseif ($name_length <= 10){
            $nationality = 'ไทย';
        }
         elseif ($name_length <= 15){
            $nationality = 'วากานด้า';
        }
         elseif ($name_length <= 20){
            $nationality = 'จีน';
        }
         elseif($name_length >= 21){
            $nationality = 'คองโก';
        }
        return $nationality;

    }
    public static function getPlace($dob)

    {
        // TODO
        // 11/05/2540 (DD/MM/YYYY)
        // score = (1+1+0+5+2+5+4+0)%10
        // HINT: str_replace, str_split
        $str = str_replace("/", "", $dob);
        $numbers_text = str_split($str);
        $sum = 0 ;
        foreach($numbers_text as $number){
            $sum += intval($number);
        }
        $total = $sum%10;
        if($total == 0){
            $place = "แม่น้ำ";
        }
        // elseif($total == 1){
        
        // }
        
        return $place;
    }

    public static function getAction($mobileno)
    {
        // TODO
    }
}
