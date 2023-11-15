<?php

require_once "data/product.php";

$product = new Product("TV", 1500000);

// tampilkan product get name
echo $product-> getName() . PHP_EOL;
// tampilkan product get price
echo $product-> getPrice() . PHP_EOL;
$dummy = new ProductDummy("Dummy", 1500000);
$dummy->info();