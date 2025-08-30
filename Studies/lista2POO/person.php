<?php

class Person{
    public function __construct(
        private string $name,
        private string $lastName,
    ){}

    public function getName(){
        return $this->name;
    }

    public function setName(){
        $this->name = $name;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function setLastName(){
        $this->lastName = $lastName;
    }
    
    public function getFullName(){
        return $this->name . " " . $this->lastName;
    }
}

$personOne = new Person('Carlos', 'Goulart');
$personTwo = new Person('Julia', 'Zvierzykovski');
$personThree = new Person('Maelle', 'Goulart Zvierzykovski');
$personFour = new Person('Breno', 'Goulart Zvierzykovski');
$person = [$personOne, $personTwo, $personThree, $personFour];
print_r ($person);
