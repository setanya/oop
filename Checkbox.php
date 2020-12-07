<?php


class Checkbox extends Input
{
    private $isChecked;

    public function __construct($background,$width,$height, $name, $value, $isChecked)
    {
        $this->setBackground($background);//родитель
        $this->setWidth($width);//родитель
        $this->setHeight($height);//родитель
        $this->setName($name);//1наследник
        $this->setValue($value);//1наследник
        $this->isChecked = $isChecked;
    }
    public function getCheckedState()
    {
        return $this->isChecked;
    }

    /**
     * @param mixed $isChecked
     */
    public function setCheckedState($isChecked = true)
    {
        $this->isChecked = $isChecked;
    }
    ////<input type = "checkbox" name = "type1" value = "low">Меньше 18<br>
    public function convertToHTML(){
        $str = '';
        $str .= '<input type="checkbox"  name="'.$this->getName().'" value="'.$this->getValue().'">';
        return $str;
    }
    //2вариант работает на 'radio' и 'checkbox' одна функция
    public function convert1ToHTML(){
        $type = $this->isChecked;
        $str = '';
        $str .= '<input type="'.$type.'"  name="'.$this->getName().'" value="'.$this->getValue().'">';
        return $str;
    }
}