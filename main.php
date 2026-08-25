<?php
declare(strict_types=1);

require_once 'php1/Models/User.php';

use App\Models\User;

$admin = new User();
echo $admin->sayHello();


echo "PHP va Git o'rganishni boshladik!";
