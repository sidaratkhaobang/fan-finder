<?php

class FanModel
{
    public static function predict($name, $dob, $mobileno)
    {
        return [
            "nationality" => FanModel::getNationality($name),
            "place" => FanModel::getPlace($dob),
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
        // 21++: ชาติหน้า
        $name_length = mb_strlen($name);
        $nationality = '';
        if ($name_length <= 5) {
            $nationality = 'เกาหลี';
        } elseif ($name_length <= 10) {
            $nationality = 'ไทย';
        } elseif ($name_length <= 15) {
            $nationality = 'วากานด้า';
        } elseif ($name_length <= 20) {
            $nationality = 'จีน';
        } else {
            $nationality = 'ชาติหน้า';
        }
        return $nationality;
    }

    public static function getPlace($dob)
    {
        // TODO
        // 01/05/2540 (DD/MM/YYYY)
        // score = (1+1+0+5+2+5+4+0)%10
        // HINT: str_replace, str_split, array_sum
        $number_without_slash = str_replace('/', '', $dob);
        $number_array = str_split($number_without_slash);
        $score = array_sum($number_array)%10;
        $places = [
            'โมโกจู',
            'เกาะเสม็ด',
            'เกาะไหง',
            'หมู่บ้านคีรีวง',
            'ตลาดร่มหุบ',
            'สวนผึ้ง',
            'ทองผาภูมิ',
            'ภูป่าเปาะ',
            'สวนน้ำ',
            'ถ้ำปลา',
        ];
        return $places[$score];
    }

    public static function getAction($mobileno)
    {
        $pos = strpos($mobileno, '9');
        if ($pos === false) {
            $pos = rand(0, 9);
        }
        $pos = $pos%10;
        $actions = [
            'ปิ้งไก่',
            'ขโมยเงินบริจาค',
            'รับน้อง',
            'ดูแนนโน๊ะ',
            'นั่งส้วม',
            'จีบผู้ชาย',
            'จีบผู้หญิง',
            'เรียน CI/CD',
            'ไถเงิน',
            'รอรถไฟฟ้า',
        ];
        return $actions[$pos];
    }
}
