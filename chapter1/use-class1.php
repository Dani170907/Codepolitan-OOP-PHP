<?php

// Mendefinisikan kelas 'Student'
class Student 
{
    // Properti 'first_name' untuk menyimpan nama depan siswa
    var $first_name;

    // Properti 'last_name' untuk menyimpan nama belakang siswa
    var $last_name;

    // Properti 'name' untuk menyimpan nama lengkap siswa (tidak digunakan secara eksplisit di sini)
    var $name;

    // Properti 'country' dengan nilai default 'None'
    var $country = 'None';

    // Method 'sayHello' yang mengembalikan string "Hello, World!"
    function sayHello()
    {
        return "Hello, World!";
    }

    // Method 'fullName' yang mengembalikan nama lengkap siswa (gabungan dari first_name dan last_name)
    function fullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}

// Membuat objek baru dari kelas 'Student' dan menyimpannya dalam variabel $student1
$student1 = new Student;

// Membuat objek baru dari kelas 'Student' dan menyimpannya dalam variabel $student2
$student2 = new Student;

// Mengatur properti 'first_name' pada objek $student1 menjadi 'Dani'
$student1->first_name = 'Dani';

// Mengatur properti 'last_name' pada objek $student1 menjadi 'Ramadhan'
$student1->last_name = 'Ramadhan';

// Mengatur properti 'name' pada objek $student2 menjadi 'Kezi'
$student2->name = 'Kezi';

// Menampilkan nilai properti 'first_name' dari objek $student1
echo $student1->first_name . "<br />";

// Menampilkan nilai properti 'last_name' dari objek $student1
echo $student1->last_name . "<br />";

// Menampilkan nilai properti 'name' dari objek $student2
echo $student2->name . "<br />";

// Memanggil method 'sayHello' pada objek $student1 dan menampilkan hasilnya
echo $student1->sayHello() . "<br />";

// Memanggil method 'fullName' pada objek $student1 dan menampilkan nama lengkap siswa
echo $student1->fullName() . "<br />";

// Memanggil method 'sayHello' pada objek $student2 dan menampilkan hasilnya
echo $student2->sayHello() . "<br />";

// Mengambil semua method yang ada dalam kelas 'Student' dan menyimpannya dalam variabel $class_methods
$class_methods = get_class_methods('Student');

// Menampilkan teks "Method milik Student"
echo "Method milik Student ";

// Menampilkan struktur array dari variabel $class_methods dengan format yang mudah dibaca
echo "<pre>";
print_r($class_methods);
echo "<pre/>";

// Memeriksa apakah method 'sayHello' ada dalam kelas 'Student'
if (method_exists('Student', 'sayHello')) {
    // Jika method 'sayHello' ada, tampilkan "Method tersedia"
    echo "Method tersedia";
} else {
    // Jika method 'sayHello' tidak ada, tampilkan "Method tidak tersedia"
    echo "Method tidak tersedia";
}