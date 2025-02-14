<?php 

// Definisi kelas User dengan properti dan method berbagai visibility
class User
{
    // Properti publik yang bisa diakses dari luar kelas
    public $firstName;
    public $lastName;
    public $userName;

    // Properti protected hanya bisa diakses dari kelas turunan
    protected $regID = 1001;
    
    // Properti private hanya bisa diakses dari dalam kelas ini
    private $level = 'User';

    // Method publik untuk mendapatkan nama lengkap
    public function fullName() 
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    // Method protected hanya bisa diakses dari kelas turunan
    protected function sayProtect()
    {
        return "Hello, Protected";
    }

    // Method private hanya bisa diakses dari dalam kelas ini
    private function sayPrivate()
    {
        return "Hello, Private";
    }

    // Method publik yang mengakses method private
    public function sayMe()
    {
        return $this->sayPrivate();
    }

    // Method publik untuk mengakses properti private $level
    public function level()
    {
        return $this->level;
    }
}

// Kelas Customer turunan dari User
class Customer extends User
{
    // Method untuk mengakses method protected dari parent class
    public function sayParent()
    {
        return $this->sayProtect();
    }

    // Method untuk mengakses properti protected $regID dari parent class
    public function regID()
    {
        return $this->regID;
    }
}

// Membuat objek User
$u = new User;
$u->firstName = 'User';
$u->lastName = 'Class';

// Output: User Class
echo $u->fullName(). "<br/>";

// Output: Hello, Private (mengakses private method melalui public method)
echo $u->sayMe(). "<br/>";

// Membuat objek Customer
$c = new Customer;
$c->firstName = 'Customer';
$c->lastName = 'Doe';

// Output: Customer Doe
echo $c->fullName() . "<br/>";

// Output: Hello, Protected (mengakses protected method dari parent)
echo $c->sayParent() . "<br/>";

// Output: 1001 (mengakses protected property melalui method)
echo $c->regID() . "<br/>";

// Output: User (mengakses private property melalui public method)
echo $u->level() . "<br/>";