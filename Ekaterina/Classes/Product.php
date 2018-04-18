<?php

namespace Ekaterina\Classes;

class Product extends ClassWithPrice implements \Ekaterina\Interfaces\HasAmount // Товар
{
	public $amount;
	
	public function __construct($name, $amount, $price)
	{
		$this->name = $name;
		$this->amount = $amount;
		$this->price = $price;
	}
	
	public function toString()
	{
		return "Это {$this->name}, {$this->amount} штук по цене {$this->price}.<br>";
	}
	
	public function getAmount()
	{
		return $this->amount;
	}
	
	public function getPrice()
	{
		if ($this->amount < 10)
		{
			return round($this->price + ($this->price * 0.5));
		}
		elseif ($this->amount > 90)
		{
			return round($this->price - ($this->price * 0.5));
		}
		else
		{
			return $this->price;
		}
	}
	
	public function getPriceText()
	{
		$str = "Стоимость билета по направлению <strong>{$this->name}</strong> на данный момент равна ";
		return $str . $this->getPrice() . '.<br>';
	}
}
