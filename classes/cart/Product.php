<?php


namespace classes\cart;


class Product
{
    public $name;
    public $price;
    public $quantity;

    /**
     * Product constructor.
     * @param $name
     * @param $price
     * @param $quantity
     */
    public function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }


}