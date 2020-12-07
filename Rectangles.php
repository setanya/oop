<?php
//require_once 'PointInterface.php';//подключение интерфейса

class Rectangles extends Point implements PointInterface
{
    private $w;//
    private $h;//
    public function __construct($x,$y,$w, $h)
    {
        parent::__construct($w, $h);
        $this->w = $w;
        $this->h = $h;
    }
    public function show()
    {
        echo 'h = '.$this->h.'w = '.$this->w;
    }
    public function area(){
        return $this->w * $this->h;
    }
    public function perimeter()
    {
        return 2*($this->w + $this->h);
    }
}