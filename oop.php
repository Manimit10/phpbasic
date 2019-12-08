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
    // $person1 = new Person;

    // // $person1->name = "Jennifer lawrence";
    // // echo $person1->name;
    // $person1->setFname("Mani Tahriri");
    // echo $person1->getFname();
    // // second class
    class Car{
        private $model;
        private $company;
        private $color;
        private $owner;
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
    //$car1 = new car(1992 , 2500);
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
    $customer1 = new Customer("John", "Smith", "j@yahoo.com", 250);
    echo "customer balance is equal to " . $customer1->getBalance();

?>