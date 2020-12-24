<?php
//setcookie('login', '', time()+60*60, '/');//установка куки
///session_start();
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

$mysql = new mysqli('localhost', 'root', '', 'test');
//Подключаемся к базе . Возвращается объект

if ($mysql->connect_error) {//если не состоялось  подключение
    die('Ошибка подключения (' . $mysql->connect_errno . ') '
        . $mysql->connect_error);//обрывает подключение выводит текст
}
$user = new User($mysql);//класс User.php
//форма регистрации ------------------------------------------------
//print_r($_REQUEST);//проверяем что приходит в массиве
//$_REQUEST - глобальный массив(попадает и из гет и пост)
if(isset($_REQUEST['submit']) && isset($_COOKIE)){
    $login = $_REQUEST['inputLogin'];//ключ логин
    $pass = $_REQUEST['inputPassword'];//ключ пароль
    setcookie('login', $login,time() + 60,'/');//установили куки
    echo  $user->register(['login'=>$login,'password'=>$pass]);//
    //пришедшие данные из $_REQUEST передаем в метод  public function register($userParam)
}
//форма  авторизации ----------------------------------------
if(isset($_REQUEST['submit']) && isset($_COOKIE)){
    $login = $_REQUEST['inputLogin'];
    $pass = $_REQUEST['inputPassword'];
    //setcookie('login', $login,time() + 60,'/');//установили куки
   echo $user->auth(['login'=>$login,'password'=>$pass]);
    //пришедшие данные из $_REQUEST передаем в метод  public function auth($userParam)
}

print_r($_COOKIE['login']);//выводим куку
echo '<br>В куки записался логин '.$_COOKIE['login'].'<br> ';


//выводится сама форма class Form.php
$form = new Form();
echo $form->beginForm();
echo "Введите логин";
echo '<br>';
echo $form->input(['type'=>'text','name'=>'inputLogin', 'id'=>'inp']);//ассоциативный массив ключ =>значение
echo '<br>';
echo "Введите пароль";
echo '<br>';
echo $form->input(['type'=>'password','name'=>'inputPassword', 'id'=>'pass']);//ассоциативный массив ключ =>значение
echo '<br>';
echo '<br>';
echo $form->button(['type'=>'submit', 'name'=>'submit'], 'Зарегистрироваться');
echo '<br>';
echo $form->endForm();


