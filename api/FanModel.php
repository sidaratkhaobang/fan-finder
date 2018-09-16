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
        // 1-5 : เกาหลี  6/10 : ไทย  11/15 : วากานด้า  16/20 : จีน  21++  : คองโก
        $name_length = mb_strlen($name);
        if ($name_length <= 5){
            $nationality = 'เกาหลี';
        }elseif ($name_length <= 10) {
            $nationality = 'ไทย';
        }elseif ($name_length <= 15) {
            $nationality = 'วากานด้า';
        }elseif ($name_length <= 20) {
            $nationality = 'จีน';
        }elseif ($name_length <= 25) {
            $nationality = 'คองโก';
        }
        return $nationality;
    }

    public static function getPlace($dob)
    {
        // TODO
        // 11/05/2540 (DD/MM/YY)
        // score = (1+1+0+5+2+5+4+0)%10
        // HINT : str_replace , 
        // $DMY = $dob;
        $sum = str_replace('/', '',$dob);
        $score = str_split($sum);
        $sumnumber = (array_sum($score))%10;
        
        if ($sumnumber == 0){
            $char = "สระว่ายน้ำ";
        }elseif ($sumnumber == 1) {
            $char = "ห้องเรียน";
        }elseif ($sumnumber == 2) {
            $char = "โรงอาหาร";
        }elseif ($sumnumber == 3) {
            $char = "สนามกีฬา";
        }elseif ($sumnumber == 4) {
            $char = "สนามฟุตบอล";
        }elseif ($sumnumber == 5) {
            $char = "หอดูดาว";
        }elseif ($sumnumber == 6) {
            $char = "สนามเทนนิส";
        }elseif ($sumnumber == 7) {
            $char = "ห้องสมุด";
        }elseif ($sumnumber == 8) {
            $char = "โลตัส";
        }elseif ($sumnumber == 9) {
            $char = "โรงพยาบาล";
        }
        return $char;
    }

    public static function getAction($mobileno)
    {
        // TODO
        $action = str_split($mobileno);
        $sumnum = array_sum($action);
        $sumphone = ($sumnum %10) + 1 ;

        if ($sumphone == 1){
            $act = "กำนั่งรถกลับหอ";
        }elseif ($sumphone == 2) {
            $act = "ทำการบ้าน";
        }elseif ($sumphone == 3) {
            $act = "กินข้าว";
        }elseif ($sumphone == 4) {
            $act = "เดินไปเรียน";
        }elseif ($sumphone == 5) {
            $act = "กำลังฟังเพลง";
        }elseif ($sumphone == 6) {
            $act = "กำลังคุยกับเพื่อน";
        }elseif ($sumphone == 7) {
            $act = "เล่นโทรศัพท์";
        }elseif ($sumphone == 8) {
            $act = "เดินเที่ยวในห้าง";
        }elseif ($sumphone == 9) {
            $act = "เดินจ่ายตลาด";
        }elseif ($sumphone == 10) {
            $act = "เล่นกับน้องเเมว";
        }
        return $act;
    }
}
