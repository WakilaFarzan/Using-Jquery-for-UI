<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method = "POST">
        First Name : <input type ="text" name ="firstName">
        <br/>
        Middle Name: <input type ="text" name ="middleName">
        <br/>
        Last Name: <input type ="text" name ="lastName">
        <br/>
        <input type="submit" value ="Show Names" name ="showbill">
        <br/>
    </form>


</body>
</html>



<?php
require ('person.php');

if (isset($_POST['firstName']) && isset($_POST['middleName']) && isset($_POST['lastName']))
{

    //require ('person.php');

    $aPerson= new Person();

    $aPerson->setFirstName($_POST['firstName']);

    $aPerson->setMiddleName($_POST['middleName']);

    $aPerson->setLastName($_POST['lastName']);


    echo $aPerson->getFullName();
    echo "<br>";
    echo $aPerson->getReverseFullName();

}
?>