<?php

class car
{

    public $color;
    private $weight;
    static $model = ["BMW", "AUDI", "Benz", "Lambo"];
    static $year = [1991, 1992, 1993, 1994];

    public function my_color($color)
    {
        $this->color = $color;
        return $this->color . PHP_EOL;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getWeight()
    {
        return $this->weight . PHP_EOL;
    }

    public static function my_year()
    {
        return self::$year;
    }
}

$myCar = new car();
echo $myCar->my_color("Red") . PHP_EOL;

echo $myCar->color = "Blue" . PHP_EOL;

$myCar->setWeight("120Kgs");
echo $myCar->getWeight() . PHP_EOL;

print_r(car::$model);
print_r(car::my_year());
