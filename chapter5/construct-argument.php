<?php 

class Student 
{
    public static $instanceCount = 0;

    public $total;
    public $target;

    public function __construct($total, $target) 
    {
        self::$instanceCount++;
        $this->total = $total;
        $this->target = $target;
    }
}

class Elementary extends Student
{
    public $total = 3;
    public $target = 2;
}

class Junior extends Student
{
    public $total = 2;
    public $target = 1;
}

class Senior extends Student
{
    public $total = 4;
    public $target = 3;
}

$elementary = new Elementary(2, 1);
echo "Elementary: {$elementary->total}, ";
echo "Target: {$elementary->target} <br/>";

$junior = new Junior(4, 2);
echo "Junior: {$junior->total}, ";
echo "Target: {$junior->target} <br/>";

$senior = new Senior(5, 3);
echo "Senior: {$senior->total}, ";
echo "Target: {$senior ->target} <br/>";

echo "Instance Count: " . Student::$instanceCount;