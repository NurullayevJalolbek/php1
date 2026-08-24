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



class User 
{
    public function __construct(private string $name, private readonly string $email, private int $age)
    {
    }

    public function isAdult(): bool
    {
        if ($this->age >= 18) {
            return true;
        } else {
            return false;
        }
    } 
}

$user1 = new User('Sardor', 'sardor007@gmail.com', 16);

echo $user1->isAdult() . '<br>';

$user2 = new User('Ali', 'ali2004@gmail.com', 22);

echo $user2->isAdult() . '<br>';



class Car 
{
    private int $speed = 0;
    
    public function __construct(private string $brand, private string $model)
    {
    }

    public function accelerate($km): string
    {
        $this->speed += $km;
        return "Accelerated to [{$km} km/h]. Current speed: {$this->speed} km/h";
    }

    public function brake($km): string
    {
        $this->speed -= $km;
        if ($this->speed <= 0) {
            $this->speed = 0; // Tezlik 0 dan tushib ketmasligi uchun uni 0 ga tenglab qo'yish kerak:

            return "The car {$this->brand} ({$this->model}) is fully stoped. <br>";
        }
        return "Braked to [{$km} km/h]. Current speed: {$this->speed} km/h";
    }

}

$car1 = new Car('Porsche', 'Carrera 911');

echo $car1->accelerate(100) . '<br>';
echo $car1->brake(35) . '<br>';  
echo $car1->brake(70) . '<br>';  




