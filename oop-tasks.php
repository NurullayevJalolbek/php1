<?php
declare(strict_types=1); 

class User 
{
    public function __construct(protected string $name, protected readonly string $email)
    {
    }

    public function getInfo(): string
    {
        return "Foydalanuvchi: {$this->name}, Email: {$this->email}. <br>";
    }
}

class Admin extends User 
{   
    public function __construct(string $name, string $email, private string $role = 'Admin')
    {
        parent::__construct($name, $email);
        $this->role = $role;
    }
    public function deleteUser(string $userName): string
    {
        return "{$userName} tizimdan o'chirildi. <br>";
    }

}

class Student extends User 
{
    public function submitHomework(string $lessonName): string
    {
        return "{$this->name} {$lessonName} darsi bo'yicha vazifani topshirdi. <br>";
    }
}

$admin = new Admin('Ali', 'aliadmin007@gmail.com');
$student = new Student('Vali', 'studentvali11@gmail.com');

echo $admin->getInfo();
echo $student->getInfo();


echo $admin->deleteUser('sardorrr');
echo $student->submitHomework('physics');

//2

class Animal 
{
    function __construct(protected string $name)
    {
    }

    public function makeSound(): string
    {
        return "Hayvon qanaqadur ovoz chiqarmoqda. <br>";
    }
}

class Dog extends Animal
{
    public function makeSound(): string 
    {
        return "Vov-vov! <br>";
    }
}

class Cat extends Animal
{
    public function makeSound(): string 
    {
        return "Miyov-miyov! <br>";
    }
}
//shunaqa qilsa boladi
$dog = new Dog('Kuchuk');
echo $dog->makeSound();

$cat = new Cat('Mushuk');
echo $cat->makeSound();

//yoki shunaqa qaysi biri overriding
$animal = new Dog('Kuchuk');
echo $animal->makeSound();

$animal= new Cat('Mushuk');
echo $animal->makeSound();


//3
class Employee
{
    protected string $name;
    protected float $baseSalary;

    public function __construct(string $name, float $baseSalary)
    {
        $this->name = $name;
        $this->baseSalary = $baseSalary;
    }

    public function calculateSalary(): float
    {
        return $this->baseSalary;
    }
}

class Developer extends Employee
{   
    private float $bonus;

    public function __construct(string $name, float $baseSalary, float $bonus)
    {
        parent::__construct($name, $baseSalary);
        $this->bonus = $bonus;
    }
}

class Manager extends Employee
{
    public function calculateSalary(): float
    {
        return $this->baseSalary*1.2;
    }
}

$developer = new Developer('Ali', 810, 35);

$manager = new Manager('Amir', 1000);

echo $developer->calculateSalary() . '<br>';
echo $manager->calculateSalary() . '<br>';

//4

class Notification
{
    public function send(string $message): string
    {
        return "Xabar yuborildi: {$message}. <br>";
    }
}

class SmsNotification extends Notification
{
    public function send(string $message): string
    {
        return "SMS orqali yuborildi: {$message}. <br>";
    }
}

class EmailNotification extends Notification
{
    public function send(string $message): string
    {
        return "Email orqali yuborildi: {$message}. <br>";
    }
}

class TelegramNotification extends Notification
{
    public function send(string $message): string
    {
        return "Telegram orqali yuborildi: {$message}. <br>";
    }
}

$notifications = [
    new SmsNotification(),
    new EmailNotification(),
    new TelegramNotification()
];

foreach ($notifications as $notification) {
    echo $notification->send("Dars soat 18:00 da boshlanadi. <br>");
}

