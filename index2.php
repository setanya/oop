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
require_once 'app/menu/Menu.php';//подключение меню
require_once 'app/menu/MenuItem.php';//подключение меню


/*   раздел меню */
use menu\MenuItem;//передали пространство имен
use menu\Menu;//передали пространство имен

$a = new Menu();//объект класса Menu
//$a->PrintMenu(1000,100, 'green', 'black');//метод PrintMenu
echo $a->AddMenuItem('#', 'Home');
echo $a->AddMenuItem('#', 'About');
echo $a->AddMenuItem('#', 'Photo');
echo $a->AddMenuItem('#', 'Contact Us');
echo $a->AddMenuItem('#', 'Login');


echo $a->PrintMenu(1000,100, '#0fb0f8', 'red'). '<br>';//вывело цветной квадрат

//$a= new MenuItem('','');
//echo '<br>';

//echo '<br>'.'<br>'.'<br>';
echo '<br>';



/*Форма регистрации----------------------------------------------------------------------------*/

$control = new Control();//вызов объека родителя
echo '<br>';
echo '<form>'."Форма регистрации".'<br>';
echo '<br>';
echo 'Имя'.'<br>';
$input = new Text('red', 150, 30, 'text', '', 'Ваше имя');
echo $input->convertToHTML();
echo '<br>';

echo '<br>'.'Фамилия'.'<br>';
$input = new Text('', 150, 30, 'text', '', '');
echo $input->convertToHTML();
echo '<br>';

echo '<br>'."Пол".'<br>';
$radio = new Radio('red', '10', '','contact', 'email', true);
echo $radio->convertToHTML().'Мужской'.'<br>';
echo $radio->convertToHTML().'Женский'.'<br>';
echo '<br>';

echo 'Город'.'<br>';
$input = new Text('', '150', 30, 'text', '', '');
echo $input->convertToHTML();
echo '<br>';

echo '<br>'."Адрес *".'<br>';
echo '<br>';
$sel = new Select1('', 120, 20,'' , ['улица', 'проспект', 'переулок','бульвар','тракт','площадь','шоссе']);
echo $sel->convertToHTML().'<br>';
echo '<br>';

echo 'Дом';
$input1 = new Text('',50 , 30, 'text', '', '');
echo $input1->convertToHTML();
echo '  Корпус';
$input1 = new Text('',50 , 30, 'text', '', '');
echo $input1->convertToHTML();
echo '  Квартира';
$input = new Text('',50 , 30, 'text', '', '');
echo $input->convertToHTML();
echo '<br>';

$rc = new Checkbox('', '10', '10','contact', '', 'checkbox');
echo '<br>'.$rc->convert1ToHTML().'Подтвердите что Вы не робот'.'<br>';
echo '<br>';
echo '<br>';
$obj = new Button('#eae100', 100, 50, 'submit', 'отправить', true );
echo $obj->convertToHTML();
echo '<br>';
echo '<pre>';
var_dump($obj);//вывели массив с данными
echo '</pre>';
echo '</form>';
