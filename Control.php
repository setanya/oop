<?php


class Control
{
    private $background;
    private $width;
    private $height;

    /**
     * @return mixed
     */
    public function getBackground()
    {
        return $this->background;
    }
    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $background
     */
    public function setBackground($background)
    {
        $this->background = $background;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

}