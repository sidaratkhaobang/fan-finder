<?php

class FanModel
{
    public static function predict($name, $dob, $mobileno)
    {

        return [
            "nationality" => FanModel::getNationality($name),
            "place" => FanModel::getPlace($dob),
            'action' => FanModel::getAction($mobileno),
        ];
    }

    public static function getNationality($name)
    {
        // TODO
        //1-5: เกาหลี
        //6-10: ไทย
        //11-15: วากานด้า
        //16-20: จีน
        //21++: คองโก
        $name_length = mb_strlen($name);
        $nationality = '';
        if ($name_length <=5){
        $nationality = 'เกาหลี';
        }
        elseif($name_length <=10){
            $nationality = 'ไทย';
        }
        elseif($name_length <=15){
            $nationality = 'วากานด้า';
        }
        elseif($name_length <=20){
            $nationality = 'จีน';
        }
        else
        $nationality = 'คองโก';
        return $nationality;
    }


    public static function getPlace($dob)
    {
        // TODO
        // 11/05/2540 (DD/MM/YYYY)
        // score = (1+1+0+5+2+5+4+0)%10
        // HINT: str_replace, str_split
        $date = str_replace("/","",$dob);
        $nums = str_split($date);
        $sum = 0;
        $place = [
            'คูน้ำ',
            'โรงแรม',
            'โรงเรียน',
            'ป่า',
            'สวนสัตว์',
            'สวนสาธารณะ',
            'สวนสนุก',
            'น้ำตก',
            'ทะเล',
            'สวรรค์ชั้น7'
        ];
        foreach($nums as $value)
        {
            $sum = $sum + intval($value);
        }
        $score = $sum % 10;
        return $place[$score];
    }


    public static function getAction($mobileno)
    {
        // TODO
        //081-124-1754 (xxx-xxx-xxxx)
        //sum = 0+8+1+1+2+4+1+7+5+4
        //<= 10 :ปิ้งกบ
        //11-20 :จับไก่
        //21-30 :นอนหลับ
        //31-40 :ล่าเสือ
        //41-50 :เล่น PubG
        //51-60:นอนแมว
        //61-70:ย่างไก่
        //71-80:กินข้าว
        //>80 :ปีนต้นไม้

        $num_Mobile = str_replace("-","",$mobileno);
        $nums = str_split($num_Mobile);
        $sum = array_sum($nums);
        $action = '';
        switch($sum)
        {
            case $sum <= 10 : 
                $action = 'ปิ้งกบ';
                break;
            case $sum <= 20 :
                $action = 'จับไก่';
                break;
            case $sum <= 30 :
                $action = 'นอนหลับ';
                break;       
            case $sum <= 40 :
            $action = 'ล่าเสือ';
                break;  
            case $sum <= 50 :
                $action = 'เล่น PubG';
                break;         
            case $sum <= 60 :
            $action = 'นอนแมว';
                break;  
            case $sum <= 70 :
                $action = 'ย่างไก่';
                break;
            case $sum <= 80 :
                $action = 'กินข้าว';
                break;    
            default:
            $action = 'ปีนต้นไม้';
        }
        return $action;
    }
}
