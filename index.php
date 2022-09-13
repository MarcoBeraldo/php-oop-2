<?php
include_once __DIR__ . '/models/shopping/Cart.php';
include_once __DIR__ . '/models/products/FoodProduct.php';
include_once __DIR__ . '/models/customers/Custmoer.php';
include_once __DIR__ . '/models/shipping/Address.php';
include_once __DIR__ . '/models/shopping/CreditCard.php';

$prodotto = new Product('scatoletta', 'cibo per gatti', 3.50, ['carne', 'carote', 'additivi'], "23-09-2022");

$cliente = new Customer();

$cliente->addToCart($prodotto);






























?>