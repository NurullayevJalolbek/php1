<?php
declare(strict_types=1);

class Product {
    
    public string $name;
    public float $price;
    public function getInfo(): string
    {
        return "Mahsulot: {$this->name}, Narxi: {$this->price} so'm";
    }
}

$product1 = new Product();

$product1->name = 'Keyboard';
$product1->price = 20;
echo $product1->getInfo() . '<br>';

$product2 = new Product();

$product2->name = 'Mouse';
$product2->price = 10;
echo $product2->getInfo() . '<br>';
