<?php
require_once 'Calculate.php';//подключение класса
require_once 'Control.php';//родитель
require_once 'Input.php';//родитель -> наследник Input
require_once 'Button.php';//родитель -> наследник Input -> наследник Button
require_once 'Text.php';//родитель -> наследник input -> наследник Text
require_once 'Label.php';//родитель -> наследник Input -> наследник Label
require_once 'Radio.php';//родитель -> наследник Input -> наследник Radio
require_once 'Checkbox.php';//родитель -> наследник Input -> наследник Checkbox
require_once  'Select.php';//родитель  -> наследник Select
require_once  'Select1.php';//родитель  -> наследник Select
require_once 'PointInterface.php';//подключение интерфейса
require_once  'Point.php';//родитель  -> наследник
require_once  'CircleC.php';//родитель  -> наследник
require_once  'Rectangles.php';//родитель  -> наследник
require_once 'app/User.php';
require_once 'User.php';

//use My\User;

$c = new CircleC(2,4,20);
echo $c->area();

echo '<br>';
$user = new User();
echo '<br>';
$user1 = new My\User();
echo '<br>';
(new User());
echo '<br>';


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



















