<?php 

class Student 
{
    // Properti static untuk menyimpan jumlah instance yang dibuat
    public static $instanceCount = 0;

    // Constructor yang akan dipanggil setiap kali objek dibuat
    public function __construct() 
    {
        self::$instanceCount++; // Menambahkan 1 ke $instanceCount setiap kali objek dibuat
    }
}

class Elementary extends Student
{
    // Properti untuk menyimpan total siswa di tingkat Elementary
    public $total = 3;
}

class Junior extends Student
{
    // Properti untuk menyimpan total siswa di tingkat Junior
    public $total = 2;
}

class Senior extends Student
{
    // Properti untuk menyimpan total siswa di tingkat Senior
    public $total = 4;
}

// Membuat objek dari class Elementary
$elementary = new Elementary;
echo "Elementary: {$elementary->total} <br/>"; // Output: Elementary: 3 <br/>

// Membuat objek dari class Junior
$junior = new Junior;
echo "Junior: {$junior->total} <br/>"; // Output: Junior: 2 <br/>

// Membuat objek dari class Senior
$senior = new Senior;
echo "Senior: {$senior->total} <br/>"; // Output: Senior: 4 <br/>

// Mengakses properti static $instanceCount untuk melihat jumlah instance yang dibuat
echo "Instance Count: " . Student::$instanceCount; // Output: Instance Count: 3