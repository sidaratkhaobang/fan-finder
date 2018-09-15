<?php

class FanModel
{
    public static function predict($name, $dob, $mobileno)
    {
        return [
            "nationality" => 'ฝรั่งเศษ',
            "place" => 'ทุ่งหญ้าลาเวนเดอร์',
            'action' => 'ปิ้งกบ',
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
        $place = '';
        foreach($nums as $value)
        {
            $sum = $sum + intval($value);
        }
        $score = $sum % 10;
        if($sum == 0)
        {
            $place = 'คูน้ำ';
        }
        elseif($sum == 1)
        {
            $place = 'โรงแรม';
        }
        elseif($sum == 2)
        {
            $place = 'โรงเรียน';
        }
        elseif($sum == 3)
        {
            $place = 'ป่า';
        }
        elseif($sum == 4)
        {
            $place = 'สวนสัตว์';
        }
        elseif($sum == 5)
        {
            $place = 'สวนสาธารณะ';
        }
        elseif($sum == 6)
        {
            $place = 'สวนสนุก';
        }
        elseif($sum == 7)
        {
            $place = 'น้ำตก';
        }
        elseif($sum == 8)
        {
            $place = 'ทะเล';
        }
        elseif($sum == 9)
        {
            $place = 'สวรรค์ชั้น7';
        }
        return $place;
    }


    public static function getAction($mobileno)
    {
        // TODO
    }
}
