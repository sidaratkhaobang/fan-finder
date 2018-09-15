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

    // public static function getNationality($name)
    // {
    //     // TODO
    //     // 1-5: เกาหลี
    //     // 6-10: ไทย
    //     // 11-15: วากานด้า
    //     // 16-20: จีน
    //     // 21++ : ชาติหน้า
        
    //     $name_length = mb_strlen($name);
    //     $nationality = '';
    //     if($name_length <= 5  ){
    //         $nationality = 'เกาหลี';
    //     }else if($name_length <= 10 ){
    //         $nationality = 'ไทย';
    //     }else if($name_length <= 15 ){
    //         $nationality = 'วากานด้า';
    //     }else if($name_length <= 20 ){
    //         $nationality = 'จีน';
    //     }else{
    //         $nationality = 'ชาติหน้า';
    //     }  
    //     return $nationality;
    // }

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
        }
        // }else if($dob == 8 ){
        //     $place = 'โนเแวร์';
        // }else if($dob == 7 ){
        //     $place = 'โอคแลนด์';
        // }else if($dob == 6  ){
        //     $place = 'โซล';
        // }else if($dob == 5 ){
        //     $place = 'บรูคลิน';
        // }else if($dob == 4 ){
        //     $place = 'แอสการ์ด';
        // }else if($dob == 3  ){
        //     $place = 'แซนดร้า';
        // }else if($dob == 2 ){
        //     $place = 'โซโคเวีย';
        // }else if($dob == 1 ){
        //     $place = 'รัฐเวอร์เรีย';
        // }else{
        //     $place = 'วากานด้า';
        // }  
        return $place;
    }
    

    public static function getAction($mobileno)
    {
        // TODO
    }
}
