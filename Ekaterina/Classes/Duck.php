<?php

namespace Ekaterina\Classes;

class Duck extends Product implements \Ekaterina\Interfaces\Duckable
{
    public $color;
    public $size;
    
    public function __construct($name, $color, $size)
    {
        $this->name = $name;
        $this->color = $color;
        $this->size = $size;
    }
    
    public function toString()
    {
        return "Это {$this->name}, цвет {$this->color} и размер {$this->size}.<br>";
    }
    
    public function checkUgly()
    {
        if ($this->color == 'белый' && $this->size == 'big') {
            return 'Это же Гадкий утёнок!<br>';
        }
        else {
            return "Этот {$this->color} утёнок нормально выглядит. <br>";
        }
    }
}