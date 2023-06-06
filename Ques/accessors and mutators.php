<?php

/*
 Suppose you have a class called "Person" with a private property called "name". You want to ensure that the "name" property can only be accessed and modified through accessor and mutator methods.
 Create the class "Person" and implement the following:
 A private property called "name".
 An accessor method called "getName()" that returns the value of the "name" property.
 A mutator method called "setName($newName)" that sets the value of the "name" property to the provided $newName.
 Create an instance of the "Person" class called "$person" and set the name to "John Doe" using the "setName()" method. Then, use the "getName()" method to retrieve the name and store it in a variable called "$name". Finally, echo the value of "$name" to display the person's name.
 */

class Person
{
    private $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

$my_person = new Person();
$my_person->setName("Aman");
echo $my_person->getName();
