<?php

class Person {
    public $firstName;
    public $lastName;
    private $age;

    public function __construct($firstName, $lastName, $age) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function getFullname() {
        return $this->firstName . " " . $this->lastName;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }
}

class Car {
    public $make;
    public $model;
    protected $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function getCarInfo() {
        return $this->make . " " . $this->model . " (" . $this->year . ")";
    }
}


$person = new Person("Ellaine Zyra", "Generao", 22);

$car = new Car("BMW", "BMW 5 Series", 2023);

echo "Full Name: " . $person->getFullname() . "<br>";
echo "Age: " . $person->getAge() . "<br>";

$person->setAge(23);
echo "Updated Age: " . $person->getAge() . "<br>";

echo "Car Info: " . $car->getCarInfo() . "<br>";