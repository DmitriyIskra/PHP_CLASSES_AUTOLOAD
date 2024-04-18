<?php
declare(strict_types=1);

namespace human\students;

class Student 
{
    public string $name;
    public string $surname;

    public const CATEGORY = 'TV';

    public function __construct(string $name, string $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getName():void
    {
        echo $this->name.PHP_EOL;
    }

    public function getSurname():void
    {
        echo $this->surname.PHP_EOL;
    }

    public static function fullName():string
    {
        return "Hello World".PHP_EOL;
    }
}


