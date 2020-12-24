<?php
//session_start();//

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

//исключения
//throw new Exception()  - бросить исключение
//throw new Exception('Текст ошибки');

//перехват
//try {//попытается выполнить участок кода
//
//    $x = 0;
//    if($x === 0){
//        throw new Exception('Делить на ноль НЕЛЬЗЯ');//исключение прекращается выполнение
//    }
//    echo 1/$x;
//}catch (Exception $e){
//     echo $e->getMessage();//возвращает сообщение //Делить на ноль НЕЛЬЗЯ
//} finally {//сработает даже если было исключени
//    echo '<br>123';//123
//}

//вывод корзины связанным с индекс 5
////$cart = new classes\cart\Cart();//вызвали объект класса Cart()
//echo '<pre>';
//print_r($_SESSION['cart']);
//echo '</pre>';
////$cart->getCart(); // выводим массив
//$prod1 = new \classes\cart\Product('apple', 100, 1);//создали объекты
//$prod2 = new \classes\cart\Product('peach', 200, 14);//создали объекты
//$prod3 = new \classes\cart\Product('potato', 500, 10);//создали объекты
//$prod4 = new \classes\cart\Product('milk', 10, 1);//создали объекты
//$cart->addToCart($prod1); //дописываем объекты в массив
//$cart->addToCart($prod2); //дописываем объекты в массив
//$cart->addToCart($prod3); //дописываем объекты в массив
//$cart->addToCart($prod4); //дописываем объекты в массив

$mysql = new mysqli('localhost', 'root', '', 'test');
//Подключаемся к базе . Возвращается объект

if ($mysql->connect_error) {//если не состоялось  подключение
    die('Ошибка подключения (' . $mysql->connect_errno . ') '
        . $mysql->connect_error);//обрывает подключение выводит текст
}

$res = $mysql->query("SELECT * FROM `users`");//выполняем запрос, Возвращает объект запроса
//print_r($res->fetch_assoc());//возвращаяе первую найденную запись

//while ($arRes =$res->fetch_assoc()){// до тех пор пока не нулл
//    echo '<pre>';
//    print_r($arRes);//выводится количество  массивов
//    echo '</pre>';//
//}
$user = new User($mysql);//класс User.php
//$user->addUser();//добавление
//$user->delete(9);//удаление
//echo $user->update(5, ['login' =>'Misha', 'password' => '00053']);//редактирование
//var_dump($user->getAll());
$a = $user->getById(4) ;//
print_r($a->fetch_assoc());//вывести имя нужного $id
echo '<br>';
//вывести всех пользователей из таблицы
$b =$user->getAll();
//echo '<pre>';
//print_r ($b->fetch_all(MYSQLI_ASSOC));//fetch_all извлекает все строки из результирующего набора
//echo '</pre>';
//$w = $b->fetch_all(MYSQLI_ASSOC);
//foreach ($w as $key => $value) {
//    foreach ($value as $iKey => $iValue) {
//        echo "$iValue <br>";
//    }
//}
//($f->fetch_assoc());//вывести имя нужного $id
//************************************************************************************
//форма регистрации и авторизации
//if(isset($_REQUEST['submit'])){
//    $login = $_REQUEST['inputLogin'];
//    $pass = $_REQUEST['inputPassword'];
//    echo  $user->register(['login'=>$login,'password'=>$pass]);
//}




echo '<br><br><br>';
if(isset($_REQUEST['submit'])){
    $login = $_REQUEST['inputLogin'];
    $pass = $_REQUEST['inputPassword'];
    echo $user->auth(['login'=>$login,'password'=>$pass]);
}


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




//echo '<pre>';//проверили что отправили данные
//print_r($_POST);
//echo '</pre>';
//echo '<br><br><br>';
//$form = new Form();
//echo $form->beginForm();
//echo "Введите логин";
//echo '<br>';
//echo $form->input(['type'=>'text','name'=>'inputLogin', 'id'=>'inp']);//ассоциативный массив ключ =>значение
//echo '<br>';
//echo 'Выберите город';
//echo '<br>';
//echo $form->select(['name'=>'city'],['Москва'=>'Москва','Минск'=>'Минск','Киев'=>'Киев']);
//echo '<br>';
//echo $form->button(['type'=>'submit', 'name'=>'submit'], 'Отправить');
//echo '<br>';
//echo $form->endForm();


