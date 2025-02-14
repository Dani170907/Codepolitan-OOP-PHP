<?php 

class Programmer
{
    // Method static untuk mencetak "Start Coding, "
    public static function makeSystem()
    {
        echo "Start Coding, ";
    }
}

class AmateurProgrammer extends Programmer
{
    // Override method static makeSystem() dari class Programmer
    public static function makeSystem()
    {
        echo "Read Documentation, "; // Cetak "Read Documentation, "
        parent::makeSystem(); // Panggil method makeSystem() dari class parent (Programmer)
        echo "Clean up mess. "; // Cetak "Clean up mess. "
    }
}

// Mengakses method static makeSystem() dari class Programmer
echo "Programmer: ";
echo Programmer::makeSystem() . "<br/>"; // Output: Start Coding, <br/>

// Mengakses method static makeSystem() dari class AmateurProgrammer
echo "Amateur Programmer: ";
echo AmateurProgrammer::makeSystem() . "<br/>"; // Output: Read Documentation, Start Coding, Clean up mess. <br/>

// Membuat objek dari class Programmer
$p = new Programmer;

// Memanggil method makeSystem() dari objek $p
echo $p->makeSystem() . "<br/>"; // Output: Start Coding, <br/>

class Image
{
    // Properti static untuk menyimpan status resize
    public static $resizeStatus = true;

    // Method static untuk mencetak ukuran gambar default
    public static function geometry()
    {
        echo "760x300";
    }
}

class PhotoProfile extends Image
{
    // Override method static geometry() dari class Image
    public static function geometry()
    {
        if (self::$resizeStatus) { // Cek nilai properti static $resizeStatus
            echo "50x50"; // Jika true, cetak "50x50"
        } else {
            parent::geometry(); // Jika false, panggil method geometry() dari class parent (Image)
        }
    }
}

// Mengakses method static geometry() dari class Image
echo Image::geometry() . "<br/>"; // Output: 760x300<br/>

// Mengakses method static geometry() dari class PhotoProfile
echo PhotoProfile::geometry() . "<br/>"; // Output: 50x50<br/>

// Mengubah nilai properti static $resizeStatus di class Image
Image::$resizeStatus = false;

// Mengakses method static geometry() dari class PhotoProfile setelah perubahan
echo PhotoProfile::geometry() . "<br/>"; // Output: 760x300<br/>