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
        // TODO
    }

    public static function getAction($mobileno)
    {
        // TODO
    }
}
