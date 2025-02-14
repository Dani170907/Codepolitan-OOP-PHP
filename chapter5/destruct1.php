<?php 

class Student 
{
    // Properti static untuk menyimpan jumlah instance yang dibuat
    public static $instanceCount = 0;

    // Properti untuk menyimpan total dan target siswa
    public $total;
    public $target;

    // Constructor dengan parameter opsional $args
    public function __construct($args = []) 
    {
        self::$instanceCount++; // Menambahkan 1 ke $instanceCount setiap kali objek dibuat
        $this->total = $args['total'] ?? $this->total; // Mengisi $total dari $args atau nilai default
        $this->target = $args['target'] ?? $this->target; // Mengisi $target dari $args atau nilai default
    }

    // Destructor yang dipanggil saat objek dihancurkan
    public function __destruct() 
    {
        // echo "Good bye!";
        self::$instanceCount--; // Mengurangi 1 dari $instanceCount setiap kali objek dihancurkan
    }
}

class Elementary extends Student
{
    // Properti untuk menyimpan total dan target siswa di tingkat Elementary
    public $total = 3;
    public $target = 2;
}

class Junior extends Student
{
    // Properti untuk menyimpan total dan target siswa di tingkat Junior
    public $total = 2;
    public $target = 1;
}

class Senior extends Student
{
    // Properti untuk menyimpan total dan target siswa di tingkat Senior
    public $total = 4;
    public $target = 3;
}

// Membuat objek dari class Elementary dengan nilai custom untuk $total dan $target
$elementary = new Elementary(['total' => 2, 'target' => 1]);
echo "Elementary: {$elementary->total}, ";
echo "Target: {$elementary->target} <br/>"; // Output: Elementary: 2, Target: 1 <br/>

// Membuat objek dari class Junior dengan nilai custom untuk $total dan $target
$junior = new Junior(['total' => 4, 'target' => 2]);
echo "Junior: {$junior->total}, ";
echo "Target: {$junior->target} <br/>"; // Output: Junior: 4, Target: 2 <br/>

// Menghancurkan objek $elementary menggunakan unset()
unset($elementary); // Destructor dipanggil, dan $instanceCount berkurang 1

// Membuat objek dari class Senior tanpa nilai custom (menggunakan nilai default)
$senior = new Senior();
echo "Senior: {$senior->total}, ";
echo "Target: {$senior->target} <br/>"; // Output: Senior: 4, Target: 3 <br/>

// Mengakses properti static $instanceCount untuk melihat jumlah instance yang dibuat
echo "Instance Count: " . Student::$instanceCount; // Output: Instance Count: 2