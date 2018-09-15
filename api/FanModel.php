<?php

class FanModel
{
    public static function predict($name, $dob, $mobileno)
    {
        return [
            "nationality" => 'Eng',
            "place" => 'abc',
            'action' => 'pingkai',
        ];
    }

    public static function getNationality($name)
    {
        // TODO
        // 1-5: เกาหลี
        // 6-10: ไทย
        // 11-15: วากานด้า
        // 16-20: จีน
        // 21++: คองโก
        $name_length = mb_strlen($name);
        $nationality = '';
        if ($name_length <= 5) {
            $nationality = 'เกาหลี';
        }
        else if ($name_length <= 10){
            $nationality = 'ไทย';
        }
        else if ($name_length <=15){
            $nationality = 'วากานด้า';
        }
        else if ($name_length <=20){
            $nationality = 'จีน';
        }
        else{
            $nationality = 'ชาติหน้า';
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
