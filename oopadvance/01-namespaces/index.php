<?php 

// Memuat autoload dari Composer
require __DIR__ . '/vendor/autoload.php';

// Menggunakan namespace Faker
use Faker\Factory;

// Membuat instance Faker
$faker = Factory::create();

// Menghasilkan nama dan alamat acak
echo $faker->name . "<br/>";
echo $faker->address . "<br/>";