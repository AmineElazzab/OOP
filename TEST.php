<?php
require 'person.php';
require 'student.php';
require 'teacher.php';
$student  = new student( 'Ayman' , '17', 'black');
$teacher = new teacher( 'Saad', '34', 'brown');
echo '<b>student</b> <br>';
echo 'The name of the student is ' . $student->get_Name(). ' It is ' . $student->get_Age() .' years old' .'<br><br>';
echo '<b>teacher</b> <br>';
echo 'The name of the teacher is ' . $teacher->get_Name().' It is ' . $teacher->get_Age() .' years old';
?>