<?php

class car
{
    public $color;
    public $manufacturer;
    const YEAR = ['1991', '1992', '1993'];
    const BRAND = ['BMW', 'BENZ', 'LAMBO'];

    public function my_car($color, $manufacturer)
    {
        $this->color = $color;
        $this->manufacturer = $manufacturer;
        echo $this->color . PHP_EOL;
        echo $this->manufacturer . PHP_EOL;
        print_r(self::YEAR);
    }
}

$myCar = new car();
echo $myCar->my_car('Blue', 'Volswagon');
