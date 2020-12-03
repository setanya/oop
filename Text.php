<?php


class Text extends Input
{
    private $placeholder;
//родитель Control -> наследник Input -> наследник Text
    public function __construct($background,$width,$height, $name, $value, $placeholder)
    {
        $this->setBackground($background);
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setName($name);
        $this->setValue($value);
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
}
;
 ;