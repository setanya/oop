<?php
session_start();
//session_destroy();//удаление данных сесии
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

use \town\Town;
use \town\Country;
$a = new Town('Полоцк', 997, 555);
$w = new Town('Слоним', 1997, 1233);
$q = new Town('USA', '321', 456789);
//echo '<pre>';//приходит массив объекта
//print_r ($a);
//echo '</pre>';
//echo '<pre>';//проверили что в сесию записывается данные
//print_r($_SESSION['country']);
//echo '</pre>';
$b = new Country();
$b->addTown($a);//надо передать чтобы выводилось
$b->addTown($w);
$b->addTown($q);

echo $b->getCountryList();

//echo '<pre>';//проверили что приходит массив из объектов
//print_r ($b);
//echo '</pre>';





