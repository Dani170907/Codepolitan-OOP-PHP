<?php

// Mendefinisikan kelas 'Student'
class Student 
{
    // Properti 'name' yang dapat menyimpan nama siswa
    var $name;
    
    // Properti 'country' dengan nilai default 'None'
    var $country = 'None';
}

// Membuat objek baru dari kelas 'Student' dan menyimpannya dalam variabel $student1
$student1 = new Student;

// Membuat objek baru dari kelas 'Student' dan menyimpannya dalam variabel $student2
$student2 = new Student;

// Mengatur properti 'name' pada objek $student1 menjadi 'Dani'
$student1->name = 'Dani';

// Mengatur properti 'name' pada objek $student2 menjadi 'Kezi'
$student2->name = 'Kezi';

// Menampilkan nilai properti 'name' dari objek $student1
echo $student1->name . "<br />";

// Menampilkan nilai properti 'name' dari objek $student2
echo $student2->name . "<br />";

// Mengambil semua properti yang ada dalam kelas 'Student' dan menyimpannya dalam variabel $class_vars
$class_vars = get_class_vars('Student');

// Menampilkan teks "Properti milik Student"
echo "Properti milik Student ";

// Menampilkan struktur array dari variabel $class_vars dengan format yang mudah dibaca
echo "<pre>";
print_r($class_vars);
echo "<pre/>";

// Memeriksa apakah properti 'name' ada dalam kelas 'Student'
if (property_exists('Student', 'name')) {
    // Jika properti 'name' ada, tampilkan "Properti tersedia"
    echo "Properti tersedia";
} else {
    // Jika properti 'name' tidak ada, tampilkan "Properti tidak tersedia"
    echo "Properti tidak tersedia";
}