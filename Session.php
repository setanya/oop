<?php


class Session
{
//$_SESSION['count']

    public function __construct(){
    session_start();
    }

    public function setSession($ses, $value){
         $_SESSION[$ses]=$value;
    }
    public function getSession($ses){
            return $_SESSION[$ses];
    }
    public function delSession($ses){

        unset($_SESSION[$ses]);
    }
    public function isSession($ses){
        if(isset($_SESSION[$ses]) && $_SESSION[$ses] != ''){
            return 'СЕСИЯ установленна';
        }else{
            return 'Сесия не установленна';
        }
    }
}