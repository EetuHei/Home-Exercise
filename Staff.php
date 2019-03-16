<?php
class Staff extends Person
{
    //Variable needed for staff.
    private $vacancy;

    //Constructor includes parent constructor form person.php.
    function __construct($firstName, $lastName, $yearOfBirth, $vacancy) {
        parent::__construct($firstName, $lastName, $yearOfBirth);
        $this->vacancy = $vacancy;
    }
    //Getters and setters.
    public function get_vacancy()
    {
        return $this->vacancy;
    }
    public function set_vacancy($vacancy)
    {
        $this->vacancy = $vacancy;
    }

    //Printing function includes parent print() from person.php and after prints vacancy.    
    public function print()
    {
        return parent::print()."<br> Vacancy: ".$this->vacancy;
    }
}
?>