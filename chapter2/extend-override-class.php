<?php 

class User
{
    var $firstName;
    var $lastName;
    var $userName;

    function fullName() 
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

class Customer extends User
{
    var $city;
    var $country;

    function location()
    {
        return $this->city . ', ' . $this->country;
    }

    function fullName()
    {
        return $this->firstName . ' ' . $this->lastName . ' (customer)';
    }

}

$u = new User;
$u->firstName = 'Dani';
$u->lastName = 'Ramadhan';

echo $u->fullName() . "<br/>" ;

$c = new Customer;
$c->firstName = 'Samanta';
$c->lastName = 'Kezi';
$c->city = 'Suarabaya';
$c->country = 'Indonesia';

echo $c->fullName() . "<br/>";
echo $c->location() . "<br/>";

if (is_subclass_of($c, 'User')) {
    echo "Instance Customer merupakan subclass Class User <br/>";
}

$parent = class_parents($c);
echo implode(', ', $parent);