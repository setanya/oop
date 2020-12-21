<?php

//связано с baza.php
class Crud
{
    public $id;
    public $title;
    protected $mysql;

    public function __construct(mysqli $mysql, $id, $title){
        $this->mysql = $mysql;
        $this->id = $id;
        $this->title = $title;
    }
    public function addCategory()//метод добавления категории
    {//  "INSERT INTO `имя таблицы` SET `столбик` = 'значение', `столбик2` = 'значение'";
        $sql = "INSERT INTO `category` SET `title` = '".$this->title."'";
        return $this->mysql->query($sql);//возвращаем ответ (query)  Посылает запрос MySQL
    }

    public function delete($id)//метод удаления
    {
        if(is_numeric($id)){// если переданный аргумент число
           // DELETE FROM `имя таблицы` WHERE `id`= значению;
            $sql = "DELETE FROM `category` WHERE `id`= " .intval($id);//intval — Возвращает целое значение переменной
            return $this->mysql->query($sql);
        }
    }
        //UPDATE `имя_таблицы` SET `поле1` ='значение1', `поле2`='значение2' WHERE условие_по_которому_следует_выбрать_строки
	    //установить значение в `поле1` ='значение1', `поле2`='значение2' где name='Петя' или id=1
    public function update($id, $arData = [])//метод редактирования
    {
//        if(!empty($arData)){
//            $sql = "UPDATE `category` SET ";
//            $c = 0;
//            foreach ($arData as $k=>$val){
//                $sql .= "`{$k}` = '{$val}'";
//                $c++;
//                if($c < count($arData)){
//                    $sql .= ", ";
//                }
//            }
//            $sql .= " WHERE `id` = ".intval($id);
//            // return $sql;
//            return $this->mysql->query($sql);
//        }
    }
    public function getAll()//возвращает все категории
    {//вернуть всех пользователей из таблицы юзеров

        $sql = "SELECT `title` FROM `category`";
        return $this->mysql->query($sql);
    }
    public function getById($id)//вернуть категории по id
    {//SELECT `name` FROM `users` WHERE `id`= 4
        if(is_numeric($id)){
            $sql = "SELECT `title` FROM `category` WHERE `id`=".intval($id);
            return $this->mysql->query($sql);
        }else{
            return 'ERROR';
        }

    }



}