<?php
class Teacher extends Person
{
    //Variable for teacher.
    private $department;
    //Array for subjects.
    public $subjects = array();

    //Constructor includes parent constructor form person.php.
    function __construct($firstName,$lastName,$tearOfBrith,$subjects,$department) {
        parent::__construct($firstName,$lastName,$tearOfBrith);
        $this->subjects = $subjects;
        $this->department = $department;
    }
    //Getters and setters.
    public function get_subjects()
    {
        return $this->subjects;
    }
    public function set_subjects($subjects)
    {
        $this->subjects = $subjects;
    }
    public function get_department()
    {
        return $this->department;
    }
    public function set_department($department)
    {
        $this->department = $department;
    }

    //Printing function includes parent print() from person.php and after prints subjects and department.    
    public function print_out()
    {
        //Array loop for subjects.
        $subjectsArr ="";
        foreach ($this->subjects as $subjects) {
            $subjectsArr .= $subjects."";
        }
        return parent::print_out(). "<br>Courses: ".$subjectsArr."<br>Study Credits: ".$this->department; 
    }
}
?>