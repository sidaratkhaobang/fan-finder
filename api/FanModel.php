<?php

class FanModel
{
    public static function predict($name, $dob, $mobileno)
    {
        return [
            "nationality" => 'German',
            "place" => 'โพชิงกิ',
            'action' => 'โดนยิง',
        ];
    }

    public static function getNationality($name)
    {
        // TODO
        // 1-5 : เกาหลี
        // 5-10 : ไทย
        // 11-15 : วากันด้า
        // 16-20 : จีน
        // 21-25 : ชาติหน้า
        $name_length = mb_strlen($name);
        $nationality = '';
        if($name_length <= 5){
            $nationality = 'เกาหลี';
        }
        else if($name_length <= 10){
            $nationality = 'ไทย';
        }
        else if($name_length <= 15){
            $nationality = 'วากันด้า';
        }
        else if($name_length <= 20){
            $nationality = 'จีน';
        }
        else {
            $nationality = 'ชาติหน้า';
        }
        return $nationality;
    }

    public static function getPlace($dob)
    {
        // TODO
        // 01/05/2540 (DD/MM/YYYY)
        // score = (1+1+0+5+2+5+4+0)%10
        // HINT: str_replace, str_split, array_sum
        $number_without_slash = str_replace('/', '', $dob);
        $number_array = str_split($number_without_slash);
        $score = array_sum($number_array)%10;
        $places = [
            'โมโกจู',
            'เกาะเสม็ด',
            'เกาะไหง',
            'หมู่บ้านคีรีวง',
            'ตลาดร่มหุบ',
            'สวนผึ้ง',
            'ทองผาภูมิ',
            'ภูป่าเปาะ',
            'สวนน้ำ',
            'ถ้ำปลา',
        ];
        return $places[$score];
    }

    public static function getAction($mobileno)
    {
        // TODO
    }
}
