<?php
namespace Ekaterina\Classes;

class Order
{
    private $order;
	
	public function __construct(Cart $cart)
	{
	$this->order = $cart;
	}
		
	public function orderDescription()
	{
		echo "<strong>Товар:</strong> {$this->name} <strong>цена:</strong> {$this->getPrice()} рублей";
	}
		
    public function getOrder()
	{
		  $i = 1;
		  foreach ($this->order->items as $key=>$product) 
		  {
					echo "<p>Товар: {$i}</p>";

					$this->order[$key]->orderDescription();
					$i++;
					echo '<br>';
		  } 
	}
}