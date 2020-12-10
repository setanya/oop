<?php
namespace menu;//подключили пространство имен

class MenuItem
{
    private $url;
    private $name;

    public function __construct($url, $name)
    {
        $this->url= $url;
        $this->name = $name;
    }
}


