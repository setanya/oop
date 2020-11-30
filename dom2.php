<?php
/*Домшняя работа з/п и рабочие*/
class Employer //объект
{
    private $name;
    private $age;
    private $salary;
    //public $arrSalary = [];

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

}


$rez = new Employer('<brfff>Иванов И.И.', '20');//так как конструктор передаем значения
$rez->setSalary(30);
;

echo 'Фамилия: '.$rez->getName()."<br>Возраст: ".$rez->getAge()."<br> Зарплата".$rez->getSalary().'<br>';

$rez1 = new Employer('Петров К.И.', '60');//так как конструктор передаем значения
$rez1->setSalary(10);

echo 'Фамилия: '.$rez1->getName()."<br>Возраст: ".$rez1->getAge()."<br> Зарплата".$rez1->getSalary().'<br>';

$rez2 = new Employer('Сидоров С.С.', '42');//так как конструктор передаем значения
$rez2->setSalary(5);

echo 'Фамилия: '.$rez2->getName()."<br>Возраст: ".$rez2->getAge()."<br> Зарплата".$rez2->getSalary().'<br>';

echo 'Общая зарплата'.($rez->getSalary()+$rez1->getSalary()+$rez2->getSalary());


