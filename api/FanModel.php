<?php

class FanModel
{
    public static function predict($name, $dob, $mobileno)
    {
        // $nations = FanModel::getNationality($name);
        // $place = FanModel::getPlace($dob);
        // $action = FanModel::getAction($mobileno);

        return [
            'nationality' => FanModel::getNationality($name),
            'place' => FanModel::getPlace($dob),
            'action' => FanModel::getAction($mobileno)
        ];
    }

    public static function getNationality($name)
    {
        // TODO
        // 1-5: เกาหลี
        // 6-10: ไทย
        // 11-15: วากานด้า
        // 16-20: จีน
        // 21++ : ชาติหน้า
        
        $name_length = mb_strlen($name);
        $nationality = '';
        if($name_length <= 5  ){
            $nationality = 'เกาหลี';
        }else if($name_length <= 10 ){
            $nationality = 'ไทย';
        }else if($name_length <= 15 ){
            $nationality = 'วากานด้า';
        }else if($name_length <= 20 ){
            $nationality = 'จีน';
        }else{
            $nationality = 'ชาติหน้า';
        }  
        return $nationality;
    }

    public static function getPlace($dob)
    {
        // TODO
        // 11/05/2540  (DD/MM/YYYY) 
        // score = (1+1+0+5+2+5+4+0)%10
        // HINT: str_replace, str_split
        $place = '';
        $sum=0;
        $rpDopb = str_replace('/','',$dob);
        $spDob = str_split($rpDopb);
        $score = array_sum($spDob)%10;
        if($score == 9  ){
            $place = 'บางประกง';
        }else if($score == 8 ){
            $place = 'โนเแวร์';
        }else if($score == 7 ){
            $place = 'โอคแลนด์';
        }else if($score == 6  ){
            $place = 'โซล';
        }else if($score == 5 ){
            $place = 'เรือนจำบางขวาง';
        }else if($score == 4 ){
            $place = 'แอสการ์ด';
        }else if($score == 3  ){
            $place = 'แซนดร้า';
        }else if($score == 2 ){
            $place = 'โซโคเวีย';
        }else if($score == 1 ){
            $place = 'รัฐเวอร์เรีย';
        }else{
            $place = 'วากานด้า';
        }  
        return $place;
    }
    

    public static function getAction($mobileno)
    {
        // TODO
        // 0123456789
        // score = (0+1+2+3+4+5+6+7+8+9)%10
        // HINT: str_split

        $actions = '';
        $spMobileno = str_split($mobileno);
        $point = array_sum($spMobileno)%10;

        if($point == 9  ){
            $actions = 'กินข้าว';
        }else if($point == 8 ){
            $actions = 'ดูคอนเสิร์ด';
        }else if($point == 7 ){
            $actions = 'ดูหนัง';
        }else if($point == 6  ){
            $actions = 'เล่นเกม';
        }else if($point == 5 ){
            $actions = 'ชักว่าว';
        }else if($point == 4 ){
            $actions = 'ขี้';
        }else if($point == 3  ){
            $actions = 'จาม';
        }else if($point == 2 ){
            $actions = 'มองนม';
        }else if($point == 1 ){
            $actions = 'นึ่งซาลาเปา';
        }else{
            $actions = 'จูนรถ';
        }  
        return $actions;
    }
}