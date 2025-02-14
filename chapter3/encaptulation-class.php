<?php 

class User
{
    public $firstName;
    public $lastName;
    public $userName;

    protected $regID = 1001;
    private $level = 'User';

    public function fullName() 
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    protected function sayProtect()
    {
        return "Hello, Protected";
    }

    private function sayPrivate()
    {
        return "Hello, Private";
    }

    public function sayMe()
    {
        return $this->sayPrivate();
    }

    public function level()
    {
        return $this->level;
    }
}

class Customer extends User
{
    public function sayParent()
    {
        return $this->sayProtect();
    }

    public function regID()
    {
        return $this->regID;
    }

}

$u = new User;
$u->firstName = 'User';
$u->lastName = 'Class';

echo $u->fullName(). "<br/>";
echo $u->sayMe(). "<br/>";

$c = new Customer;
$c->firstName = 'Customer';
$c->lastName = 'Doe';

echo $c->fullName() . "<br/>";
echo $c->sayParent() . "<br/>";

echo $c->regID() . "<br/>";
echo $u->level() . "<br/>";