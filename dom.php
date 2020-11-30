<?php
class Car
{
    public $nissan ='Нисан';
    public $color;
}
$cars = new Car();
echo 'Модель машины : '.$cars->nissan. '<br>'.'  цвет : '.$cars->color = 'белый';
echo '<br>';
echo 'Модель машины : '.$cars->nissan = 'Volvo'. '<br>'.'  цвет : '.$cars->color = 'металик серебристый';
/*-------------------------------------------------------------------------------*/
echo '<br>';

class Rectangle   //объект
{// свойства объекта
    private $height;
    private $width;

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }
    public function setHeight($height)
    {
        $this->height = $height;
    }
}
$rezult = new Rectangle();
$rezult->setWidth(15);
$rezult->setHeight(2);

echo "Длинна :". $rezult->getHeight().' см'.'<br>';
echo "Ширина :" .$rezult->getWidth().' см'.'<br>';

echo 'Площадь прямоугольника = '. $rezult->getHeight() * $rezult->getWidth().' см^2'.'<br>';
echo '<br>';
echo 'Периметр прямоугольника = '. 2*($rezult->getHeight() + $rezult->getWidth()).' см'.'<br>' ;
echo '<br>';
/*Домшняя работа з/п и рабочие*/
class Employer //объект
{
    private $name;
    private $age;
    private $salary;
    public $arrSalary = [];

    public function __construct($n,$a)//обязательно ждёт число
    {
        $this->name = $n;
        $this->age = $a;
    }
    //МЕТОД ДЛЯ ПРОВЕРКИ по возрасту
    public function getAge()
    {
        if($this->age >=18 && $this->age <=60){
            return $this->age;
        }elseif($this->age <18){
            return 'Извините вам нет 18';
        }elseif ($this->age >60){
            return 'Извините вам более 60 лет';
        }
    }
//-----
    public function getName()
    {
        if(strip_tags($this->name)){//удалим теги ненужные проверка
            return $this->name;//возвращаем значение
        }
    }
//--------
    public function getSalary()
    {
        return $this->salary;
    }
    public function setSalary($salary)
    {
      $this->salary= $salary;

    }
    public function getArrSalary ()//возвращаем сумму массива
    {
        //$this->getSalary();
        return array_sum($this->arrSalary);
    }
    public function setArrSalary($sal)//устанавливаем $rez->setSalary(30); и записываем в массив
    {
        $this->arrSalary[]=$sal;
    }

}
$rez = new Employer('<brfff>Иванов И.И.', '20');//так как конструктор передаем значения
$rez->setSalary(30);

echo 'Фамилия: '.$rez->getName()."<br>Возраст: ".$rez->getAge()."<br> Зарплата".$rez->getSalary().'<br>';

$rez = new Employer('Петров К.И.', '60');//так как конструктор передаем значения
$rez->setSalary(10);
echo 'Фамилия: '.$rez->getName()."<br>Возраст: ".$rez->getAge()."<br> Зарплата".$rez->getSalary().'<br>';

$rez = new Employer('Сидоров С.С.', '42');//так как конструктор передаем значения
$rez->setSalary(5);
echo 'Фамилия: '.$rez->getName()."<br>Возраст: ".$rez->getAge()."<br> Зарплата".$rez->getSalary().'<br>';
$rez->setArrSalary(30);
$rez->setArrSalary(10);
$rez->setArrSalary(5);

echo 'Общая зарплата'.$rez->getArrSalary();


