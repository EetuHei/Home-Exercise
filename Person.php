<?php
//Abstract class for peron.
abstract class Person {
    private $firstName;
    private $lastName;
    private $yearOfBirth;
    //Constructor for these values.
    //This can be used as "parent" for other files.
    function __construct($firstName, $lastName, $yearOfBirth) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->yearOfBirth = $yearOfBirth;
    }
    //Getters and setters.
    public function get_firstName()
    {
        return $this->firstName;
    }
    public function set_firstName($firstName)
    {
        $this->firstName = $firstName;
    }
    public function get_lastName()
    {
        return $this->lastName;
    }
    public function set_lastName($lastName)
    {
        $this->lastName = $lastName;
    }
    public function get_yearOfBirth()
    {
        $this->yearOfBirth;
    }
    public function set_yearOfBirth($yearOfBirth)
    {
        $this->yearOfBirth = $yearOfBirth;
    }
    //Gets the current age in year 2019...
    //This could be improved with date("Y") but I couldn't make it work.
    public function get_currentAge()
    {
       return 2019 - $this->yearOfBirth;
    }
    //Prints out name, birth year and age.
    //This can be used as "parent" for other files
    public function print()
    {
        echo "Name: ".$this->firstName." ".$this->lastName;
        echo "<br> Birth year: ".$this->yearOfBirth;
        echo "<br> Age: ".$this->get_currentAge();
    }
}

?>