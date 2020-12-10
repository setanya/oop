<?php


trait Hello
{

    public function __construct()
    {
        echo  'вызвали конструктор  trait Hello === HELLO trait!';
    }

    public function run()
    {
        //echo 'function run() в trait Hello  this is ruh';
        echo $this->snow().' это часть trait Hello == соединили class Example + trait Hello';
    }
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return'Нельзя так делать';
    }

    public function __get($name)
    {
        // TODO: Implement __get() method.
        return 'error';
    }

}