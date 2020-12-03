<?php
class User
{
    private $name;//свойство
    private  $age;//свойство
    //const LOGIN = 'admin';//константа
    //метод "конструктор" вызов автоматически
    //private $name;//свойство
    //private  $age;//свойство
    //только public
//    public function __construct($n, $a)
//     {
//       $this->age = $a;//свойство имени равно значению аргументу функции
//       $this->name = $n;//передаем значение из аргумента
//     }
     public function getAge()//private  $age;
     {
         //self::LOGIN;//обращеник к константе
         return $this->age;
     }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        if($age >18 && $age <60){
            $this->age = $age;
        }
    }
    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
//вывод константы
//echo 'My login is'.User::LOGIN;

$man = new User;//без function __construct($n, $a)
$man->setAge(25);
$man->setName('Vova');

//$man = new User('Vasya','20');//объект
//$man->name = 'Вася';//присваем значение имени
//$man->age = '18';//присваем значение возраст
var_dump($man);
echo '<br>';
$man2 = new User('Katya', '25');
//$man2->name = 'Петя';
//$man2->age = '30';
//var_dump($man2);
echo '<br>';
//echo 'My name is   '. $man->name .'  age '. $man->age. '  yeas old';//public $age
//private  $age;
echo 'My name is   '. $man->getName() .'  age '. $man->getAge(). '  yeas old';
echo '<br>';
$man2->setAge(25);
$man2->setName('Katya');
echo 'My name is   '. $man2->getName() .'  age '. $man2->getAge(). '  yeas old';