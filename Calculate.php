<?php


class Calculate
{
    private static $r = 0;

    //статический метод
    public static function plus($a, $b)
    {
        self::$r;//обращение к статической переменной private static $r = 0;
        return $a + $b;
    }
    public static function minus($a, $b)
    {
        return $a - $b;
    }
}