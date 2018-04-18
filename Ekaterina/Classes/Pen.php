<?php

namespace Ekaterina\Classes;

class Pen extends Product
{
    public $color;
    public $amount;

    public function __construct($name, $color, $amount)
    {
        $this->name = $name;
        $this->color = $color;
        $this->amount = $amount;
    }
	
    public function toString()
    {
        return "Нужно купить {$this->amount} ручки {$this->color} цвета.<br />";
    }
	
    public function getAmount()
    {
        if ($this->amount < 10) {
            return 'Нужно купить ручек <strong>' . $this->name . '</strong> в количестве 100 штук.<br />';
        }
        else {
            return 'Ручек <strong>' . $this->name . '</strong> покупать не нужно.<br />';
        }
    }
}
