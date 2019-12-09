<?php
    class Person{
        private $firstname;
        private $lastname;
        private $email;
        public function __construct($firstname,$lastname,$email){
            echo __CLASS__ . " created<br>";
        }
        public function setFname($firstname){
            $this->firstname = $firstname;
        }
        public function getFname(){
            return $this->firstname;
        }
        public function setLname($lastname){
            $this->lastname = $lastname;
        }
        public function getLname(){
            return $this->lastname;
        }
        public function setemail($email){
            $this->email = $email;
        }
        public function getemail(){
            return $this->email;
        }
        
    }
    
    // // second class
    class Car{
        private $model;
        // private $company;
        // private $color;
        // private $owner;
        private $price;

        public function __construct($model,$price){
            // echo "Car created";
            $this->model = $model;
            $this->price = $price;

            echo __CLASS__ . " created <br>";

        }
        public function __destruct(){
            echo __CLASS__ . " destroyed<br>";
        }
    }
    
    class Customer extends Person{
        private $balance;

        public function __construct($firstname, $lastname, $email, $balance){
            parent::__construct($firstname, $lastname, $email,$balance);
            $this->balance = $balance;
            echo "A new " .__CLASS__." created <br>";
        }
        public function setBalance($balance){
            $this->balance = $balance;
        }
        public function getBalance(){
            return $this->balance;
        }
    }
    

    class Motor extends Car{
        private $wheels = 2;
        public $passenger;
        public function __construct($model, $price, $passenger){
            parent::__construct($model, $price);
            $this->passenger = $passenger;
            echo "we create " . __CLASS__ . "<br>";
        }
    }
    // 4 class created ,, now we are going to use them

    $customer1 = new Customer("John", "Smith", "j@yahoo.com", 250);
    echo "<br>"."customer balance is equal to " . $customer1->getBalance() . "<br>";
    $person1 = new Person("Jen" , "Kim" , "J@gmail.com");
    // $person1->name = "Jennifer lawrence";
    // echo $person1->name;
    // $person1->setFname("Mani Tahriri");
    // echo $person1->getFname();
    
    $car1 = new car(1992 , 2500);
    $motorbike = new Motor(2015,300,"Adrian");
    // convert objects to string
    echo "<br>"."Now we are going to convert Objects to string<br>";
    var_dump($customer1);
    echo "<br>";
    print_r($car1);
    echo "<br>";
    var_dump($motorbike);
    echo "<br>";
    // now we work with clone
    $motorcloned = clone $motorbike;
    // if we change the information of cloned object, the first object will not be changed
    $motorcloned->passenger = "Mike";
    // now we have to object of Motor 1->Adrian 2->Mike
    echo "<br>" ."cloned object will be <br>";
    var_dump($motorcloned);
    
?>