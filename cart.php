<?php
session_start();//

function auto_load($class)//наша функция для авто загрузки
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


$cart = new classes\cart\Cart();//вызвали объект класса Cart()

//echo '<pre>';
//print_r($_SESSION['cart']);
//echo '</pre>';
$cart->getCart(); // выводим массив





//$prod1 = new \classes\cart\Product('apple', 100, 1);//создали объекты
//$prod2 = new \classes\cart\Product('peach', 200, 14);//создали объекты
//$prod3 = new \classes\cart\Product('potato', 500, 10);//создали объекты
//$prod4 = new \classes\cart\Product('milk', 10, 1);//создали объекты
//$cart->addToCart($prod1); //дописываем объекты в массив
//$cart->addToCart($prod2); //дописываем объекты в массив
//$cart->addToCart($prod3); //дописываем объекты в массив
//$cart->addToCart($prod4); //дописываем объекты в массив

