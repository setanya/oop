<?php

require_once 'Control.php';//родитель
require_once 'Input.php';//родитель -> наследник Input
require_once 'Button.php';//родитель -> наследник Input -> наследник Button
require_once 'Text.php';//родитель -> наследник input -> наследник Text
require_once 'Label.php';//родитель -> наследник Input -> наследник Label
require_once 'Radio.php';//родитель -> наследник Input -> наследник Radio
require_once 'Checkbox.php';//родитель -> наследник Input -> наследник Checkbox
require_once  'Select.php';//родитель  -> наследник Select

//формирует тег<input на основе данных объекта

function convertToHTML($object)
{
    $str = '';//создали пустую и будем записывать
    /*--вывести или кнопку или поле для ввода текста(текстария)----*/
    if($object instanceof Text || $object instanceof Button || $object instanceof Radio || $object instanceof Checkbox){

    if ($object instanceof Text) {// instanceof если относится к классу Text
        $str .= '<label for="' . $object->getName() . '" ></label>';//устанавливаем <label for="text"></label>
    }
    //<input type="submit" placeholder="Введите текст" name="text" value="OK" style="background:#e4d0ec; width:140px; height:30px;
    $str .= '<input ';//начало строки
    if ($object instanceof Button) {//instanceof если относится к классу Button
        $str .= 'type="submit" ';//<input type="submit"
    } elseif ($object instanceof Text) {// instanceof если относится к классу Text
        $str .= 'type="text" ';//<input type="text"
        $str .= 'placeholder = "' . $object->getPlaceholder() . '" ';//<input placeholder="Введите текст"
    } elseif ($object instanceof Radio){
        $str .= 'type="radio" ';//<input  type = "radio" name = "sex" value =  "male" checked>
    }elseif ($object instanceof Checkbox){
        $str .= 'type="checkbox" ';//<input type = "checkbox" name = "type1" value = "low">Меньше 18<br>
    }
    $str .= 'name="' . $object->getName() . '" ';
    $str .= 'value="' . $object->getValue() . '" ';
    $str .= 'style="background:' . $object->getBackground() . '; width:' . $object->getWidth() . 'px; height:' . $object->getHeight() . 'px"';
    $str .= '/>';

    }/*--вывести выпадающий список---*/
    elseif ($object instanceof Select){
        //$str .= '<select> <option>' .$object->getItems(). '</option></select>';//начало строки
        $str .= '<select>';
        //$w= ['Овощи', 'Фрукты','Ягоды',$object->getItems()];
       $w= $object->getItems();
        foreach ($w as $ar=>$val){
             $str .= '<option>'.$val.'</option>'.'</br>';}
        //foreach ($w as $ar){
            //$str .= '<option>'.$ar.'</option>'.'</br>';}

        $str .= '</select>';
    }
    return $str;
}

$control = new Control();//вызов объека родителя
//ПОЛЕ ВВОДА  вывод значений через конструктор родителя и наследников
$text = new Text('#e4d0ec', 240, 30, 'text', '', 'Введите имя');
echo '</br>';
echo "Имя  ".convertToHTML($text);
echo '</br>';
$text = new Text('#e4d0ec', 240, 30, 'text', '', 'Введите фамилию');
echo '</br>';
echo "Фамилия  ".convertToHTML($text);
echo '</br>';

//выпадающий список

//$select = new Select('',  '', '', "Раздел 5");
$s = new Select();
$s->setItems('Раздел 1');
$s->setItems('Раздел 2');
$s->setItems('Раздел 3');
$s->setItems('Раздел 4');
echo '</br>';
echo convertToHTML($s);
echo '</br>'.'</br>';

//радио кнопки М и Ж
$rad = new Radio('','' ,'' ,'sex' , 'male', true);
echo "Мужчина  ".convertToHTML($rad);
echo '</br>';
echo "Женщина  ".convertToHTML($rad);
echo '</br>';

//<input type = "checkbox"
$check = new Checkbox('','' ,'' ,'sex' , 'male', true);
echo '</br>'."Сколько Вам лет".'</br>';
echo convertToHTML($check)."Ваш возраст до 18 лет".'</br>'.'</br>';
echo convertToHTML($check)."Ваш возраст от 19 до 30".'</br>'.'</br>';
echo convertToHTML($check)."Ваш возраст от 31 до 60 ".'</br>'.'</br>';
echo convertToHTML($check)."Ваш возраст больше 60".'</br>'.'</br>';

//КНОПКА вывод значений через конструктор родителя и наследников
$button = new Button('#847b7b',70,20, 'button', 'OK', true);
echo "Кнопка отправкм формы  ".convertToHTML($button);//вызов function convertToHTML(с аргументами переданными переменной $button)
echo '<br>';

//echo '<pre>';
//var_dump(convertToHTML($button));
//echo '</pre>';

