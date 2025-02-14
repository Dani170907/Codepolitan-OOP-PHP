<?php

class Time
{
    // Mendefinisikan konstanta public DAY_IN_SEC yang menyimpan jumlah detik dalam sehari
    public const DAY_IN_SEC = 60 * 60 * 24;

    // Method untuk mengembalikan waktu besok (waktu saat ini + jumlah detik dalam sehari)
    public function tomorrow()
    {
        return time() + self::DAY_IN_SEC; 
    }
}

// Mengakses konstanta DAY_IN_SEC dari class Time
echo Time::DAY_IN_SEC . "<br/>"; // Output: 86400

// Membuat objek dari class Time
$clock = new Time;
// Memanggil method tomorrow() dari objek $clock
echo $clock->tomorrow();