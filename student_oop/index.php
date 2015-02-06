

<form action="index.php" method = "POST">
    First Name : <input type ="text" name ="firstname">
    <br/>
    Last Name : <input type ="text" name ="lastname">
    <br/>
    Registration no : <input type ="text" name ="regno">
    <br/>
    <input type="submit" value ="Show Below" name ="showButton">
    <br/>
</form>


<?php

if (isset($_POST['firstname'])&& isset($_POST['lastname'])&& isset($_POST['regno']))
{
    require ('student.php');
    $student1= new Student;
    $student1->firstName=$_POST['firstname'];
    $student1->lastName=$_POST['lastname'];
    $student1->regNo=$_POST['regno'];

    echo "Full Name:".$student1->getFullName()." Reg no:".$student1->regNo;
}
