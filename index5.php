<?php
require_once 'Control.php';//родитель
require_once 'Input.php';//родитель -> наследник Input
require_once 'Button.php';//родитель -> наследник Input -> наследник Button
require_once 'Text.php';//родитель -> наследник input -> наследник Text
require_once 'Label.php';//родитель -> наследник Input -> наследник Label
require_once 'Radio.php';//родитель -> наследник Input -> наследник Radio
require_once 'Checkbox.php';//родитель -> наследник Input -> наследник Checkbox
require_once 'Select.php';//родитель  -> наследник Select
require_once 'Select1.php';//родитель  -> наследник Select
require_once 'Point.php';//родитель  -> наследник
require_once 'CircleC.php';//родитель  -> наследник
require_once 'Rectangles.php';//родитель  -> наследник
require_once 'app/menu/Menu.php';//подключение меню//подключили пространство имен
require_once 'app/menu/MenuItem.php';//подключение меню//подключили пространство имен


/*   раздел меню */
use menu\MenuItem;//подключили пространство имен
use menu\Menu;//подключили пространство имен

$a = new Menu();//объект класса Menu
echo $a->PrintMenu(1000,100, '#0fb0f8', 'red', ['Home','About','Photo','Contact Us', 'Login']). '<br>';//вывело цветной квадрат
echo '<br>'.'<br>'.'<br>';
echo $a->AddMenuItem('#', 'Home');
echo $a->AddMenuItem('#', 'About');
echo $a->AddMenuItem('#', 'Photo');
echo $a->AddMenuItem('#', 'Contact Us');
echo $a->AddMenuItem('#', 'Login');



