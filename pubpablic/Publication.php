<?php
//namespace pubpablic\pub;//подключили пространство имен  (pubpablic(папка)\имя )


abstract class Publication
{
    private $title;
    private $description;

//    pubpablic function __construct($tit, $desc)
//    {
//        $this->title = $tit;
//        $this->description = $desc;
//    }


    /**возвращаем значение $title  */

    public function getTitle()
    {
        return $this->title;
    }

    /** возвращаем значение $description */

    public function getDescription()
    {
        return $this->description;
    }

    /** устанавливаем значение $title  */

    public function setTitle($title)
    {
        $this->title = $title;
    }

    /** устанавливаем значение $description */

    public function setDescription($description)
    {
        $this->description = $description;
    }

    //метод без реализации
     abstract function show();


}