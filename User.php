<?php
//namespace My;//пространство имен

class User
{
    public $login;
    public $password;
    protected $mysql;
    public function __construct(mysqli $mysql, $login = '', $password = ''){
//        if (strlen($login)>3 && strlen($login)<10){//strlen если  длинна строки
//            $this->login = $login;
//        }
//        if (strlen($password)>5 && strlen($password)<10){
//
//            $this->password =$password;
//        }
     //блок делает исключение
//        if (strlen($login)<3 || strlen($login)>10){//strlen если  длинна строки
//            throw new Exception('Неверный логин');
//        }
//        if (strlen($password)<5 || strlen($password)>10){
//            throw new Exception('Неверный пароль');
//        }
        $this->mysql = $mysql;
        $this->login = $login;
        $this->password =$password;
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
        $sql = "SELECT `login` FROM `users` WHERE `id`=".$id;
            return $this->mysql->query($sql);
    }
    public function getByLogin($login)
    {
        $sql = "SELECT `login` FROM `users` WHERE `login`='".$login."'";
        return $this->mysql->query($sql);
    }

    public function register($userParam)
    {
        $resCeckUser = $this->getByLogin($userParam['login'])->num_rows;
        if($resCeckUser > 0){
            return ' Такой пользователь в базе есть';
        }else{
            $sql = "INSERT INTO `users` SET `login` = '".$userParam['login']."', `password` = '".md5($userParam['password'])."'";
            $this->mysql->query($sql);
            return 'Вы успешно зарегистрированы';
        }

    }
    public function auth($userParam)
    {
        $login =htmlspecialchars($userParam['login']);
        $pass =md5($userParam['password']);
        $sql = "SELECT * FROM `users` WHERE `login`='".$login ."' AND `password` = '".$pass."'";
        var_dump($this->mysql->query($sql));
        if($this->mysql->query($sql)->num_rows>0){
            echo 'Пользователь авторизован';
        }else{
            echo 'Неверно ввели данные';
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