<?php
require_once 'Person.php';
class Student extends Person {
    private $gradeLevel;
    private $gpa;

        //setters
    public function setGradeLevel($gradeLevel) {
        $this->gradeLevel = $gradeLevel;
    }

    public function setGpa($gpa) {
        $this->gpa = $gpa;
    }

            //getters
    public function getGradeLevel() {
        return $this->gradeLevel;
    }

    public function getGpa() {
        return $this->gpa;
    }
}
?>