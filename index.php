<?php
declare(strict_types=1);

use human\students\Student;

use technics\media\Tv;
use technics\transport\Car;

spl_autoload_register(function(string $class):void
{
    $filename = "{$class}.php";

    require_once($filename);
});

echo '-------Student-------'.PHP_EOL;

$student = new Student('Dmitriy', 'Iskra');
$student->getName();
$t = Student::fullName();
echo $t;

echo '-------Car-------'.PHP_EOL;

$car = new Car('Toyota', 'white');
$car->getModel();

echo '-------TV-------'.PHP_EOL;

$tv = new Tv('LG', 'white');
$tv->getBrand();