

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="index.php" method = "POST">
    Employee Name : <input type ="text" name ="employeeName">
    <br/>
    Basic Amount: <input type ="text" name ="basicAmount">
    <br/>
    House Rent: <input type ="text" name ="houseRent">% of basic amount
    <br/>
    Medical Cost: <input type ="text" name ="medicalCost">% of basic amount
    <br/>
    <input type="submit" value ="Show" name ="show">
    <br/>
</form>


</body>
</html>

<?php

if (isset($_POST['employeeName'])&& isset($_POST['basicAmount'])&& isset($_POST['houseRent'])&& isset($_POST['medicalCost']))
{
    require ('employeesalary.php');

    $anEmployee= new EmployeeSalary();

    $anEmployee->setEmployeeName($_POST['employeeName']);
    $anEmployee->setBasicAmount($_POST['basicAmount']);
    $anEmployee->setHouseRent($_POST['houseRent']);
    $anEmployee->setMedicalCost($_POST['medicalCost']);

    echo "Employee Name :" .$anEmployee->getEmployeeName();
    echo "<br>";
    echo "Basic Amount :" .$anEmployee->getBasicAmount();
    echo "<br>";
    echo "House Rent(tk):" .$anEmployee->calculateHouseRent();
    echo "<br>";
    echo "Medical Cost(tk)" .$anEmployee->calculateMedicalCost();
    echo "<br>";
    echo "Total Salary :" .$anEmployee->calculateTotal();

}


?>