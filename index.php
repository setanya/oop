<?php
class First
{//тело класса
 //свойства класса
   public $hello = 'HELLO ';
   public $str = 'world !';
   //метод класса
   public function hello()
    {
       $a = $this->str;
       $s = $this->hello;
       echo   $s . $a ;
    }

}

//new First();//объект
$obj = new First();
//var_dump($obj);
//вывести объект->со свойствами
//echo $obj->hello;
//echo $obj->str;
//вывод метода //public function hello()
//$obj->hello();
$obj->hello = 'Привет ';//присваиваем
$obj->str = 'солнышко !';//переопределяем
$obj->hello();//выводим



















