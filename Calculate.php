<?php


class Calculate
{
    private static $r = 0;

    //статический метод
    public static function plus($a, $b)
    {
        //self::$r;//обращение к статической переменной private static $r = 0;
        return $a + $b;
    }
    public static function minus($a, $b)
    {
        return $a - $b;
    }
    public static function multiplication($a, $b)//умнодение
    {
        return $a * $b;
    }
    public static function division($a, $b)//деление
    {
        if( $b !=0){
            return $a / $b;
        }else{
            return 'число на 0 нельзя делить';
        }

    }

}