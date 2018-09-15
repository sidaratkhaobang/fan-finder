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
        // 1-5:เกาหลี
        // 6-10: ไทย
        // 11-15: วากานด้า
        // 16-20:จีน
        // 21++:คองโก 
        $name_length = mb_strlen($name);
        $nationality = '';
        if ($name_length <= 5){
            $nationality = 'เกาหลี';
        }
        elseif($name_length<=10){
            $nationality = 'ไทย';
        }
        elseif($name_length<=15){
            $nationality = 'วากานด้า';
        }
        
        elseif($name_length<=20){
            $nationality = 'จีน';
        }
        else {
            $nationality = 'คองโก';
        }
        return $nationality;
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
