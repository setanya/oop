<?php


namespace classes\cart;


class Cart
{
    private $listCart = [];

    public function __construct(){//вызывается при создании объекта
        if(!empty ($_SESSION['cart'])){//если в сесии не пустая
            foreach ($_SESSION['cart'] as $item){//наполним масивом объект
                $this->listCart [] = unserialize($item);//($item строка) unserialize(на вход принимает строку)  разбивает на ключ / значение
            }//записываем элемент массива //восстанавливает изстроки в массив
        }
    }

    public function addToCart(Product $product)//только объект класса Product
    {//    передается класс Product и его объект
        $this->listCart[]=$product;
        $_SESSION['cart'][] = serialize($product);//сохраняем и в ссесии (создан подмассив) превращает в строку
    }//именно для записа в массив serialize (спец строка)//массив строк
    public function getCart()
    {
        echo '<div>';
        foreach ($this->listCart as $cart){
          echo '<p> Название :' .$cart->name.'</p>';
          echo '<p> Цена :' .$cart->price.'</p>';
          echo '<p> Количество :' .$cart->quantity.'</p><hr>';
        }
        echo '<br></div>';
    }
}