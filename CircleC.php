<?php
require_once 'PointInterface.php';//подключение интерфейса

class CircleC extends Point implements PointInterface //implements подключение интерфейса
{
    private $r;//радиус

    public function __construct($x, $y, $r)
    {
        parent::__construct($x,$y);
        $this->r = $r;
    }
    public function show()
    {
        echo 'Radius r = '.$this->r;
    }
    public function area()
    {//реализация интерфейса
        return PointInterface::PI * $this->r * $this->r;//PointInterface::PI -это константа реализуется
    }        //константа задана в интерфейсе
    public function perimeter()
        //реализация интерфейса
    {
        return 2 * PointInterface::PI * $this->r;
    }

}