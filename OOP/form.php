
<form action="form.php" method = "POST">
    Id : <input type ="text" name ="id">
    <br/>
    Name : <input type ="text" name ="name">
    <br/>
    Salary : <input type ="text" name ="salary">
    <br/>
    <input type="submit" value ="Show Below" name ="showButton">
    <br/>
</form>




<?php

if (isset($_POST['id']) && isset($_POST['name']) &&isset($_POST['salary']))
{
    require ('employee.php');
    $anEmployee= new Employee();
    $anEmployee->id= $_POST['id'];
    $anEmployee->name= $_POST['name'];
    $anEmployee->salary= $_POST['salary'];
    echo "Id: ", $anEmployee->id, ", Name: ",$anEmployee->name, " , Salary: ", $anEmployee->salary;
}
?>