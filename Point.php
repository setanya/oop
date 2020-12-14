<?php


 class Point //abstract
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
//   abstract pubpablic function area();//здесь реализация ненужна
//
//    abstract pubpablic function perimeter();

}
//создавать $arItems[]= new Point(2, 5); НЕЛЬЗЯ НЕЛЬЗЯ создавать объекты












