<?php 

// Mendefinisikan class Student
class Student 
{
    // Properti static untuk menyimpan daftar tingkatan pendidikan
    public static $grades = ['SD', 'SMP', 'SMA'];

    // Properti static untuk menyimpan total jumlah siswa (private agar tidak bisa diakses langsung dari luar class)
    private static $totalStudents = 0;

    // Method static untuk mengembalikan motto pembelajaran
    public static function motto()
    {
        return 'Learn PHP OOP'; // Mengembalikan string 'Learn PHP OOP'
    }

    // Method static untuk mengembalikan total jumlah siswa
    public static function count()
    {
        return self::$totalStudents; // Mengembalikan nilai dari properti static $totalStudents
    }

    // Method static untuk menambahkan jumlah siswa
    public static function addStudent()
    {
        return self::$totalStudents++; // Menambahkan 1 ke $totalStudents dan mengembalikan nilai sebelum ditambah
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