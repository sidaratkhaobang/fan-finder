<?php

class FanModel
{
    public static function predict($name, $dob, $mobileno)
    {
        return [
            "nationality" => 'อังกฤษ',
            "place" => 'ยอดดอยอันหนาวเหน็บ',
            'action' => 'ปิ้งไก่' 
        ];
    }

    public static function getNationality($name)
    {
        // TODO
        // 1-5  : เกาหลี
        // 6-10 : ไทย
        // 11-15: วากานด้า
        // 16-20: จีน
        // 20++ : Marvel
        $name_length = mb_strlen($name);
        $nationaliy = '';
        if($name_length <=5){
            $nationaliy = 'เกาหลี';
        }
        elseif ($name_length <=10){
                 $nationaliy = 'ไทย';
        }
        elseif ($name_length <=15){
                 $nationaliy = 'วากานด้า';
        } 
        elseif ($name_length <=20){
                 $nationaliy = 'จีน';
        }
        else{
                 $nationaliy = 'Marvel';
        }

        return  $nationaliy;
    }

    public static function getPlace($dob)
    {
        // TODO
        // 11/05/2540 (DD//MM/YYYY)
        // sum = (1+1+0+5+2+5+4+0)%10
        // HINT : str_replace,str_split
        // 1
        // 2
        // 3
        // 4
        // 5
        

    }

    public static function getAction($mobileno)
    {
        // TODO
    }
}
