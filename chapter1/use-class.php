<?php

class Student 
{

    var $first_name;
    var $last_name;

    var $name;
    var $country = 'None';

    function sayHello()
    {
        return "Hello, World!";
    }

    function fullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}

$student1 = new Student;
$student2 = new Student;

$student1->first_name = 'Dani';
$student1->last_name = 'Ramadhan';

$student2->name = 'Kezi';


echo $student1->first_name . "<br />";
echo $student1->last_name . "<br />";

echo $student2->name . "<br />";

echo $student1->sayHello() . "<br />";
echo $student1->fullName() . "<br />";

echo $student2->sayHello() . "<br />";

$class_methods = get_class_methods('Student');
echo "Method milik Student ";
echo "<pre>";
print_r($class_methods);
echo "<pre/>";

if (method_exists('Student', 'sayHello')) {
    echo "Method tersedia";
} else {
    echo "Method tidak tersedia";
}