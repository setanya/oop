<?php

// Создание класса Us
class Us {
    // Создание приватного свойства
    private $name;

    // Конструктор класса
    public function __construct ($name) {
        $this -> name = $name;
    }

    // Магический метод для изменения свойства
    public function __set ($name, $value) {
        $this -> $name = $value;
        echo  $name . ' теперь равно ' . $value . '</br>';
    }

    // Магический метод для получения
    public function __get ($name) {
        return $this -> $name;
    }
}



$users = new Us('Дима');

echo $users -> name . '</br>';//вывели имя установленное в конструкторе
$users -> name = 'Вася';//переопределили  имя  function __set на
echo $users -> name;//return $this -> $name; возвращает новое установленое  __set  значение
echo '<br>';
class Car {

    function __construct() {
        echo 'Конструктор,  function __construct()  вызывается автоматически во время создания экземпляра класса <br/>';
    }

    function __destruct() {
        echo 'Деструктор, вызывается автоматически во время уничтожения экземпляра класса <br/>';
    }

    function __call($name, $arguments) {
        // значение $name регистрозависимо
        echo "Вызов метода '$name' " . implode(', ', $arguments). "<br/>";
    }

    static function __callStatic($name, $arguments) {
        echo "Вызов статического метода '$name' " . implode(', ', $arguments). "<br/>";
    }

    function __get($param) {
        echo "Выполнить из за чтения данных из недоступных свойств: $param <br/>";
    }

    function __set($name, $value) {
        echo "Выполнить метод из за записи данных в недоступные свойства: $name -> $value <br/>";
        return $this->{$name} = $value;
    }

    function __isset($name) {
        echo "Установлено ли '$name'? <br/>";
        // return isset($this->data[$name]);
    }

    function __unset($name) {
        echo "Уничтожение '$name' <br/>";
        // unset($this->data[$name]);
    }

    function __sleep() {
        echo "Объект подвергается сериализации при помощи функции serialize <br/>";
    }

    // function __wakeup() {
    // echo "Объект подвергается восстановлении при помощи функции unserialize <br/>";
    // }

    function __toString() {
        return "Мы вызвали " . __METHOD__ . "<br/>";
    }

    function __invoke($vars) {
        return "Нельзя вызывать класс как функцию <br/>";
    }

    function __set_state($an_array) {
        return print_r($an_array) . "<br/>";
    }

    function __clone()	{
        echo 'Вызывается при клонировании объекта <br/>';
    }

    function __debugInfo() {
        echo 'Вызывается при var_dump <br/>';
    }

}

$car = new Car();	// __construct
$car->runTest('в контексте объекта');	// __call
car::runTest('в статическом контексте объекта'); // __callStatic
$car->asdfasdf;	// __get
$car->asdfasdf = 'test';	// __set
isset($car->a); // __isset
isset($car->b); // __unset
$a = serialize($car); // __sleep
// unserialize($a); // __wakeup
echo $car; // __toString
echo $car('Пиу'); // __invoke
eval('$b = ' . var_export($car, true) . ';');
var_dump($b); // __set_state
$car2 = clone $car; // __clone
var_dump($car2); // __debugInfo




