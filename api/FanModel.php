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
        // 11/05/2540 (DD/MM/YYYY)
        // sum = (1+1++5+2+5+4+0)%10
        for($i =0;$i<=strlen($dob);$i++){
            if($dob[$i] == "/"){
                $dob[$i] = 0;
            }
            $sum = $dob[$i];
        }
        return $sum;

    }

    public static function getAction($mobileno)
    {
        // TODO
    }
}
