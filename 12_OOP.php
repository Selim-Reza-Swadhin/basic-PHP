<?php

class Person
{
    private $name;
    private $email;
    //public static $ageLimit = 40;
    private static $ageLimit = 40;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
        //echo 'Person Created';
        echo __CLASS__ . 'Created';
    }

    public function __destruct()
    {

        echo __CLASS__ . 'Destroyed';
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setEmail($email)
    {
        $this->name = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public static function getAgeLimit()
    {
        return self::$ageLimit;
    }
}

echo Person::getAgeLimit();

//$person1 = new Person('Shaj','shaj@gmail.com');
//$person1->setName('Shakil Ahmed Shaj');
//$person1->name = 'SHAJ';
//echo $person1->getName();

class Customer extends Person
{
    private $balance;

    public function __construct($name, $email,$balance)
    {
       parent::__construct($name, $email,$balance);
       $this->balance = $balance;

       echo 'A new '.__CLASS__.'has been created';

    }

    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    public function getBalance()
    {
        return $this->balance;
    }

}

$customer1 = new Customer('SHAJ','shaj@gmail.com',300);

echo $customer1->getBalance();