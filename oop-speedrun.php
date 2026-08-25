<?php 
use php1\User;
declare(strict_types=1);

/* class Car {
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

echo '<br>';

class Vehicle 
{
    public function __construct(protected string $brand)
    {

    }

}

class Bus extends Vehicle 
{
    public function honk(): string 
    {
        return "Bus [{$this->brand}] honks: beep <br>";
    }
}


$bus1 = new Bus("Yutong");
echo $bus1->honk();
 
abstract class Worker
{
    const WORKING_HOURS = 8;

    public function __construct(protected string $name) 
    {
    }

    abstract public function calculateSalary() :float;
} 

class Programmer extends Worker 
{
    private float $hourlyRate = 15.5;
    public function calculateSalary(): float
    {
        return self::WORKING_HOURS * $this->hourlyRate;       
    }
}

$coder = new Programmer("Bilol");
echo $coder->calculateSalary() . '<br>';
*/

/* interface PaymentSystem {
    public function getStatus(int|float $amount): string;
}

trait SetHistory
{
    public function getSystemLog(string $message): void
    {
        echo "SYSTEM LOG: {$message} <br>";
    }
}

class Click implements PaymentSystem {
    use SetHistory;
    public function __construct(public readonly string $transactionId) 
    {
    }
    
    public function getStatus(int|float $amount): string
    {   
       
       $this->getSystemLog("Transaction {$this->transactionId} is started.");
       return "Succesful payment. <br>";
    }
}

$click = new Click('345');

echo $click->getStatus(250); */

/* interface HardwareMonitorInterface 
{
    public function checkStatus(int $temperature): string;
}

trait AlertFormatter 
{
    public function formatAlert(string $hardwareName, string $message): string
    {
        return "ALERT - {$hardwareName}: {$message}";
    }
}

class GpuMonitor implements HardwareMonitorInterface 
{
    use AlertFormatter;

    public function __construct(public readonly string $gpuModel) 
    {
    }

    public function checkStatus(int $temperature): string 
    {
        if ($temperature > 85) {
            return $this->formatAlert($this->gpuModel, "Critical overheating!");
        }

        return "Temperature of videocart {$this->gpuModel} is normal. <br>"; 
    }

}

$model1 = new GpuMonitor("NVIDIA GeForce MX250");
echo $model1->checkStatus(86) . '<br>';

$model2 = new GpuMonitor("NVIDIA GeForce GTX 970");
echo $model2->checkStatus(70) . '<br>'; */

/* 
interface Deliverable 
{
    public function startDelivery(string $cityName): void;
}

trait Trackable 
{
    public function trackLog(string $text): void
    {
        echo "[System tracking]: {$text} <br>";
    }
}

abstract class BaseDelivery 
{
    public static int $deliveryCount = 0;

    public function __construct(public string $itemId) 
    {
        self::$deliveryCount++;
    }

    

    
}

class DroneDelivery extends BaseDelivery implements Deliverable
{   
    use Trackable;
    public function startDelivery(string $cityName): void
    {
        $this->trackLog("Item {$this->itemId} is set <br>");
        echo "Drone sent to {$cityName} <br>";
    }
}

$drone1 = new DroneDelivery('2223');
$drone1->startDelivery('Tashkent');


$drone2 = new DroneDelivery('112');
$drone2->startDelivery('Samarkand');

echo BaseDelivery::$deliveryCount; */



spl