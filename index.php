<?php
require_once 'Calculate.php';//подключение класса

//$obj = new Calculate();
//echo $obj->plus(5,7);
//статичесий  метод обращения
echo '<br>'."Функция статического сложение = ". Calculate::plus(5,7);
//echo Calculate::plus(5,7);//имя класса и его метод
echo '<br>';
echo '<br>'."Функция статического вычитания".'<br>';
echo Calculate::minus(15,5);
echo '<br>'."Функция статического умножения".'<br>';
echo Calculate::multiplication(9,5);
echo '<br>'."Функция статического деления = ".Calculate::division(90,0).'<br>';
echo Calculate::division(9,10);


//class First
//{//тело класса
// //свойства класса
//   public $hello = 'HELLO ';
//   public $str = 'world !';
//   //метод класса
//   public function hello()
//    {
//       $a = $this->str;
//       $s = $this->hello;
//       echo   $s . $a ;
//    }
//
//}
//
////new First();//объект
//$obj = new First();
////var_dump($obj);
////вывести объект->со свойствами
////echo $obj->hello;
////echo $obj->str;
////вывод метода //public function hello()
////$obj->hello();
//$obj->hello = 'Привет ';//присваиваем
//$obj->str = 'солнышко !';//переопределяем
//$obj->hello();//выводим



















