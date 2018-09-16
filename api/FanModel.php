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
        $newdob = str_replace("/","",$dob);
        $num = str_split($newdob);
        $sum = 0;
        foreach($num as $value ){
            $sum = $sum+ intval($value);
        }
        $score = $sum % 10;
        if($score == 0) {
            $getPlace = 'สวนมะม่วง';
        }
        else if($score == 1){
            $getPlace = 'สังขละบุรี';
        }
        else if($score == 2){
            $getPlace = 'เกาะกูด';
        }
        else if($score == 3){
            $getPlace = 'โมโกจู';
        }
        else if($score == 4){
            $getPlace = 'วัดเจติยาคีรีวิหาร';
        }
        else if($score == 5){
            $getPlace = 'เขื่อนรัชชประภา';
        }
        else if($score == 6){
            $getPlace = 'ดอยหลวงเชียงดาว';
        }
        else if($score == 7){
            $getPlace = 'เขาช้างเผือก';
        }
        else if($score == 8){
            $getPlace = 'เขาช้างเผือก2';
        }
        else{
            $getPlace = 'เกาะตาชัย';
        }
        return $getPlace;
    }

    public static function getAction($mobileno)
    {
        // TODO
        //ตกปลา
        // ขี่ม้า
        // ล่ายีราฟ
        // กำราบมังกร
        // ขี่เรือ
        // เต้นbnk
        // ว่ายน้ำ
        // แตกไฟล์
        $newmobile = str_replace("-","",$mobileno);
        $num = str_split($newmobile);
        $sum = 0;
        foreach($num as $value ){
            $sum = $sum+ intval($value);
        }
        switch ($sum % 10){
            case 0: $getAction = 'ตกปลา'; break;
            case 1: $getAction = 'ขี่ม้า' ; break;
            case 2: $getAction = 'ล่ายีราฟ'; break;
            case 3: $getAction = 'กำราบมังกร'; break;
            case 4: $getAction = 'ขี่เรือ'; break;
            case 5: $getAction = 'เต้นbnk' ; break;
            case 6: $getAction = 'ว่ายน้ำ';  break;
            case 7: $getAction = 'แตกไฟล์' ;break;
            case 8: $getAction = 'หกล้ม' ;break;
          
            
        }
        return $getAction;

    }
    
}
