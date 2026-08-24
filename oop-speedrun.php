<?php 
declare(strict_types=1);

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

class Database {
    public function __construct(public string $host, public string  $username)
    {
        echo "Connection to {$this->host} from user {$this->username} is established. <br>";    
    }

    public function __destruct()
    {
        echo "Connection with server {$this->host} is lost. <br>";
    }

}

$db1 = new Database("host1", "bill07");
unset($db1);

$db2 = new Database("host2", "ss23");


class BankAccount 
{
    private float $balance = 0.0;

    public function deposit(int $amount): void
    {
        $this->balance += $amount;
        echo "Success! Your balance is {$this->balance} <br>";
    }

    public function withdraw(int $amount): void
    {
        if ($amount > $this->balance) {
            throw new Exception("insufficient funds");
        } else {
            $this->balance -= $amount;
            echo "Success! <br>";
        }
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}

$account1 = new BankAccount();
$account1->deposit(1000);

try {
    $account1->withdraw(1500);
} catch (Exception $e) {
    echo $e->getMessage();
}

echo $account1->getBalance(); 