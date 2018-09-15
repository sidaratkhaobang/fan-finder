<?php

class FanModel
{
    public static function predict($name, $dob, $mobileno)
    {
        return [
            // "nationality" => 'อังกฤษ1',
            // "place" => 'ยอดดอยอันหนาวเหน็บ',
            // 'action' => 'ปิ้งไก่',
            "nationality" => 'ไทย',
            "place" => 'อาคารเรียนรวม 3',
            'action' => 'ขึ้นบันไดอาคารเรียนรวม 3'
        ];
    }

    public static function getNationality($name)
    {
        //1-5 : เกาหลี
        //6-10 : ไทย
        //11-15 : วากานด้า
        //16-20 : จีน
        //21++ : ชาติหน้า

        $name_lenght = mb_strlen($name);
        $nationlity = " ";
        if($name_lenght <= 5){
            $nationlity ="เกาหลี";
        }
        else if($name_lenght <= 10){
            $nationlity ="ไทย";
        }
        else if($name_lenght <= 15){
            $nationlity ="วากานด้า";
        }
        else if($name_lenght <= 20){
            $nationlity ="จีน";
        }
        else {
            $nationlity="ชาติหน้า";
        }
        return $nationlity;
        // return "เกาหลี";
    }

    public static function getPlace($dob)
    {
        $sum=0;
        $getdob = str_replace('/','',$dob);
        $numberdob = str_split($getdob);
        $place = " ";
        foreach ($numberdob as $value) {
            $sum += intval($value) ;
        }   
        $sum=$sum%10; 
        switch($sum){
            case 0:  $place = "วัด"; break;
            case 1:  $place = 'ร้านขายของเก่า';break;
            case 2:  $place = 'หน้าบ้านอาจารย์อุ...';break;
            case 3:  $place = 'ร้านขายยา';break;
            case 4:  $place = 'ที่โบสถ์เรื่องเดอะก๊ะ';break;
            case 5:  $place = 'ในหม้อง';break;
            case 6:  $place = 'เล้าหมู';break;
            case 7:  $place = 'ในใจ';break;
            case 8:  $place = 'ในฝัน';break;
            case 9:  $place = 'ในสวนยาง';break;
            // default:
        };
        return $place;
    // return "วัด";
    }
        //11/05/2540(DD/MM/YY)
        // sum = (1+1+0+5+2+5+4+0)%10
        //0:
        //1:
        //2:
        //3:
        //4:
        //5:
        //6:
        //7:
        //8:
        //9:
        
    

    public static function getAction($mobileno)
    {
        // TODO
    }
}
