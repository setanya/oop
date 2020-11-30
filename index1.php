<?php

require_once 'Control.php';//родитель
require_once 'Input.php';//родитель -> наследник Input
require_once 'Button.php';//родитель -> наследник Input -> наследник Button
require_once 'Text.php';//родитель -> наследник input -> наследник Text
require_once 'Label.php';//родитель -> наследник Input -> наследник Label

//формирует тег<input на основе данных объекта

function convertToHTML($object){
    $str = '';//создали пустую и будем записывать

    if($object instanceof Text){
        $str .= '<label for="'.$object->getName().'" ></label>';
    }


    $str.='<input ';//начало строки
    if($object instanceof Button){//если относится к классу Button
        $str.='type="submit" ';
    }elseif($object instanceof Text){//если относится к классу Text
        $str.='type="text" ';
        $str .= 'placeholder:'.$object->getPlaceholder().'" ';
    }
    $str .= 'name="'.$object->getName().'" ';
    $str .= 'value="'.$object->getValue().'" ';
    $str .= 'style="background:'.$object->getBackground().'; width:'.$object->getWidth().'px; height:'.$object->getHeight().'px"';
    $str .= '/>';
    return $str;
}

$control = new Control();

$button = new Button('red',70,20, 'button', 'OK', true);
$text = new Text('', 140, 30, 'text', '', 'Введите текст');

echo convertToHTML($button);
echo '<br>';
echo convertToHTML($text);

//echo '<pre>';
//var_dump(convertToHTML($button));
//echo '</pre>';


