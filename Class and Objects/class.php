<?php
// Define a class called 'Student'
class Student {
    // Properties
    public $name;
    public $rollNo;
    public $course;
    public $grade;

    // Constructor
    public function __construct($name, $rollNo, $course, $grade) {
        $this->name = $name;
        $this->rollNo = $rollNo;
        $this->course = $course;
        $this->grade = $grade;
    }

    // Method to display student details
    public function displayDetails() {
        echo "Name: $this->name, Roll No: $this->rollNo, Course: $this->course, Grade: $this->grade<br>";
    }
}

// Create 10 Student objects
$student1 = new Student("Arun Kumar", 101, "BCA", "A");
$student2 = new Student("Divya Sharma", 102, "BBA", "B+");
$student3 = new Student("Ravi Raj", 103, "B.Sc", "A+");
$student4 = new Student("Priya Singh", 104, "B.Com", "A");
$student5 = new Student("Manoj Das", 105, "BA", "B");
$student6 = new Student("Sneha Patel", 106, "BCA", "A+");
$student7 = new Student("Rahul Nair", 107, "B.Tech", "A");
$student8 = new Student("Meena Thomas", 108, "BBA", "B+");
$student9 = new Student("Karan Mehta", 109, "B.Sc", "A");
$student10 = new Student("Anjali Verma", 110, "B.Com", "A+");

// Display all 10 student details
$student1->displayDetails();
$student2->displayDetails();
$student3->displayDetails();
$student4->displayDetails();
$student5->displayDetails();
$student6->displayDetails();
$student7->displayDetails();
$student8->displayDetails();
$student9->displayDetails();
$student10->displayDetails();
?>
