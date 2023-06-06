<?php

/*
Ques. Suppose you have a class called "Person" with a private property called "name". Implement the constructor and destructor methods for the class, ensuring that the "name" property is initialized in the constructor and displayed in the destructor. Write the code for the class.
Your task is to write the code for the "Person" class with the constructor and destructor methods that meet the requirements mentioned above.
*/

class Person
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
        echo "Constructor is initialized " . $this->name . PHP_EOL;
    }

    public function getName()
    {
        return $this->name . PHP_EOL;
    }

    public function __destruct()
    {
        echo "Destrucor is called " . $this->name . PHP_EOL;
    }
}

$newPerson = new Person("Aman Prasad");
echo $newPerson->getName();
