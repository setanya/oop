<?php

namespace app\menu;//подключили пространство имен     app(папка)\menu(папка)\
class Menu
{
    private $listItems = [];//$listItems = [($url, $name),($url, $name),($url, $name) ]


    public function  PrintMenu($width, $height, $background_color, $color)//принимает поля со свойствами$list=[]
    {   //var_dump($this->listItems);

        $str = '';
        $str .= '<div style="width:' . $width . 'px; height: ' . $height . 'px; background-color:' . $background_color . ' ; color: ' . $color . '">';
        $str .= 'LOGOTIP';
        foreach ($this->listItems as $item){
          $str .= '<a href="'.$item->url.'"  style="margin-left: 50px;">'.$item->name.'</a>';//выводим [ключ $item  -> значение]
       }
        $str .= '</div>';
        return $str;
    }

    public function AddMenuItem($url, $name)
    {   $this->listItems[] = new MenuItem($url, $name);//создаем объект $obj с данными из класс MenuItem и его данными

    }
}