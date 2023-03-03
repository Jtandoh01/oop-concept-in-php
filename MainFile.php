<?php
require_once 'Person.php';
require_once 'Student.php';
require_once 'Teacher.php';

// Create a Person instance
$person = new Person();
$person->setFirstName("James");
$person->setLastName("Boadi");
$person->setAge(71);

// Create a Student instance
$student = new Student();
$student->setFirstName("Johnson");
$student->setLastName("Tandoh");
$student->setAge(24);
$student->setGradeLevel(200);
$student->setGpa(3.5);

// Create a Teacher instance
$teacher = new Teacher();
$teacher->setFirstName("Paul");
$teacher->setLastName("Nii Armah");
$teacher->setAge(39);
$teacher->setSubject("Computer Science");
$teacher->setYearsTeaching(8);

// Print out details of the Person instance
echo "Person: " . $person->getFirstName() . " " . $person->getLastName() . ", is " . $person->getAge() . " years old <br>";
echo "<br>";
// Print out details of the Student instance
echo "Student: " . $student->getFirstName() . " " . $student->getLastName() . ", is " . $student->getAge() . " years old. He is a level " . $student->getGradeLevel() . " student with a  GPA of " . $student->getGpa() . ".<br>";
echo "<br>";
// Print out details of the Teacher instance
echo "Teacher: " . $teacher->getFirstName() . " " . $teacher->getLastName() . ", is " . $teacher->getAge() . " years old. He is a  " . $teacher->getSubject() . " lecturer at the University of Ghana with " . $teacher->getYearsTeaching() . " years of teaching experience";


?>