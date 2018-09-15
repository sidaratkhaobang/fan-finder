<?php

class FanModel
{
    public static function predict($name, $dob, $mobileno)
    {
        return [
            "nationality" => 'อังกฤษ',
            "place" => 'ยอดดอยอันหนาวเหน็บ',
            'action' => 'ปิ้งไก่',
        ];
    }

    public static function getNationality($name)
    {
        // TODO
        // 1-5 : เกาหลี  6/10 : ไทย  11/15 : วากานด้า  16/20 : จีน  21++  : คองโก
        $name_length = mb_strlen($name);
        if ($name_length <= 5){
            $nationality = 'เกาหลี';
        }elseif ($name_length <= 10) {
            $nationality = 'ไทย';
        }elseif ($name_length <= 15) {
            $nationality = 'วากานด้า';
        }elseif ($name_length <= 20) {
            $nationality = 'จีน';
        }elseif ($name_length <= 25) {
            $nationality = 'คองโก';
        }
        return $nationality;
    }

    public static function getPlace($dob)
    {
        // TODO
        // 11/05/2540 (DD/MM/YY)
        // score = (1+1+0+5+2+5+4+0)%10
        // HINT : str_replace , 
        $DMY = $dob;
        $sum = str_replace('/', '',$DMY);
        $score = str_split($sum);
        foreach ($score as &$value) {
            $value = $value++ ;
        }
        if ($value = 0){
            $char = "สระว่ายน้ำ";
        }elseif ($value = 1) {
            $char = "ห้องเรียน";
        }elseif ($value = 2) {
            $char = "โรงอาหาร";
        }elseif ($value = 3) {
            $char = "สนามกีฬา";
        }elseif ($value = 4) {
            $char = "สนามฟุตบอล";
        }elseif ($value = 5) {
            $char = "หอดูดาว";
        }elseif ($value = 6) {
            $char = "สนามเทนนิส";
        }elseif ($value = 7) {
            $char = "ห้องสมุด";
        }elseif ($value = 8) {
            $char = "โลตัส";
        }elseif ($value = 9) {
            $char = "โรงพยาบาล";
        }
        $return = $char;
    }

    public static function getAction($mobileno)
    {
        // TODO
    }
}
