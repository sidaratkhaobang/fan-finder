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
        // 1-5:เกาหลี
        // 6-10: ไทย
        // 11-15: วากานด้า
        // 16-20:จีน
        // 21++:คองโก 
        $name_length = mb_strlen($name);
        $nationality = '';
        if ($name_length <= 5){
            $nationality = 'เกาหลีเหนือ';
        }
        elseif($name_length<=10){
            $nationality = 'ไทย';
        }
        elseif($name_length<=15){
            $nationality = 'วากานด้า';
        }
        
        elseif($name_length<=20){
            $nationality = 'จีน';
        }
        else {
            $nationality = 'คองโก';
        }
        return $nationality;
    }

    public static function getPlace($dob)
    {
        // TODO
        // 11/05/2540 (DD/MM/YYYY)
        // score = (1+1+0+5+2+5+4+0)%10
        // HINT: str_replace, str_split
        $str = str_replace("/", "", $dob);
        $numbers_text = str_split($str);
        $sum = 0 ;
        $place = array("สมุย","ดงดอกไม้","พุ้มไม้","ใต้ต้นไม้","บนต้นไม้","มังกร","บลูบัพ","บ้านผม","หน้ามอ","วากานด้า");
        foreach($numbers_text as $number){
            $sum += intval($number);
        }
        $total = $sum%10;
        // if($total == 0){
        //     $place = "สมุย";
        // }
        // elseif($total == 1){
        //     $place = "ดงดอกไม้";
        // }
        
        // return $place;
        return $place[$total];
    }

    public static function getAction($mobileno)
    {
        // TODO
        $numbers_text = str_split($mobileno);
        $score = array_sum($numbers_text)%10;
        $action = array("ปิ่งไก่","ย่างกบ","กินเหล้า","ต้มท่อม","ดูดหม้อ","ดมกาว","ทอดเนื้อ","ปลูกผัก","รดน้ำ","ออกกำลังกาย");
        return $action[$score];
    }
    
}
