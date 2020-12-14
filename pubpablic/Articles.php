<?php
namespace  pubpablic;//подключили пространство имен    \pubpablic(папка)\

class Articles extends Publication //наследник abstract class Publication
{
    private $aut;//содержать Дата окончания публикации

    public function __construct($title, $description, $aut){
        $this->setTitle($title);
        $this->setDescription($description);
        $this->aut = $aut;
    }

    public function show() //метод без реализации   abstract function show(); в abstract class Publicationnamespace app\pubpablic;
    {
       //return 'Автор :'.$this->aut.'<br>';
        $block = '';
        $block .= '<div style="border: 1px dotted #00d9ff; margin-bottom: 20px; width: 500px">';
        $block .= '<h3 style="color: blue">'.$this->getTitle().'</h3>';
        $block .= '<h4>'.$this->getDescription().'</h4>';
        $block .= '<b>Автор статьи : ' .$this->aut.'</b>';
        $block .= '</div>';
        return $block;
    }

}
