<?php


namespace town;


class Country
{
    public $listTown = [];

    /*
     * Country constructor. вызываем сесию и присваиваем ей ['country']); помещаем массив из значений
     * в цикле перебираем массив пришедший в сесию и (unserialize)разбитый массив на ключ =>значение
     * записываем в массив объектов public $listTown = [];
     */
    public function __construct(){//вызывается при создании объекта
        if(!empty ($_SESSION['country'])){//если в сесии не пустая вызвали сесси
            foreach ($_SESSION['country'] as $list){//наполним масивом объект
                $this->listTown[] = unserialize($list);//($item строка) unserialize(на вход принимает строку)  разбивает на ключ / значение
            }//записываем элемент массива //восстанавливает изстроки в массив
        }
    }
    /*
      метод addTown принимает аргументом(объект $town класса Town) и записывает в массив  $this->listTown[] = $town;
    если стартовала сесия  то массив $_SESSION['country'][]  превращаем в строку  которую в конструкторе разбиваем на
    (unserialize) ключ =>значение
    */
    public function addTown(Town $town){//только объект класса Town
        //приходящий объект записываем в массив public $listTown = []
        $this->listTown[] = $town;
        $_SESSION['country'][] = serialize($town);//сохраняем и в ссесии (создан подмассив) превращает в строку
    }

    public function getCountryList()
    {
        if(!empty($this->listTown)){//если массив public $listTown = [] не пустой
            foreach($this->listTown as $list)// тогда в цикле перебираем массив public $listTown = [];
            {//выводим строку на странице
                echo '<p>Город '.$list->name.' был основан в '.$list->foundation.' , и имеет численность населения '.$list->population.' </p><hr>';
            }
        }else{//если массив public $listTown = [] пуст вывести строку
            echo 'Города пока не добавленны.';
        }
    }
}