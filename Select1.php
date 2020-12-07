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
        $this->arItems = $items ;//обращается к массиву и дописываем
    }
    public function convertToHTML()
    {
        $str = '';
        $str .= '<select ';
        $str .= 'name= "' . $this->name. '" ';
        $str .= 'style = "background: ' . $this->getBackground() . '; height: ' . $this->getHeight() . 'px; width:' . $this->getWidth() . 'px;"/>';
        foreach ($this->arItems as $item){//организуется цикл
            $str .= '<option>'.$item.'<option>';//сколько придет значений в массив, стоолько <option> будет
        }
        $str .= '<select>';
        return $str;
    }

}