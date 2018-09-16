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
            $place = 'ทางช้างเผือก';
        }
        else if ($mod == 1) {
            $place = 'ดาวเสาร์';
        }
        else if ($mod == 2) {
            $place = 'ป่าดงดิบ';
        }
        else if ($mod == 3) {
            $place = 'อาคารรวม5';
        }
        else if ($mod == 4) {
            $place = 'อาคารรวม7';
        }
        else if ($mod == 5) {
            $place = 'อาคารรวม1';
        }
        else if ($mod == 6) {
            $place = 'ไทยบุรี';
        }
        else if ($mod == 7) {
            $place = 'ศุนย์คอม';
        }
        else if ($mod == 8) {
            $place = 'family mart';
        }
        else if ($mod == 9) {
            $place = '7-11';
        }

        return $place;
    }

    public static function getAction($mobileno)
    {
        // TODO
        // 0937131682
        // เก็บค่าของตัวสุดท้ายมาเปรียบเทียบ
        $arr1 = str_split($mobileno);
        
        if ($arr1[9] == 0) {
            $action = 'กำลังขี่ช้างเอราวัณ';
        }
        else if ($arr1[9] == 1){
            $action = 'กำลังพลอดรักกับแฟนเก่า';
        }
        else if ($arr1[9] == 2){
            $action = 'กำลังซื้อนมชมพู';
        }
        else if ($arr1[9] == 3){
            $action = 'กำลังยืนฉี่ในห้องน้ำชาย';
        }
        else if ($arr1[9] == 4){
            $action = 'กำลังจะกระโดดสะพาน';
        }
        else if ($arr1[9] == 5){
            $action = 'กำลังบิน';
        }
        else if ($arr1[9] == 6){
            $action = 'กำลังเรียนหนังสือ';
        }
        else if ($arr1[9] == 7){
            $action = 'กำลังกินข้าวกับแฟนเก่า';
        }
        else if ($arr1[9] == 8){
            $action = 'กำลังลากไก่ไปกินในน้ำ';
        }
        else if ($arr1[9] == 9){
            $action = 'กำลังทอดหมูในโรงพยาบาลจิตเวศ';
        }
        return $action;


    }
}
