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
        //1-5: Korea
        //5-10: Thai
        // 11-15: Vaganda
        // 16-20: Chainese
        // 21++: Conggo
        $name_lenght = mb_strlen($name);
        $nationality = '';
        if($name_lenght <= 5){
            $nationality = 'Korea';
        }else if($name_lenght <= 10){
            $nationality = 'Thai';
        }else if($name_lenght <= 15){
            $nationality = 'Vaganda';
        }else if($name_lenght <= 20){
            $nationality = 'Chainese';
        }else if($name_lenght >= 21){
            $nationality = 'Conggo';
        }

        return $nationality;
    }

    public static function getPlace($dob)
    {
        // TODO
        // 11/05/2540 (DD/MM/YYYY)
        //score = (1+1+0+5+2+5+4+0) %10
        //Hint: string_replace
    }

    public static function getAction($mobileno)
    {
        // TODO
    }
}
