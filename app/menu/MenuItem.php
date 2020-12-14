<?php
namespace app\menu;//подключили пространство имен

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


