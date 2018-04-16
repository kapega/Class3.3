<?php

namespace Ekaterina\Classes;

use Ekaterina\Interfaces;

class Product extends ClassWithPrice implements HasAmount // Товар
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
		$str = "Стоимость билета по направлению <strong>{$this->name}</strong> на данный момент равна ";
		if ($this->amount < 10)
		{
			return $str . round($this->price + ($this->price * 0.5)) . '.<br>';
		}
		elseif ($this->amount > 90)
		{
			return $str . round($this->price - ($this->price * 0.5)) . '.<br>';
		}
		else
		{
			return $str . $this->price . '.<br>';
		}
	}
}
