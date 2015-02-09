

<?php


if (isset($_POST['firstName'])&& isset($_POST['middleName'])&& isset($_POST['lastName']))
{

    require ('person.php');

    $aperson= new Person();

    $aperson->setFirstName($_POST['firstName']);

    $aperson->setMiddleName($_POST['middleName']);

    $aperson->setLastName($_POST['lastName']);


    echo $aperson->getFullName();
    echo "<br>";
    echo $aperson->getReverseFullName();

}