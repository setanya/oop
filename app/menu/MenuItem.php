<?php
namespace app\menu;//подключили пространство имен    app(папка)\menu(папка)\

class MenuItem
{
    public $url;
    public $name;

    public function __construct($url, $name)
    {
        $this->url= $url;
        $this->name = $name;
    }
}


