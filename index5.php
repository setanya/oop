<?php
session_start();
//session_destroy();
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
//require_once 'pubpablic/Publication.php';
//require_once 'pubpablic/News.php';
//require_once 'pubpablic/Articles.php';
//require_once 'pubpablic/Announcements.php';
/////*-----------------------------------------------------------------*/
use \app\lib\libary;
use pubpablic\Publication;
use pubpablic\Articles;//подключили пространство имен    pubpablic(папка)\имя класса Articles
use pubpablic\Announcements;//подключили пространство имен    pubpablic(папка)\имя класса Announcements
use pubpablic\News;//подключили пространство имен    pubpablic(папка)\имя класса News

/**publishing
 * в параметр приходит имя класса вместе с пространством имени
*/
function auto_load($class)//наша функция для авто загрузги с пространством имен
{
    //echo $class.'<br>';//pub\News
    $str = $_SERVER['DOCUMENT_ROOT'].'/';
    $str .= str_replace('\\', '/', $class);//нужна для замены слешей, для формирования пути
    $str .='.php';
    // echo $str . '.php'.'<br>';//pub/News.php
    //echo $str;
    if(is_file($str)){
        require_once $str ;
    }
}
spl_autoload_register('auto_load');//функция автозагрузки
/*-----------------------------*/
// function autoload($cl){
//     $ds = DIRECTORY_SEPARATOR;//$_SERVER['DOCUMENT_ROOT'] .
////      $filename =  $ds . str_replace('\\', $ds, $cl) . '.php';
////      //$str = str_replace('\\', '/', $class).'.php';
////      echo $filename;//pubpablic/News.php
////      //require  $filename;
//     echo $ds;
////
//   }
//spl_autoload_register('autoload');//функция автозагрузки



/*-----------------------------------------------------------------*/
$user = new libary();
echo '<br>';


$obj = new Example();
echo '<br>';
$obj->run();//вызвали метод объекта trait Hello
echo '<br>';
$obj->showRun();
echo '<br>';
echo $obj;
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

$k = new News('fffff', 'fff','ffffff');
echo $k->show();
//$p = new News('Новость', "Будьте осторожны ГОЛОЛЁД", "");
//echo $p->show();
//echo '<br>';
//$pu= new Announcements( 'Объявление', 'Отдам котенка в добрые руки', '15.12.2020');
//echo $pu->show();
//echo '<br>';
//$pub = new Articles("Статья", "Статья на тему : Как построить здоровые отношения с заказчиком.", "Спикер Антон Видищев");
//echo  $pub->show();
$arblock = [];//создали пустой массив для записи в него объектов
$arblock[]= new News('Новость 1', "Скоро открытие нового магазина Виталюр", "");//объект
$arblock[]= new Announcements( 'Объявление', 'Отдам котенка в добрые руки', '15.12.2020');
$arblock[]= new Articles("Статья 1", "Статья на тему : Как построить здоровые отношения с заказчиком.", "Спикер Антон Видищев");
$arblock[]= new Announcements('Объявление','Будьте осторожны ГОЛОЛЁД','20,12,2020');
$arblock[]= new Articles('Статья 2','Статья на тему : Распростронение короновируса','ВОЗ');
$arblock[]= new News('Новость 2','Скоро Новый год ! Скоро Новый год!','');
$arblock[]= new Articles('Статья 3','Какой подарок  лучше подарить ребёнку','Дед Мороз');
foreach ($arblock as $key){//цикл который перебираем и на каждом шаге выводим 
    echo $key->show();
}
/*-------------------------------------*/

$prod1 = new \classes\cart\Product('apple', 100, 1);//создали объекты
$prod2 = new \classes\cart\Product('peach', 200, 14);//создали объекты
$prod3 = new \classes\cart\Product('potato', 500, 10);//создали объекты
$prod4 = new \classes\cart\Product('milk', 10, 1);//создали объекты

$cart = new classes\cart\Cart();//вызвали объект класса Cart()
//$cart->addToCart($prod1); //дописываем объекты в массив
//$cart->addToCart($prod2); //дописываем объекты в массив
//$cart->addToCart($prod3); //дописываем объекты в массив
//$cart->addToCart($prod4); //дописываем объекты в массив

$cart->getCart(); // выводим массив
//echo '<pre>';
//print_r($_SESSION['cart']);
//echo '</pre>';



























