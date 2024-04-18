<?php
declare(strict_types=1);

namespace technics\transport;

class Car
{
    public string $model;
    public string $year;

    public function __construct(string $model, string $year)
    {
        $this->model = $model;
        $this->year = $year;
    }

    public function getModel():void
    {
        echo $this->model.PHP_EOL;
    }

    public function getYear():void
    {
        echo $this->year.PHP_EOL;
    }
}

