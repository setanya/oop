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
}