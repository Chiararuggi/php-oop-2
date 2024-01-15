<?php

class product
{
    public $name;
    public $description;
    public $category;
    public $price;

    public function __construct($name, $description, array $category, $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->category = $category;
        $this->price = $price;
    }

    public function getProduct()
    {
        return $this->name;
    }

}