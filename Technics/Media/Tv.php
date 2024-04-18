<?php
declare(strict_types=1);

namespace technics\media;

class Tv
{
    public string $brand;
    public string $color;

    public function __construct(string $brand, string $color)
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function getBrand():void
    {
        echo $this->brand.PHP_EOL;
    }

    public function getColor():void
    {
        echo $this->color.PHP_EOL;
    }
}

