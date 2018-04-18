<?php

namespace Ekaterina\Classes;

class TV extends Product
{
    public $diagonal;

    public function __construct($name, $diagonal, $price)
    {
        $this->name = $name;
        $this->diagonal = $diagonal;
        $this->price = $price;
    }
	
    public function toString()
    {
        return "В наличие имеется телевизор {$this->model} диагональю {$this->diagonal} дюймов по цене {$this->price} рублей.<br />";
    }
	
    public function getPrice()
    {
        return $this->price * 2;
    }
	
    public function getPriceText()
    {
        return 'Цена для продажи: ' . $this->getPrice() . ' рублей. <br />';
    }
}