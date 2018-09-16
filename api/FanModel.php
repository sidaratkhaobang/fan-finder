<?php

class FanModel
{
    public static function predict($name, $dob, $mobileno)
    {
        $nationality = getNationality($name);
        $place = getPlace($dob);
        $action = getAction($mobileno);
        $data = array(
            'nationality' => $nationality,
            'place' => $place,
            'action' => $action
        );
        return $data;
    }

    public static function getNationality($name)
    {
        $name_length = mb_strlen($name);
        $Nationality='';
        switch($name_length){
            case ($name_length>=21):$Nationality='ชาติหน้า';break;
            case ($name_length>=16):$Nationality='จีน';break;
            case ($name_length>=11):$Nationality='วากานด้า';break;
            case ($name_length>=6):$Nationality='ไทย';break;
            default:$Nationality='เกาหลี'; 
        }
        return $Nationality;
    }

    public static function getPlace($dob)
    {
        $place='';
        //$sum=0;
        $rpDob = str_replace('/' ,'', $dob);
        $spDob = str_split($rpDob);
        
        $score = array_sum($spDob)%10;
        // for($i=0 ; $i<count($spDob) ; $i++){
        //     $rpDob = (int)($spDob[$i]);
        //     $sum = $sum+$rpDob;
        // }
        // $score= $sum%10;
        switch($score){
            case 0: $place='โซล';break;
            case 1: $place='นครศรีธรรมราช';break;
            case 2: $place='กรุงเทพ';break;
            case 3: $place='ตลาด';break;
            case 4: $place='แม่น้ำอเมซอน';break;
            case 5: $place='คอนเสิร์ตซอนโฮ';break;
            case 6: $place='สยามพารากอน';break;
            case 7: $place='ดอยผาหมี';break;
            case 8: $place='น้ำตกไซเบอ';break;
            case 9: $place='เขาสะแกกรัง';break;
        }
        return $place;
    }

    public static function getAction($mobileno)
    {
        $spMBN = str_split($mobileno);
        $score = array_sum($spMBN)%10;
        $action = [
            'ทอดไก่',
            'เดินแบบ',
            'อาบน้ำ',
            'โบกแท่งไฟ',
            'แกะก้างปลา',
            'ตั้งใจเรียนวิชาเทสติ้ง',
            'ปล้นธนาคาร',
            'เล่นปังย่า',
            'เล่นโยวกัง',
            'นอนหิว',
        ];
        return $action[$score];
    }
}
