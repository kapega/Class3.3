<?php

namespace Ekaterina\Classes;

class Car extends Product
{
	public $region;
	
	public function __construct($name, $region, $price)
	{
		$this->name = $name;
		$this->region = $region;
		$this->price = $price;
	}
	
	public function toString()
	{
		return "Автомобиль {$this->model} доступен в регионе {$this->region} по цене {$this->price} рублей.<br>";
	}
	
	public function getPrice()
	{
		return round($this->price / 1.2);
	}
	
	public function getPriceText()
	{
		return 'Получи нереальную скидку сейчас и купи ' . $this->name . ' по цене ' . $this->getPrice() . ' рублей. <br>';
	}
}