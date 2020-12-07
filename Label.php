<?php


class Label extends Input// if нужно передать объект
{
    private $for;
//родитель Control -> наследник Input -> наследник Label
    public function __construct($background,$width,$height, $name, $value,$forObject)
    {
        $this->setBackground($background);
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setName($name);
        $this->setValue($value);
        $this->for =$forObject;
    }

    public function getParentName()
    {
        return $this->for;
    }
    public  function setParentName($obj)//объект
    {
        $this->for=$obj->getName();
    }
    public function convertToHTML(){//абстракциия из Input

    }
}