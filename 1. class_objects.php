<?php

// Class is blueprint for an object.
class Car
{

    // Access Modifiers

    // $color Property can be accessed from anywhere, both from the the inside as well as outside of the class.
    public $color;
    // $year property can only be acccessed from within the class itself, cannot be accessed from the outside of this class.
    private $year;
    // $weight propery can only be accssed from within the class and its subclass.
    protected $weight;

    // In order to retrive the private properties we use Accessor and Mutators.

    // Mutator Or Setters : It sets the property of the $year property 
    public function setYear($year)
    {
        $this->year = $year;
    }

    // Accessors Or Getters : It retrives the property of the $year and properly returns it.
    public function getYear()
    {
        return $this->year;
    }
}

// A Object is an instatnce for a class.
// We initiate a new object by "new" keyword
$bmw = new Car();

$bmw_color = $bmw->color = "Blue";
echo $bmw_color;

// Mutator object
$bmw->setYear(1999);

// Accessor object
echo $bmw->getYear();

// Private and Protected properties Cannot be accesssed from outide the class.
// $bmw_year = $bmw->year = "1999";
// echo $bmw_year;
// $bmw_weight = $bmw->weight = "200 kgs";
// echo $bmw_weight;
