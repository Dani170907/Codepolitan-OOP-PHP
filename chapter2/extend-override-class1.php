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
    // Properti 'city' untuk menyimpan kota tempat tinggal pelanggan
    var $city;

    // Properti 'country' untuk menyimpan negara tempat tinggal pelanggan
    var $country;

    // Method 'location' yang mengembalikan lokasi pelanggan (gabungan dari city dan country)
    function location()
    {
        return $this->city . ', ' . $this->country;
    }

    // Method 'fullName' yang dioverride dari kelas 'User' untuk menambahkan keterangan '(customer)'
    function fullName()
    {
        return $this->firstName . ' ' . $this->lastName . ' (customer)';
    }
}

// Membuat objek baru dari kelas 'User' dan menyimpannya dalam variabel $u
$u = new User;

// Mengatur properti 'firstName' pada objek $u menjadi 'Dani'
$u->firstName = 'Dani';

// Mengatur properti 'lastName' pada objek $u menjadi 'Ramadhan'
$u->lastName = 'Ramadhan';

// Memanggil method 'fullName' pada objek $u dan menampilkan nama lengkap
echo $u->fullName() . "<br/>";

// Membuat objek baru dari kelas 'Customer' dan menyimpannya dalam variabel $c
$c = new Customer;

// Mengatur properti 'firstName' pada objek $c menjadi 'Samanta'
$c->firstName = 'Samanta';

// Mengatur properti 'lastName' pada objek $c menjadi 'Kezi'
$c->lastName = 'Kezi';

// Mengatur properti 'city' pada objek $c menjadi 'Surabaya'
$c->city = 'Surabaya';

// Mengatur properti 'country' pada objek $c menjadi 'Indonesia'
$c->country = 'Indonesia';

// Memanggil method 'fullName' pada objek $c dan menampilkan nama lengkap dengan tambahan '(customer)'
echo $c->fullName() . "<br/>";

// Memanggil method 'location' pada objek $c dan menampilkan lokasi pelanggan
echo $c->location() . "<br/>";

// Memeriksa apakah objek $c adalah instance dari subclass kelas 'User'
if (is_subclass_of($c, 'User')) {
    // Jika ya, tampilkan pesan bahwa 'Customer' adalah subclass dari 'User'
    echo "Instance Customer merupakan subclass Class User <br/>";
}

// Mengambil daftar kelas induk (parent class) dari objek $c
$parent = class_parents($c);

// Menampilkan daftar kelas induk yang dipisahkan oleh koma
echo implode(', ', $parent);