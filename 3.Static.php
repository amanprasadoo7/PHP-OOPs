<?php

class car
{

    public $color;
    private $weight;

    // Static Properties 
    static $model = ["BMW", "AUDI", "Benz", "Lambo"];
    static $year = [1991, 1992, 1993, 1994];

    public function my_color($color)
    {
        $this->color = $color;
        return $this->color . PHP_EOL;
    }

    // Mutators
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    // Accessors
    public function getWeight()
    {
        return $this->weight . PHP_EOL;
    }

    // Static Function
    public static function my_year()
    {
        // the self keyword is a special keyword that is used to refer to the current class from within the class itself.
        return self::$year;
    }
}

$myCar = new car();
echo $myCar->my_color("Red") . PHP_EOL;

echo $myCar->color = "Blue" . PHP_EOL;

$myCar->setWeight("120Kgs");
echo $myCar->getWeight() . PHP_EOL;

// calling Static properties and methods.
print_r(car::$model);
print_r(car::my_year());
