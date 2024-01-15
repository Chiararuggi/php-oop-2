<?php

require_once __DIR__ . '/Category.php';

class product
{
    public $name;
    public $description;
    public $category;
    public $price;

    public function __construct($name, $description, category $category, $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->category = $category;
        $this->price = $price;
    }
}