<?php
//связана с классом CRUD

function auto_load($class)//наша функция для авто загрузки
{   //echo $class.'<br>';//pub\News
    $str = $_SERVER['DOCUMENT_ROOT'].'/';//приходит полный путь
    $str .= str_replace('\\', '/', $class);//нужна для замены слешей, для формирования пути
    $str .='.php';//добавление  .php
    // echo $str . '.php'.'<br>';//pub/News.php
    //echo $str;
    if(is_file($str)){// is_file  Возвращает TRUE, если файл существует и является обычным файлом.
        require_once $str ;
    }
}
spl_autoload_register('auto_load');//функция автозагрузки

    //  1 . Подключаемся к базе . Возвращается объект
$mysql = new mysqli('localhost', 'root', '', 'test');

    //  2 . выполняем условие  подключения к базе данных
if ($mysql->connect_error) {//если не состоялось  подключение
    die('Ошибка подключения (' . $mysql->connect_errno . ') '
        . $mysql->connect_error);//обрывает подключение выводит текст
}

$res = $mysql->query("SELECT * FROM `category`");//выполняем запрос, Возвращает объект запроса
//print_r($res->fetch_assoc());//возвращаяе первую найденную запись
//перебирает всю таблицу пока есть значения
//while ($arRes = $res->fetch_assoc()){// до тех пор пока не нулл
//    echo '<pre>';
//    print_r($arRes);//выводится количество  массивами всю таблицу
//    echo '</pre>';//
//}
//выводит добавление в таблицу
//$rezz = new Crud($mysql, '', 'Производство');
//$rezz->addCategory();
//выводит удаление из таблицы
//$delet = new Crud($mysql, '', '');
//$delet->delete(72);
//выводим редактирование

//выводим все категории
$all = new Crud($mysql, '', '');
$all->getAll();
echo '<pre>';
print_r($all->getAll()->fetch_all(MYSQLI_ASSOC));//выводится количество  массивами всю таблицу
echo '</pre>';//
$q = $all->getAll();
$w = $q->fetch_all(MYSQLI_ASSOC);

foreach ($w as $key => $value) {
    foreach ($value as $iKey => $iValue) {
        echo "$iValue <br>";
    }
}
//
//вернуть категории по id
$rezult =$all->getById('2');
$as =$rezult ->fetch_all(MYSQLI_ASSOC);
echo '<pre>';
print_r(array_values($as));
echo '</pre>';








