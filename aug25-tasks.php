<?php
declare(strict_types=1);

class Student
{
    private ?int $age = null;

    public function __construct(private readonly string $studentId, private string $name) 
    {
    } 

    public function setAge(int $age): void
    {
        if ($age < 7 || $age > 60) {
            throw new Exception("Yaroqsiz yosh kiritildi. <br>");
        } else {
             $this->age = $age;
        }
    }

    public function getInfo(): string
    {   
        return "ID: [{$this->studentId}], Talaba: [{$this->name}], Yoshi: [{$this->age}]. <br>";
    }
}

$student1 = new Student('235363', 'Amir');

$student2 = new Student('47900', 'Samir');

try {
    $student1->setAge(3);
} catch (Exception $e) {
    echo $e->getMessage();
}

try {
    $student2->setAge(21);
} catch (Exception $e) {
    echo $e->getMessage();
}

echo $student1->getInfo();
echo $student2->getInfo();

//2

class BankAccount 
{
    public function __construct(public readonly string $accountNumber, private string $ownerName, private ?float $balance = 0)
    {

    }

    public function deposit(float $amount): void
    {
        if ($amount <= 0) {
           echo "Deposit 0 dan katta bolishi kerak! <br>";
        } else {
        $this->balance += $amount;
        }
    }

    public function withdraw(float $amount): void
    {
        if ($amount > $this->balance) {
            echo "Mablag' yetarli emas! <br>";
        } else {
        $this->balance -= $amount;
        }
    }

    public function getBalance(): string
    {
        return "User: [{$this->ownerName}]. Joriy balans: [{$this->balance}] so'm. <br>";
    }
}

$account1 = new BankAccount('22', 'Bilol', 200);

$account1->deposit(23);
$account1->withdraw(22223);

echo $account1->getBalance();

//3
 
class Product 
{
    public function __construct(private string $title, private float $price)
    {
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setDiscount(int $percentage): void
    {
        if (!($percentage >= 1 && $percentage <= 100)) {
            echo "Xato! Chegirmaning qiymati 1-100% bo'lishi kerak! <br>";
        } else {
            $this->price -= $this->price*($percentage/100);
        }
    }
    
    public function getProductCard(): string 
    {
        return "Mahsulot nomi: «{$this->title}», Joriy narxi {$this->getPrice()}$. <br>";
    }
}

$product1 = new Product('Phone', 100);

$product1->setDiscount(42);

echo $product1->getProductCard();

