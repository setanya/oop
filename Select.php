<?php


class Select extends Control
{
    private $items=[];

    public function __construct($background,$width,$height,$items)
    {
        $this->setBackground($background);//родитель
        $this->setWidth($width);//родитель
        $this->setHeight($height);//родитель
        //$this->setName($name);//1наследник$name, $value,
        //$this->setValue($value);//1наследник
        $this->items = $items ;
    }
    public function getItems()
    {//не принимает ничего в качестве параметра и возвращает значение поля items
        //return  array($this->items);
        return  $this->items;
    }

    /**
     * @param mixed $it
     */
    public function setItems($it)
    {
            $this->items[] = $it;//$help->setItems(19);
        return $this;
    }
//    public function setItems($i)
//    {
//        $this->items[] = array_push($this->items,$i);
//        return $this;
//    }
}
