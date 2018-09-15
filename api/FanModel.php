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
        if($name_length>=21){
            $Nationality='ชาติหน้า';
        }else if($name_length>=16){
            $Nationality='จีน';
        }else if($name_length>=11){
            $Nationality='วากานด้า';
        }else if($name_length>=6){
            $Nationality='ไทย';
        }else{
            $Nationality='เกาหลี';
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
