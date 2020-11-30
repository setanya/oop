<?php
//родитель
class Parents
{
    //public $prop ='это родитель';
    public $prop;//закрытое свойство родителя
    protected $x;
    protected $y;
    public function __construct($pr, $x,$y)
    {
        if(is_null($this->prop)){//перезаписываем если  null
            $this->prop = $pr;
            $this->x = $x;
            $this->y = $y;
        }
    }
    public function getProp()
    {
        return $this->prop;
   }
   public function snow()
   {
       return 'HELLO !';
   }
}
// наследник
class Child extends Parents
{
    //public $prop ='это ребёнок';
    //protected $p = '1 ребёнок';
    public $z;

    public function __construct($pr, $x, $y, $z)//вызываем конструктор наследник
    {
        parent::__construct($pr, $x, $y);//вызываем конструктор родителя
        //$this->prop =" class Child". $pr;
        $this->z = $z;
    }
    public function getProp()
    {
        return "выводим свойство родителя". $this->prop;
    }
    public function getParentShow()
    {//вызываем function snow() родителя
        return parent::snow();// или $this->snow();
    }
}

//$obj = new Parents('Родитель ');
//echo '1 '. $obj->getProp().'<br>';

$obj2 = new Child('123', 1 ,2,3);//вызывает конструктор родителя
//echo '2 '. $obj2->getProp().'<br>';
var_dump($obj2);
echo '<br>'.$obj2->getParentShow().'<br>';





//class Child2 extends Child
//{
//  public function getP()
/// {
//  return "class Child свойство первого ребёнка". $this->p;
// }
// public function getParentProp(){
//return 'class Child2 второй ребенок - со свойством родителя'.$this->prop;
//}
//}



//$obj3 = new Child2();
//echo '3 '. $obj3->getP().'<br>';
//echo '4 '. $obj3->getParentProp().'<br>';