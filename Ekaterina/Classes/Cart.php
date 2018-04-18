<?php

namespace Ekaterina\Classes;

class Cart
{
    protected $items = [];
	
    public function __construct()
    {
        //
    }
	
    public function add(Product $product)
    {
        $this->items[] = $product;
    }
	
    public function remove(Product $product)
    {
        $product_hash = spl_object_hash($product);
        foreach($this->items as $index => $item) {
            if (spl_object_hash($item) == $product_hash) {
                unset($this->items[$index]);
                break;
            }
        }
    }
	
    public function countItems()
    {
        return count($this->items);
    }
	
    public function addedItems()
    {
        return $this->items;
    }
	
    public function getItem($index)
    {
        $item = $this->items[$index];
        if (empty($item)) throw new InvalidArgumentException('Not exist');
        return $item;
    }
	
    public function sum()
    {
        // $acc - предыдущее вычисленное значение, при первом запуске равно 0
        return array_reduce($this->items, function ($acc, $elem)
        {
            return $acc + $elem->price;
        }
        , 0);
    }
}