<?php 

class Student 
{
    // Properti static untuk menyimpan daftar tingkatan pendidikan
    public static $grades = ['SD', 'SMP', 'SMA'];

    // Properti static untuk menyimpan total jumlah siswa (private agar tidak bisa diakses langsung dari luar class)
    private static $totalStudents = 0;

    // Method static untuk mengembalikan motto pembelajaran
    public static function motto()
    {
        return 'Learn PHP OOP';
    }

    // Method static untuk mengembalikan total jumlah siswa
    public static function count()
    {
        return self::$totalStudents;
    }

    // Method static untuk menambahkan jumlah siswa
    public static function addStudent()
    {
        return self::$totalStudents++;
    }
}

// Mengakses elemen ke-2 dari array static $grades (indeks dimulai dari 0)
echo Student::$grades[2] . "<br/>"; // Output: SMA

// Memanggil method static motto() dan mencetak hasilnya
echo Student::motto() . "<br/>"; // Output: Learn PHP OOP

// Memanggil method static count() untuk mendapatkan total siswa saat ini
echo Student::count() . "<br/>"; // Output: 0 (karena belum ada siswa yang ditambahkan)

// Memanggil method static addStudent() untuk menambahkan 1 siswa
Student::addStudent();

// Memanggil method static count() lagi untuk melihat total siswa setelah penambahan
echo Student::count() . "<br/>"; // Output: 1 (karena 1 siswa telah ditambahkan)

class PartTimeStudent extends Student
{
}

// Mengakses elemen ke-1 dari array static $grades yang diwarisi dari class Student
echo PartTimeStudent::$grades[1] . "<br/>"; // Output: SMP

// Memanggil method static motto() yang diwarisi dari class Student
echo PartTimeStudent::motto() . "<br/>"; // Output: Learn PHP OOP

// Menambahkan elemen baru ke array static $grades melalui class PartTimeStudent
PartTimeStudent::$grades[] = 'Alumni';

// Mencetak semua elemen array static $grades dari class Student
echo implode(', ', Student::$grades) . "<br/>"; // Output: SD, SMP, SMA, Alumni

// Menambahkan 2 siswa melalui class Student
Student::addStudent();
Student::addStudent();

// Menambahkan 1 siswa melalui class PartTimeStudent
PartTimeStudent::addStudent();

// Mengecek total siswa melalui class Student
echo Student::count() . "<br/>"; // Output: 4

// Mengecek total siswa melalui class PartTimeStudent
echo PartTimeStudent::count() . "<br/>"; // Output: 4