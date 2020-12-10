<?php

//require_once 'Control.php';//родитель
//require_once 'Input.php';//родитель -> наследник Input
//require_once 'Button.php';//родитель -> наследник Input -> наследник Button
//require_once 'Text.php';//родитель -> наследник input -> наследник Text
//require_once 'Label.php';//родитель -> наследник Input -> наследник Label
//require_once 'Radio.php';//родитель -> наследник Input -> наследник Radio
//require_once 'Checkbox.php';//родитель -> наследник Input -> наследник Checkbox
//require_once 'Select.php';//родитель  -> наследник Select
//require_once 'Select1.php';//родитель  -> наследник Select
//require_once 'Point.php';//родитель  -> наследник
//require_once 'CircleC.php';//родитель  -> наследник
//require_once 'Rectangles.php';//родитель  -> наследник
//require_once 'app/menu/Menu.php';//подключение меню//подключили пространство имен
//require_once 'app/menu/MenuItem.php';//подключение меню//подключили пространство имен

/*-----------------------------------------------------------------*/
use \app\lib\libary;
/**
 * в параметр приходит имя сласса вместе с пространством имени
*/
function auto_load($class)//наша функция для авто загрузги с пространством имен
{

    $str = str_replace('\\', '/', $class);//нужна для замены слешей, для формирования пути
   // echo $str . '.php';
    require_once $str.'.php';
}

spl_autoload_register('auto_load');//функция автозагрузки

/*-----------------------------------------------------------------*/
$user = new libary();
echo '<br>';
/////*   раздел меню */
use app\menu\MenuItem;//подключили пространство имен
use app\menu\Menu;//app(папка)\menu(папка)\Menu(класс)
//
$a = new Menu();//объект класса Menu
echo $a->AddMenuItem('#', 'Home');
echo $a->AddMenuItem('#', 'About');
echo $a->AddMenuItem('#', 'Photo');
echo $a->AddMenuItem('#', 'Contact Us');
echo $a->AddMenuItem('#', 'Login');

echo $a->PrintMenu(1000,100, '#0fb0f8', 'red'). '<br>';//вывело цветной квадрат
echo '<br>'.'<br>'.'<br>';

$obj = new Example();
echo '<br>';
$obj->run();//вызвали метод объекта trait Hello
echo '<br>';
$obj->showRun();
echo '<br>';
echo $obj;
echo '<br>';






