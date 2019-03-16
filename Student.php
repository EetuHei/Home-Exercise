<?php
//Object student that extends object person.
class Student extends Person {
    //Variables needed for student.
    private $studyCredits;
    //array for courses.
    public  $courses = array();

    //Constructor includes parent constructor form person.php.
    function __construct($firstName, $lastName, $yearOfBirth, $courses, $studyCredits) {
        parent::__construct($firstName, $lastName, $yearOfBirth);
        $this->courses = $courses;
        $this->studyCredits = $studyCredits;
    }
    //getters and setters.
    public function get_courses()
    {
        return $this->course;
    }
    public function set_courses($courses)
    {
        $this->courses = $courses;
    }
    public function get_studyCredits()
    {
        return $this->studyCredits;
    }
    public function set_studyCredits($studyCredits)
    {
        $this->studyCredits = $studyCredits;
    }
    //Printing function includes parent print() from person.php and after prints courses and study credits.
    public function print()
    {
        //Array loop for courses.
        $coursesArr ="";
        foreach ($this->courses as $courses) {
            $coursesArr .= $courses."";
        }
        return parent::print(). "<br>Courses: ".$coursesArr."<br>Study Credits: ".$this->studyCredits; 
    }

}
?>