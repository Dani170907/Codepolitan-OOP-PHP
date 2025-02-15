<?php 

// Mendefinisikan trait bernama Log
trait Log 
{
    // Method log yang dilindungi (protected) untuk mencetak pesan
    protected function log($message)
    {
        // Mencetak pesan yang diterima diikuti dengan newline (\n)
        echo "{$message}\n";
    }
}

// Mendefinisikan class Table
class Table 
{
    // Menggunakan trait Log di dalam class Table
    use Log;

    // Method save yang akan memanggil method log dari trait Log
    public function save()
    {
        // Memanggil method log dengan pesan "created log"
        $this->log("created log");
    }
}

// Membuat objek baru dari class Table dan memanggil method save
(new Table())->save();