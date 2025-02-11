<?php

class Student 
{
    var $name;
    var $country = 'None';
}

$student1 = new Student;
$student2 = new Student;

$student1->name = 'Dani';
$student2->name = 'Kezi';

echo $student1->name . "<br />";
echo $student2->name . "<br />";

$class_vars = get_class_vars('Student');
echo "Properti milik Student ";
echo "<pre>";
print_r($class_vars);
echo "<pre/>";

if (property_exists('Student', 'name')) {
    echo "Properti tersedia";
} else {
    echo "Properti tidak tersedia";
}