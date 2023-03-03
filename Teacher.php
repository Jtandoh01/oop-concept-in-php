<?php
class Teacher extends Person {
    private $subject;
    private $yearsTeaching;

    public function setSubject($subject) {
        $this->subject = $subject;
    }

    public function setYearsTeaching($yearsTeaching) {
        $this->yearsTeaching = $yearsTeaching;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function getYearsTeaching() {
        return $this->yearsTeaching;
    }
}
?>