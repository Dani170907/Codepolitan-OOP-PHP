<?php 

// Mendefinisikan kelas 'User'
class User
{
    // Properti 'firstName' untuk menyimpan nama depan pengguna
    var $firstName;

    // Properti 'lastName' untuk menyimpan nama belakang pengguna
    var $lastName;

    // Properti 'userName' untuk menyimpan nama pengguna (tidak digunakan dalam contoh ini)
    var $userName;

    // Method 'fullName' yang mengembalikan nama lengkap pengguna (gabungan dari firstName dan lastName)
    function fullName() 
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

// Mendefinisikan kelas 'Customer' yang mewarisi (inherits) kelas 'User'
class Customer extends User
{
    // Kelas 'Customer' tidak menambahkan properti atau method baru di sini
    // Namun, ia mewarisi semua properti dan method dari kelas 'User'
}

// Membuat objek baru dari kelas 'Customer' dan menyimpannya dalam variabel $c
$c = new Customer;

// Mengatur properti 'firstName' pada objek $c menjadi 'Customer'
$c->firstName = 'Customer';

// Mengatur properti 'lastName' pada objek $c menjadi 'Doe'
$c->lastName = 'Doe';

// Memanggil method 'fullName' pada objek $c dan menampilkan nama lengkap
echo $c->fullName() . "<br/>";

// Memeriksa apakah objek $c adalah instance dari subclass kelas 'User'
if (is_subclass_of($c, 'User')) {
    // Jika ya, tampilkan pesan bahwa 'Customer' adalah subclass dari 'User'
    echo "Instance Customer merupakan subclass Class User <br/>";
}

// Mengambil daftar kelas induk (parent class) dari objek $c
$parent = class_parents($c);

// Menampilkan daftar kelas induk yang dipisahkan oleh koma
echo implode(', ', $parent);