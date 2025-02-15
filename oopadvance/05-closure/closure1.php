<?php 

// Mendefinisikan array berisi angka 1 sampai 9
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

// Menggunakan array_filter dengan anonymous function untuk memfilter angka genap
$even = array_filter($array, function($item) {
    // Mengembalikan true jika angka genap (habis dibagi 2)
    return ($item % 2 == 0);
});

// Mencetak array hasil filter angka genap
print_r($even);

// Mencetak array asli (tidak berubah)
print_r($array);

// Mendefinisikan anonymous function untuk memfilter angka ganjil
$filterFunction = function ($item) {
    // Mengembalikan true jika angka ganjil (tidak habis dibagi 2)
    return ($item % 2 == 1);
};

// Menggunakan array_filter dengan anonymous function yang sudah didefinisikan sebelumnya
$odd = array_filter($array, $filterFunction);

// Mencetak array hasil filter angka ganjil
print_r($odd);