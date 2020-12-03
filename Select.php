<?php


class Select extends Control
{
    private $items=[];

    public function __construct($background,$width,$height,$items)
    {
        $this->setBackground($background);//родитель
        $this->setWidth($width);//родитель
        $this->setHeight($height);//родитель
        $this->items[] = $items ;//обращается к массиву и дописываем
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
        $this->items[] = $it;//$help->setItems(19);дописываем в массив
        return $this;//возращаемся чтобы можно было $help->setItems(19)->setItems(1)->setItems(9);
    }
//    public function convertToHTML()
//    {
//
//        $str = '';
//        $str .= '<select ';
//        $str .= 'name= "' . $this->getItems() . '" ';
//        $str .= 'style = "background: ' . $this->getBackground() . '; height: ' . $this->getHeight() . ' px; width:' . $this->getWidth() . ' px;"/>';
//        foreach ($this->items as $item){
//            $str .= '<option>'.$item.'<option>';
//        }
//        $str .= '<select>';
//        return $str;
//    }
}
