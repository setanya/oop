<?php
class Student  //объект
{
    private $name;      // свойства объекта
    private $course = 1; // свойства объекта
    //метод конструктор вызов автоматически
//    pubpablic function __construct($name, $course)
//        //всегда pubpablic function __construct()
//    {
//        $this->name = $name;
//        $this->course = $course;
//    }
    public function getName()
    {
        return $this->name;
    }
    public function getCourse()
    {
        return $this->course;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setCourse($course)
    {
        if($this->isCorrectCourse($course)){
            $this->course = $course;
        }
    }
    private  function isCorrectCourse($course)//только для этого метода private
    {
        if($course >=1 && $course <=5){
            return true;
        }else{
            return false;
        }
    }
}

$std = new Student();
$std->setName('Vova');
$std->setCourse();

$std2 = new Student();
$std2->setName('Masha');
$std2->setCourse(3);
//записали студентов в массив
$arr = [$std, $std2];

echo '<pre>';
print_r($arr);
echo '</pre>';
//      [0] => Student Object
//( [name] => VITYA
//[course] => 3 )
//    [1] => Student Object
//( [name] => Petya
//[course] => 1)

foreach ($arr as $ar){
    //echo 'Имя: '.$ar->name . '  курс : ' . $ar->course . '<br>';
    echo 'Имя: '.$ar->getName() . '  курс : ' . $ar->getCourse(). '<br>';
}//name: Petya курс : 1
echo 'Имя: '.$ar->getName() . '  курс : ' . $ar->getCourse(). '<br>';

