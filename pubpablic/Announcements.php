<?php
//namespace pubpablic\pub;//подключили пространство имен   \pubpablic(папка)\

class Announcements extends Publication  //наследник abstract class Publication
{
    private $endDay;

    public function __construct($title, $description, $day){
        $this->setTitle($title);
        $this->setDescription($description);
        $this->endDay = $day;
    }

    public function show() //метод без реализации   abstract function show(); в abstract class Publication
    {
        //return 'Дата окончания публикации : ' . $this->endDay;
        $block = '';
        $block .= '<div style="border: 1px solid slateblue; margin-bottom: 20px; width: 500px">';
        $block .= '<h3 style="color: mediumspringgreen">'.$this->getTitle().'</h3>';
        $block .= '<h4>'.$this->getDescription().'</h4>';
        $block .= '<b>Дата окончания публикации : ' .$this->endDay.'</b>';
        $block .= '</div>';
        return $block;
    }
}