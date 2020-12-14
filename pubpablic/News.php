<?php
//namespace  pubpablic\pub;//подключили пространство имен   \pubpablic(папка)\

class News extends Publication //наследник abstract class Publication
{
    private $today ;//содержать дату публикации

    public function __construct($title, $description, $today){
        $this->setTitle($title);
        $this->setDescription($description);
        $this->today = $today;
    }

    public function show()//метод без реализации   abstract function show(); в abstract class Publication
//реализуем метод
    {
       $this->today = date("j F , Y");
        $block = '';
        $block .= '<div style="border: 1px solid red; margin-bottom: 20px; width: 500px">';
        $block .= '<h3 style="color: crimson">'.$this->getTitle().'</h3>';
        $block .= '<h4>'.$this->getDescription().'</h4>';
        $block .= '<b>Новость опубликованна : '.$this->today.'</b>';
        $block .= '</div>';
        return $block;
    }
}



