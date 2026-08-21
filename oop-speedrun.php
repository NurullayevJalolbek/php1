<?php 
declare(strict_types=1);

/* Блок 4: Твоя домашка на сегодня
Твоя задача по плану — создать класс Car.

План действий для кода:

Напиши class Car { ... }

Внутри создай свойства: public $brand;, public $model; и т.д. (Слово public мы разберем во 2-й день, пока просто ставь его перед свойствами).

Напиши метод public function __construct(...), который примет данные и присвоит их через $this->brand = ...

Напиши пару методов (startEngine и accelerate), которые будут просто делать echo какого-нибудь текста, например: "Двигатель машины BMW запущен!".

В самом низу файла создай три объекта через new Car(...) и вызови их методы.

Концепция чертежа и готовых деталей уложилась в голове? Готов попробовать накидать базовый код этого класса в VS Code? */

class Car {
    public string $brand;
    public string $model;
    
    public function __construct(string $brand, string $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function startEngine(): string 
    {
        return "Engine of the car {$this->brand} {$this->model} is started";
    }

}

$car1 = new Car('Porsche', 'Carrera 911');
$car2 = new Car('Chevrolet', 'Cobalt Turbo');

echo $car1->startEngine() . '<br>';
echo $car2->model. '<br>';