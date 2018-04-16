<?php

namespace Ekaterina\Classes;

use Ekaterina\Interfaces;

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
		return 'Получи нереальную скидку сейчас и купи ' . $this->name . ' по цене ' . round($this->price / 1.2) . ' рублей. <br>';
	}
}