<?php
//includes files that end with ".php" to this file. 
spl_autoload_register(function ($class_name){
    include $class_name.'.php';
});
//Creating new class student that uses the abstract person and class student printout these values.
$student = new Student('Eetu', 'Heikkinen', 1992, array('Projects, ', 'AI coding, ', 'PHP'), 30);
echo "<h2>Student</h2>";
echo $student->print();
echo "<br>";

//Creating new class teacher that uses the abstract person and class teacher printout these values.
$teacher = new Teacher('Will', 'Smith', 1947, array('PHP, ', 'Java, ', 'Computer science'), 'University IT');
echo "<h2>Teacher</h2>";
echo $teacher->print();

//Creating new class staff that uses the abstract person and class staff printout these values.
$staff = new Staff('Bob', 'Ross', 1956, 'Janitor');
echo "<h2>Staff</h2>";
echo $staff->print();
echo "<br>";
?>