<?php
class Cars
{
    private $type;

    public function __construct($t)//  $t=0 значение по умолчанию
    {//конструктор нужен если надо задать значения по умолчанию
        $this->type = $t;
    }
    //МЕТОД ДЛЯ ПРОВЕРКИ
    public function getCateory()
    {//если значение в $type пришло равное 1
        if($this->type == 1){
            return 'B';//вернуть значни 'B'
        }elseif ($this->type == 2){//если значение в $type пришло равное 2
            return 'C';//вернуть значни 'C'
        }else{//если значение в $type пришло не 1 или 2
            return "ВЫ указали неверный тип";//вернуть текст ошибки
        }
    }
}

$obj = new Cars(2);//обязательно для передачи значения в pubpablic function __construct($t)

echo 'Права категории '. $obj->getCateory();
echo '<br>';

class Circle
{
    private $radius;

    public function __construct($r)//обязательно ждёт число
    {
        $this->radius=$r;
    }
//устанавливаем
    public function setRadius($radius)//переопределит значение в конструкторе
    {
        $this->radius = $radius;
    }
    //возвращаем значение
    public function getRadius()
    {
        return $this->radius;
    }
    public function getArea(){
        return  3.14 *($this->getRadius() * $this->getRadius());
    }
}
$rezult = new Circle(2);// $rezult->setRadius(20);
$rezult->setRadius(20);//переопределим значение в конструкторе
echo 'Окружность = '. $rezult->getArea();
echo '<br>';
/*----------------------------------------------------------------------------*/
//class Country
//{
//    pubpablic $arCountry = [];//создали массив
//
//    pubpablic function setCountry($c)//private
//    {//дописать в конец массива
//        $this->arCountry[] = $c;//устанавливаем значение $arCountry[] =$c
//    }
//    pubpablic function getArCountry()
//    {//возвращаем значение в $arCountry = []
//        return $this->arCountry[];
//    }
//}
//$country = new Country();
//echo '<pre>';
//echo print_r($country->getArCountry());
//echo '</pre>';
//
//$country->setCountry('Беларусь');
//
//echo '<pre>';
//echo print_r($country->getArCountry());
//echo '</pre>';
//
//$country->arCountry[] = 'Аргентина';// pubpablic $arCountry = [];
//echo '<pre>';
//echo print_r($country->arCountry);
//echo '</pre>';
class Country
{
    public $arCountry =[];

    public function setCountry($c)
    {
        $this->arCountry[] = $c;
    }
    /**
     *
     * @return array
     */
    public function getArCountry()
    {
        return $this->arCountry;
    }
}
$country = new Country();
$country->arCountry[] = 'Аргентина';// pubpablic $arCountry = [];
$country->setCountry('Беларусь');
$country->setCountry('Норвегия');
echo print_r($country->getArCountry());
echo '<pre>';
echo print_r($country->arCountry);
echo '</pre>';