<?php


class Text extends Input
{
    private $placeholder;
//родитель Control -> наследник Input -> наследник Text
    public function __construct($background, $width, $height, $name, $value, $placeholder)
    {
        $this->setBackground($background);//родитель
        $this->setWidth($width);//родитель
        $this->setHeight($height);//родитель
        $this->setName($name);//1наследник
        $this->setValue($value);//1наследник
        $this->placeholder = $placeholder;
    }
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    /**
     * @param mixed $placeholder
     */
    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
    }
    public function convertToHTML()
    {
        $str = '';
        $str .= '<input type ="text" ';
        $str .= 'name= "' . $this->getName() . '" ';
        $str .= 'value="' . $this->getValue() . '" ';
        $str .= 'placeholder="'.$this->getPlaceholder().'" ';
        $str .= 'style = "background: ' . $this->getBackground() . '; height: ' . $this->getHeight() . 'px; width:' . $this->getWidth() . 'px;"/>';
        return $str;
    }
}
