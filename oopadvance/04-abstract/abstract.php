<?php 

// Mendefinisikan abstract class Database
abstract class Database
{
    // Method abstrak connection() yang harus diimplementasikan oleh class turunan
    abstract public function connection();

    // Method konkret disconnect() dengan implementasi default
    public function disconnect()
    {
        // Implementation 
        echo "Disconnect from database \n";
    }
}

// Mendefinisikan class Model yang mewarisi abstract class Database
class Model extends Database
{
    // Implementasi method connection() yang diwajibkan oleh abstract class Database
    public function connection()
    {
        // Implementation
        echo "Connected from database";
    }
}

// Membuat objek baru dari class Model
$model = new Model();
$model->disconnect();
$model->connection();