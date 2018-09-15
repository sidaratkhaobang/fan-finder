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
        //1-5: เกาหลี
        //6-10: ไทย
        //11-15: วากานด้า
        //16-20: จีน
        //21++: คองโก
        $name_length = mb_strlen($name);
        $nationality = '';
        if($name_length > 20){
            $nationality = 'คองโก';
        }
        elseif($name_length >15) {
            $nationality ='จีน';
        }
        elseif($name_length >10) {
            $nationality ='วากานด้า';
        }
        elseif($name_length >5) {
            $nationality ='ไทย';
        }
        else{
            $nationality ='เกาหลี';
        }
        return $nationality;
    }

    public static function getPlace($dob)
    {
        // // 11/05/2540 (DD/MM/YYYY)
        // score = (1+1+0+5+2+5+4+0)%10
        $number_without_slash = ste_split('/',' ',$dob);
        $number_array = 
        $replace =  str_split($dob);

        $day = area[0];
        $mune = area[1];
        $year = aeea[2];
        $score = (1+1+0+5+2+5+4+0)%10; 
        }

    public static function getAction($mobileno)
    {
        // TODO
    }
}
