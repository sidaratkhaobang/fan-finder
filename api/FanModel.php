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
        // 11/05/2540 (DD/MM/YYYY)
        $place = '';
        $date = str_replace("/","0",$dob);
        // $date = intval($date);
        $sum=0;
        for($i=0; $i<strlen($date);$i++){
            $sum += intval($date[$i]);
        }
        $mod = $sum % 10;
        //$place = ['aaa','bbb','ccc','อาคารรวม5','อาคารรวม7','อาคารรวม1','ไทยบุรี','ศุนย์คอม','7-11','family mart']
        if ($mod == 0) {
            $place = 'aaa';
        }
        else if ($mod == 1) {
            $place = 'bbb';
        }
        else if ($mod == 2) {
            $place = 'ccc';
        }
        else if ($mod == 3) {
            $place = 'อาคารรวม5';
        }

        return $place;
    }

    public static function getAction($mobileno)
    {
        // TODO
    }
}
