<?php

// Mendefinisikan interface TableInterface
interface TableInterface
{
    // Method save yang harus diimplementasikan oleh class yang menggunakan interface ini
    public function save(array $data);
}

// Mendefinisikan interface LogInterface
interface LogInterface
{
    // Method log yang harus diimplementasikan oleh class yang menggunakan interface ini
    public function log(string $message);
}

// Class Table mengimplementasikan dua interface: TableInterface dan LogInterface
class Table implements TableInterface, LogInterface
{
    // Implementasi method save dari TableInterface
    public function save(array $data)
    {
        // Mengembalikan string yang menunjukkan method save dipanggil
        return "Save method from table class";
    }

    // Implementasi method log dari LogInterface
    public function log(string $message)
    {
        // Mengembalikan pesan yang diterima dengan tambahan newline (\n)
        return $message . "\n";
    }
}

// Membuat objek dari class Table dan memanggil method log dengan pesan "Interface from log interface"
echo (new Table)->log("Interface from log interface");

// Membuat objek baru dari class Table dan memanggil method save dengan parameter array kosong
echo (new Table)->save([]);