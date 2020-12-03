<?php


abstract class Point
{
    protected $x;
    protected $y;//protected - защищенная

    public function __construct()
    {
        $this->x;
        $this->y;
    }
    public function show()
    {
        echo 'x = '.$this->x.'y = '.$this->y;
    }
   abstract public function area();//здесь реализация ненужна

    abstract public function perimeter();

}
//создавать $arItems[]= new Point(2, 5); НЕЛЬЗЯ НЕЛЬЗЯ создавать объекты