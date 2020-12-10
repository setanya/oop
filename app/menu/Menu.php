<?php

namespace menu;//подключили пространство имен
class Menu
{
    public $listItems = [];
//    private $width;
//    private $height;
//    private $background_color;
//    private $color;

    public function  PrintMenu($width, $height, $background_color, $color,$listItems)//принимает поля со свойствами$list=[]
    {   $this->listItems=$listItems;
//        $this->width = $width;
//        $this->height = $height;
//        $this->background_color = $background_color;
//        $this->color = $color;
        $str = '';
        $str .= '<div style="width:' . $width . 'px; height: ' . $height . 'px; background-color:' . $background_color . ' ; color: ' . $color . '">';
        $str .= 'LOGOTIP';
        foreach ($this->listItems as $item){
          $str .= '<a href="#"  style="margin-left: 50px;">'.$item.'</a>';
       }

        $str .= '</div>';
        return $str;
    }

    public function AddMenuItem($url, $name)
    {   $obj[] = new MenuItem($url, $name);//создаем объект $obj с данными из класс MenuItem и его данными
          $this->listItems = $obj;// передаем в массив $listItems = [] объект $obj с данными из класс MenuItem и его данными
        // return $this->listItems;
        return '<a href="'.$url.'"  style="margin-left: 30px;">'.$name.'</a>';
        //print_r($this->listItems) ;
    }
}