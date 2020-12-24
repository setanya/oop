<?php
//namespace My;//пространство имен

class User
{
    public $login;
    public $password;
    protected $mysql;
    private $isAuth = false;

    public function __construct(mysqli $mysql, $login = '', $password = ''){////только объект класса mysqli

        $this->mysql = $mysql;
        $this->login = $login;
        $this->password =$password;
        if(isset($_COOKIE) && ($_COOKIE['login'] != '')){//если в куки не пустая
        $this->isAuth = true;//устанавливаем переключатель в положение true
        }
    }

    public function addUser()//метод добавления пользователя
    {
       $sql = "INSERT INTO `users` SET `login` = '".$this->login."', `password` = '".$this->password."' ";
        return $this->mysql->query($sql);
    }
    public function delete($id)//метод удаления пользователя
    {
        $sql = "DELETE FROM `users` WHERE `id`= " .intval($id);
        return $this->mysql->query($sql);
    }
    public function update($id, $arData = [])//метод редактирования
    {//'login' => 'вася', 'password' =>'123654'
        if(!empty($arData)){
            $sql = "UPDATE `users` SET ";
            $c = 0;
                foreach ($arData as $k=>$val){
                    $sql .= "`{$k}` = '{$val}'";
                    $c++;
                    if($c < count($arData)){
                        $sql .= ", ";
                    }
                }
            $sql .= " WHERE `id` = ".intval($id);
            // return $sql;
             return $this->mysql->query($sql);
        }
    }
    public function getAll()//возвращает всех пользователей
    {//вернуть всех пользователей из таблицы юзеров
        //$sql = "SELECT `name` FROM `users`";
        $sql = "SELECT `login` FROM `users`";
         return $this->mysql->query($sql);
    }
    public function getById($id)//вернуть пользователя по id
    {//SELECT `name` FROM `users` WHERE `id`= 4
        //$sql = "SELECT `name` FROM `users` WHERE `id`=".$id;
        $sql = "SELECT `login` FROM `users` WHERE `id`='".$id."'";
            return $this->mysql->query($sql);
    }
    public function getByLogin($login)//вернуть пользователя по логину
    {
        $sql = "SELECT `login` FROM `users` WHERE `login`='".$login."'";
        return $this->mysql->query($sql);
    }

    public function register($userParam)//$userParam = ['login'=>$login,'password'=>$pass]
    {   //$resCeckUser- проверяем пришедший логин на уникальность
        //$this->getByLogin($userParam['login']) возвращаем логин  из базы
        $resCeckUser = $this->getByLogin($userParam['login'])->num_rows;//num_rows(это св-во) количество записей
            if($resCeckUser > 0  ){//если запись найдена
                $this->isAuth=true;
                return '<p style="color: crimson">  Пользователь с таким логином уже  есть в базе</p>';
            }else{//если запись  не найдена
                $sql = "INSERT INTO `users` SET `login` = '".$userParam['login']."', `password` = '".md5($userParam['password'])."'";
                $this->mysql->query($sql);
                return '<p style="color: crimson">Вы успешно зарегистрированы и авторизованны </p>';
            }
    }
    public function auth($userParam)
    {
        $login =htmlspecialchars($userParam['login']);
        $pass =md5($userParam['password']);
        $sql = "SELECT * FROM `users` WHERE `login`='".$login ."'  AND `password` = '".$pass."'";
        //var_dump($sql);// проверили что приходит в строку
        if($this->mysql->query($sql)->num_rows>0 ){
            //$this->isAuth=true;
            $_SESSION['login'] = $login;
            return '<p style="color: #1c15ec">Пользователь авторизован и прошёл проверку</p>';
        }else{
            return '<p style="color: #1c15ec">Неверно ввели данные</p>';
        }
    }
    public function getByPass($pass)//вернуть пользователя по логину
    {
        $sql = "SELECT `password` FROM `users` WHERE `password`='".$pass."'";
        return $this->mysql->query($sql);
    }
    static public function isAuth()
    {   $mysql = new mysqli('localhost', 'root', '', 'test');
        $user = new self($mysql, '333');
        echo $user->login;
        if(isset($_SESSION['login'])){//если сесия есть
            return true;
        }
    }

}
//try{// блок который ловит исключение
//    $user = new User('loginh', 1212121);
//    echo $user->addUser();//если условия верные тогда записать в базу
//}catch (Exception $e){
//    echo $e->getMessage();//вернуть getMessage() == throw new Exception('Неверный логин');
//}







//echo $user->login;

//echo '<pre>';
//echo '</pre>';