<?php

/**
 * Class RadioСоздать Class Radio, который будет создавать radiobutton, унаследовать класс Input. Добавить к классу Radio
private-поле isChecked, метод getCheckedState(), который
не принимает ничего в качестве параметра и возвращает значение поля isChecked, setCheckedState(),
 записывающий в поле isChecked значение "true"  [setIsChecked($isChecked = true)], и конструктор,
принимает _background, _width, _height, _name, _value,
_isChecked в качестве параметров и вызывает соответствующие методы для заполнения параметров в поле.
 * //родитель Control -> наследник Input -> наследник Radio
 */
class Radio extends Input
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
}