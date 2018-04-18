<?php
namespace Ekaterina\Classes;

class Order
{
    private $cart;
	
	public function __construct(Cart $cart)
	{
		$this->cart = $cart;
	}
	
	public function orderDescription($cart_index)
	{
		$item = $this->cart->getItem($cart_index);
		$i = $cart_index + 1;
		return "<strong>Товар [$i]:</strong> {$item->name}, <strong>цена:</strong> {$item->getPrice()} рублей";
	}
		
	public function getOrder()
	{
		foreach ($this->cart->addedItems() as $key => $product) 
		{
			echo '<p>', $this->orderDescription($key), '</p>';
		}
	}
}
