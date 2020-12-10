<?php


class Example
{
    use Hello;//подключаем trait можно обращаться ко всем методам

    public function showRun(){
        echo 'выводится метод класса example';

    }
    public function snow()
    {
        return 'это часть из class Example ';
    }

}