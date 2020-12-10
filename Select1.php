<?php


class Select1 extends Control
{
    private $arItems=[];//массив , будем добавлять
    private $name;//если есть name у списка выпадающего
    public function __construct($background,$width,$height,$name,$items=[])
    {
        $this->setBackground($background);//родитель
        $this->setWidth($width);//родитель
        $this->setHeight($height);//родитель
        $this->name=$name;
        $this->arItems = $items ;//обращается к массиву и дописываем все значения которые впишем в массив ['молоко', 'мясо', 'фрукты','овощи']
    }
    public function convertToHTML()
    {//пишем функцию при которой будет выводится элемент селек с выпадающим списком элементов выбора
        $str = '';// сначало пустая строка
        $str .= '<select ';// с помощью точки дописываем начало строки
        $str .= 'name= "' . $this->name. '" ';// в место где лолжно стоять значение нейм передаем значение из индексного файла
        $str .= 'style = "background: ' . $this->getBackground() . '; height: ' . $this->getHeight() . 'px; width:' . $this->getWidth() . 'px;"/>';
        foreach ($this->arItems as $item){//организуется цикл
            $str .= '<option>'.$item.'<option>';//сколько придет значений в массив, стоолько <option> будет
        }
        $str .= '<select>';
        return $str;
    }

}