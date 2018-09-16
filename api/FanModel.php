<?php

class FanModel
{
    public static function predict($name, $dob, $mobileno)
    {
        $expected_result = [
            "nationality" => FanModel::getNationality($name),
            "place" => FanModel::getPlace($dob),
            'action' => FanModel::getAction($mobileno) 
        ];
        return $expected_result;
    }

    public static function getNationality($name)
    {
        // TODO
        //1-5: เกาหลี
         //6-10:  ไทย
         //11-15:วากานด้า
         //16-20:จีน
         //21++:คองโก
         $name_length = mb_strlen($name);
         $nationality = '';
         if($name_length <= 5){
            $nationality = 'เกาหลี';
        }
         elseif ($name_length <= 10){
            $nationality = 'ไทย';
        }
         elseif ($name_length <= 15){
            $nationality = 'วากานด้า';
        }
         elseif ($name_length <= 20){
            $nationality = 'จีน';
        }
         elseif($name_length >= 21){
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
        $place = ["ป่า","ตลาด","บ้าน","หอ","ห้องสมุด","ห้าง","วัด","โพรง","แม่น้ำ","ห้วย"];
        $str = str_replace("/", "", $dob);
        $numbers_text = str_split($str);
        $total = array_sum($numbers_text)%10;
        return $place[$total];
    }

    public static function getAction($mobileno)
    {
        // TODO
        $numbers_text = str_split($mobileno);
        $sums = array_sum($numbers_text);
        $sum = $sums % 10;
        if($sum == 0)
        {
            $action = "ปิ้งไก่"; 
        }
        elseif($sum == 1)
        {
            $action = "ทอดหมู"; 
        }
        elseif($sum == 2)
        {
            $action = "ต้มมาม่า"; 
        }
        elseif($sum == 3)
        {
            $action = "นึ่งปลา"; 
        }
        elseif($sum == 4)
        {
            $action = "ทอดไข่"; 
        }
        elseif($sum == 5)
        {
            $action = "ต้มหมู"; 
        }
        elseif($sum == 6)
        {
            $action = "ต้มยำ"; 
        }
        elseif($sum == 7)
        {
            $action = "ทอดไก่"; 
        }
        elseif($sum == 8)
        {
            $action = "เจียวไข่"; 
        }
        else{
            $action = "ตุ๋นหมู";
        }
        return $action;

    }


}
