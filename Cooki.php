<?php


class Cooki
{
    //устанавливает значения $value в куку с именем $name
    static public function setCookie($name, $value)
   {
       if($name != '' && $value != ''){
           setcookie($name, $value, time() + 60, '/');//84600 sytki
           return true;
       }else{
           return false;
       }
   }

    /**
     * получаем значение куки с именем $name
     * @param $name
     * @return mixed
     */
   static public function getCookie($name)//получаем
   {
    if($name != '' && $_COOKIE[$name] != ''){
        return $_COOKIE[$name];
    }else{
        echo 'cookie с таким именем не найдена';
    }
   }
}