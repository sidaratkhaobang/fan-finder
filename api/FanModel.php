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
        //1-5: เกาหลี
        //6-10: ไทย
        //11-15: วากานด้า
        //16-20: จีน
        //21++: คองโก
        $name_length = mb_strlen($name);
        $nationality = '';
        if($name_length > 20){
            $nationality = 'คองโก';
        }
        elseif($name_length >15) {
            $nationality ='จีน';
        }
        elseif($name_length >10) {
            $nationality ='วากานด้า';
        }
        elseif($name_length >5) {
            $nationality ='ไทย';
        }
        else{
            $nationality ='เกาหลี';
        }
        return $nationality;
    }

    public static function getPlace($dob)
    {
        // TODO
        // 11/05/2540 (DD/MM/YYYY)
        //score = (1+1+0+5+2+5+4+0) %10
        //Hint: string_replace
        $place=''; //$sum=0;
        $rpDob = str_replace('/' ,'', $dob);
        $spDob = str_split($rpDob);
        $score = array_sum($spDob)%10;
        // for($i=0 ; $i<count($spDob) ; $i++){
        //     $rpDob = (int)($spDob[$i]);
        //     $sum = $sum+$rpDob;
        // }
        // $score= $sum%10;
        switch($score){
            case 0: $place='Korea';break;
            case 1: $place='USA';break;
            case 2: $place='Bankok';break;
            case 3: $place='Market';break;
            case 4: $place='Gana';break;
            case 5: $place='Concert';break;
            case 6: $place='Colombia';break;
            case 7: $place='Japan';break;
            case 8: $place='Germany';break;
            case 9: $place='Saudi-Arabia';break;
        }
        return $place;
    }

    public static function getAction($mobileno)
    {
            // TODO
            $newmobile = str_replace("/","",$mobileno);
            $num = str_split($newmobile);
            $sum = 0;
            foreach($num as $value ){
                $sum = $sum+ intval($value);
            }
            switch ($sum%10){
                case 0: $getAction = 'Fishing'; break;
                case 1: $getAction = 'Ride horse' ; break;
                case 2: $getAction = 'Kill Giraff'; break;
                case 3: $getAction = 'Fight Dargon'; break;
                case 4: $getAction = 'Drive Boat'; break;
                case 5: $getAction = 'Dance BNK song' ; break;
                case 6: $getAction = 'Swimming';  break;
                case 7: $getAction = 'Extrect Files' ;break;
                case 8: $getAction = 'Sleep'; break;
                case 9: $getAction= 'Drive car'; break;  
            }
            return $getAction;
    }
}
