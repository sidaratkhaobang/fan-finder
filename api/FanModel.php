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
        $name_length = mb_strlen($name);
        $Nationality='';
        switch($name_length){
            case ($name_length>=21):return'ชาติหน้า'; 
            case ($name_length>=16):return'จีน'; 
            case ($name_length>=11):return'วากานด้า'; 
            case ($name_length>=6):return'ไทย'; 
            default:return'เกาหลี'; 
        }
        return $Nationality;
    }

    public static function getPlace($dob)
    {
        // TODO
    }

    public static function getAction($mobileno)
    {
        // TODO
    }
}
