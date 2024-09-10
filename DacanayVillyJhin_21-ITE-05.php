<?php
    class Person{
        public $firstName;
        public $lastName;
        private $age;

        function __construct($firstName, $lastName, $age){
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->age = $age;
        }

        public function getFirstName(){
            return $this->firstName;
        }

        public function getLastName(){
            return $this->lastName;
        }

        public function getAge(){
            return $this->age;
        }

        public function setAge($age){
            $this->age = $age;
        }
    } 

    class Car {
        public $make;
        public $model;
        public $year;

        function __construct($make, $model, $year){
            $this->make = $make;
            $this->model = $model;
            $this->year = $year;
        }

        public function getCarInfo(){
            return $this->make ." ". $this->model ." ". $this->year;
        }
        
    }

    $person1 = new Person("John", "Doe", 25);
    echo "Full Name: " . $person1->getFirstName() ." ". $person1->getLastName() ."<br>";
    echo "Age: " . $person1->getAge() ."<br>";

    echo "Updated Age: ";
    $person1->setAge(26);
    echo $person1->getAge() ."<br>";

    $car1 = new Car("Toyota", "Camry", "(2020)");
    echo "Car Info: " . $car1->getCarInfo();
    
?>