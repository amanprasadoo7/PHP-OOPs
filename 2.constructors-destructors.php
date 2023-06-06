<?php

class car
{
    private $color;
    private $weight;

    // Constructors are called as soon as objects are created.
    /* a class can have multiple constructors. This is called constructor overloading. Constructor overloading allows different ways to create objects of the same class with different parameter lists. */
    // working as Mutators or Getters
    public function __construct($color, $weight)
    {
        $this->color = $color;
        $this->weight = $weight;
        // a constructor does not have a return type. It is automatically invoked during object creation and does not return any value explicitly.
    }

    // Accessors or Setters
    public function getColor()
    {
        return $this->color . PHP_EOL;
    }

    // Accessors or Setters
    public function getWeight()
    {
        return $this->weight . PHP_EOL;
    }

    // Destructors are automatically called when an object is destroyed or goes out of scope. 
    public function __destruct()
    {
        echo "hi im destructor :" . $this->color . PHP_EOL;
        echo "hi im destructor :" . $this->weight . PHP_EOL;
    }
}

// Passing arguments in class.
$myCar = new car('Red', '129 Kgs');
echo $myCar->getColor();
echo $myCar->getWeight();

// 'unset()' function is used to destroy or unset a variable, array element, or object property.