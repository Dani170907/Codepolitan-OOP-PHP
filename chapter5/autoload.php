<?php

// Fungsi autoload untuk memuat class secara otomatis
function myAutoload($class)
{
    // Regex untuk memastikan nama class hanya mengandung huruf dan angka
    if (preg_match('/\A\w+\Z/', $class)) {
        include 'classes/' . $class . ".php"; // Memuat file class dari folder 'classes'
    }
}

// Mendaftarkan fungsi autoload
spl_autoload_register('myAutoload');

// Membuat objek dari class Student dan Cat
$student = new Student;
$cat = new Cat;

// Mencetak properti $name dari objek $student dan $cat
echo $student->name . ' ' . $cat->name . '<br/>';

echo $student->sayHello() . '<br/>'; // Output: Hello, Student
echo $cat->sayHello();    // Output: Hello, Meowing