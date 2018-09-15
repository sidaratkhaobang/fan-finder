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

    public static function getNationality($name)
    {
        // TODO
        // 1-5: เกาหลี
        // 6-10: ไทย
        //11-15: วากานด้า
        //16-20: จีน
        //21++: ชาติหน้า
        $name_length = mb_strlen($name);
        $nationality ='';
        if ($name_length<=5){
            $nationality ='เกาหลี'; 
        }
        else if ($name_length<=10){
            $nationality ='ไทย'; 
        }
        else if ($name_length<=15){
            $nationality ='วากานด้า'; 
        }
        else if ($name_length<=21){
            $nationality ='จีน'; 
        }
        else{
            $nationality ='ชาติหน้า'; 
        }
        return $nationality; 

    }

    public static function getPlace($dob)
    {
        // TODO
        // 11/05/2540 (DD/MM/YYYY)
        // score = (1+1+0+5+2+5+4+0)%10
        // 0:
        // 1:
        // 2:
        // 3:
        // 4:
        // 5:
        // 6:
        // 7:
        // 8:
        // 9:
        //HINT: str_replace, str_split
        $sum=0;
        $day_birthday = str_replace('/','',$dob);
        $num_birthday = str_split($day_birthday);
        $place = '';
        foreach($num_birthday as $value){
       
            $sum += intval($value);
        }
        switch ($sum%10){
            case 0: $place = 'Paris'; break;
            case 1: $place = 'Soul' ; break;
            case 2: $place = 'bangkok'; break;
            case 3: $place = 'London'; break;
            case 4: $place = 'japan'; break;
            case 5: $place = 'USA' ; break;
            case 6: $place = 'Sweden';  break;
            case 7: $place = 'Arizona' ;break;
            case 8: $place = 'Spain'; break;
            case 9: $place = 'peru'; break;

            
        }
        return $place;

            // if ($day_birthday=0){
            //     $place ='Paris'; 
            // }
            // else if ($day_birthday=1){
            //     $place ='Soul'; 
            // }
            // else if ($day_birthday=2){
            //     $place ='bangkok'; 
            // }
            // else if ($day_birthday=3){
            //     $place ='London'; 
            // }
            // else if ($day_birthday=4){
            //     $place ='japan'; 
            // }
            // else if ($day_birthday=5){
            //     $place ='USA'; 
            // }
            // else if ($day_birthday=6){
            //     $place ='Sweden'; 
            // }
            // else if ($day_birthday=7){
            //     $place ='Arizona'; 
            // }
            // else if ($day_birthday=8){
            //     $place ='Spain'; 
            // }
            // else {
            //     $place ='peru'; 
            // }
        }

    
    public static function getAction($mobileno)
    {
        // TODO
    }
}
