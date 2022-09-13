<?php
require_once __DIR__ . '/Product.php';

class FoodProduct extends Product
{
private $ingredients;
private $expiration;

public function __construct($name, $description, $price, $animal_types, $ingredients, $expiration) 
{
    parent::__construct($name, $description,$price,$animal_types);
    $this->setIngredients($ingredients);
    $this->setExpiration($expiration);
}


/**
 * Get the value of ingredients
 */
public function getIngredients()
{
    return $this->ingredients;
}

/**
 * Set the value of ingredients
 */
public function setIngredients($ingredients): self
{
    $this->ingredients = $ingredients;
    
    return $this;
}

}