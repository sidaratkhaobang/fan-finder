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
        // 1-5: เกาหลี
        // 6-10: ไทย
        // 11-15: วากานด้า
        // 16-20: จีน
        // 21++: ชาตหน้า
        $name_length = mb_strlen($name);
        $nationaliy = '';
        if ($name_length <= 5) {
            $nationaliy = 'เกาหลี';
        }
        else if($name_length<=10){
            $nationaliy = 'ไทย';
        }
        else if($name_length<=15){
            $nationaliy = 'วากานด้า';
        }
        else if($name_length<=20){
            $nationaliy = 'จีน';
        }
        else{
            $nationaliy = 'ชาตหน้า';
        }
        return $nationaliy;
    }

    public static function getPlace($dob)
    {
        // TODO
        // 11/05/2540 (DD/MM/YYYY)
        // score = (1+1+0+5+2+5+4+0)%10
        // $newdob[] = str_replace($dob);
        // $sum = 0;
        // for($i=0;$i<=8;$i++){
        //     $sum=$sum+$newdob[$i];
        // }
        // $nationaliy=$sum%10
        // return  $nationaliy;
        // return $nationaliy;
    }

    public static function getAction($mobileno)
    {
        // TODO
    }
}
