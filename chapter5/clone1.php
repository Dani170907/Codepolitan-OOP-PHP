<?php

class Product 
{
    // Properti untuk menyimpan warna produk
    public $color;

    // Constructor akan dipanggil saat objek baru dibuat
    public function __construct() 
    {
        echo "New Product was created. <br/>";
    }

    // Method __clone() akan dipanggil saat objek di-clone
    public function __clone() 
    {
        echo "New Product was cloned. <br/>";
    }
}

// Membuat objek baru dari class Product
$shirt1 = new Product; // Output: New Product was created. <br/>

// Mengatur properti $color dari objek $shirt1
$shirt1->color = "Blue";

// Meng-clone objek $shirt1 ke $shirt2
$shirt2 = clone $shirt1; // Output: New Product was cloned. <br/>

// Mencetak warna dari $shirt1 dan $shirt2
echo $shirt1->color; // Output: Blue
echo $shirt2->color; // Output: Blue

echo "<hr/>";

// Mengubah warna $shirt2
$shirt2->color = "Red";

// Mencetak warna dari $shirt1 dan $shirt2 setelah perubahan
echo $shirt1->color; // Output: Blue
echo $shirt2->color; // Output: Red;
