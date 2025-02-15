<?php 

abstract class Database
{
    abstract public function connection();
    public function disconnect()
    {
        // Implementation
        echo "Disconnect from database.\n";

    }
}

class Model extends Database
{
    public function connection()
    {
        echo "Connected from database";
    }
}

$model = new Model();
$model->connection();
$model->disconnect();