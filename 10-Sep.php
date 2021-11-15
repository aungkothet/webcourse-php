<?php
class Student
{
    public $firstName;
    public $lastName;
    public $age;
    public $gender;

    public function __construct($firstName, $lastName, $gender)
    {
        $this->firstName = $firstName;
        // $this->age = $age;
        $this->lastName = $lastName;
        $this->gender = $gender;
    }

    public function getFullName()
    {
        $fullName = $this->firstName . ' ' . $this->lastName;
        return $fullName;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function printStudentData()
    {
        echo "Name is " . $this->getFullName() . "<br>";
        echo "Age is " . $this->age . "<br>";
        echo "Gender is " . $this->gender . "<br>";
    }
}
$studentOne = new Student("Andrew", "Thomson", "male");
$studnetName = $studentOne->getFullName();
var_dump($studentOne->age);
// echo $studnetName;

$studentOne->printStudentData();
$studentOne->setAge(35);
$studentOne->printStudentData();
var_dump($studentOne->age);