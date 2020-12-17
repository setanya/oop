<?php
//namespace My;//пространство имен

class User
{
    public $login;
    public $password;
    protected $mysql;
    public function __construct(mysqli $mysql, $login, $password){
//        if (strlen($login)>3 && strlen($login)<10){
//            $this->login = $login;
//        }
//        if (strlen($password)>5 && strlen($password)<10){
//
//            $this->password =$password;
//        }
     //блок делает исключение
//        if (strlen($login)<3 || strlen($login)>10){//strlen   длинна строки
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
    {
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
    {

    }
    public function getById($id)//вернуть пользователя по id
    {

    }
}
//try{// блок который ловит исключение
//    $user = new User('loginh', 1212121);
//    echo $user->addUser();//если условия верные тогда записать в базу
//}catch (Exception $e){
//    echo $e->getMessage();//вернуть ** throw new Exception('Неверный логин');
//}

//база даных





//echo $user->login;

//echo '<pre>';
//echo '</pre>';