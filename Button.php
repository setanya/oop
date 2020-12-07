<?php


class Button extends Input
{
    private $isSubmit;
    //родитель Control -> наследник Input -> наследник Button//
    public function __construct($background, $width, $height, $name, $value, $isSubmit)
    {
        $this->setBackground($background);//родитель
        $this->setWidth($width);//родитель
        $this->setHeight($height);//родитель
        $this->setName($name);//1наследник
        $this->setValue($value);//1наследник
        $this->isSubmit = $isSubmit;//2наследник
    }
    /**
     * @return mixed
     */
    public function getSubmitState()
    {
        return $this->isSubmit;
    }

    /**
     * @param mixed $isSubmit
     */
    public function setSubmitState($isSubmit = true)
    {
        $this->isSubmit = $isSubmit;
    }
    /**03 12 2020**************************/
    public function convertToHTML()
    {
        $type = $this->isSubmit ? 'submit': 'button';//если submit = да $type=submit
        $str = '';
        $str .='<input type ="'.$type.'" ';
        $str .='name= "'.$this->getName().'" ';
        $str .= 'value="'.$this->getValue().'" ';
        $str .='style = "background: '.$this->getBackground().'; height: '.$this->getHeight().'px; width:'.$this->getWidth().'px;"/>';
        return $str;
        //return '<input type ="'.$type.'" name= "'.$this->getName().'" value="'.$this->getValue().'" style = "background: '.$this->getBackground().'; height: '.$this->getHeight().' px; width:'.$this->getWidth().' px;"/>';
    }
}