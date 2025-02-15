<?php 

// Mendefinisikan class IsPossitiveInt
class IsPossitiveInt
{
    // Method __invoke adalah method ajaib (magic method) yang memungkinkan objek dipanggil seperti fungsi
    public function __invoke($value)
    {
        // Mengecek apakah nilai adalah integer positif
        return ((int) $value == $value && $value > 0);
    }
}

// Membuat objek dari class IsPossitiveInt
$invoke = new IsPossitiveInt();

// Memanggil objek seperti fungsi dan mencetak hasilnya
var_dump($invoke(1));      // Output: bool(true)
var_dump($invoke('5'));    // Output: bool(true)
var_dump($invoke(4.0));    // Output: bool(true)
var_dump($invoke(-2));     // Output: bool(false)
var_dump($invoke(3.1));    // Output: bool(false)