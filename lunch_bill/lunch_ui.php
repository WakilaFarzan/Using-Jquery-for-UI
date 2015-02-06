

<form action="lunch_ui.php" method = "POST">
    Rice : <input type ="text" name ="rice">Unit (20tk/unit)
    <br/>
    Vegetable: <input type ="text" name ="vegetable"> Unit (30tk/unit)
    <br/>
    Fish: <input type ="text" name ="fish"> Unit (80tk/unit)
    <br/>
    Meat: <input type ="text" name ="meat"> Unit (120tk/unit)
    <br/>
    Vat: <input type ="text" name ="vat"> % of Gross Total
    <br/>
    <input type="submit" value ="Show Bill" name ="showbill">
    <br/>
</form>


<?php

    if(isset($_POST['rice'])&& isset($_POST['vegetable'])&& isset($_POST['fish'])&& isset($_POST['meat']) && isset($_POST['vat']))
    {
        require ('lunchbill.php');
        $bill= new LunchBill();
        $bill->rice=$_POST['rice'];
        $bill->vegetable=$_POST['vegetable'];
        $bill->fish=$_POST['fish'];
        $bill->meat=$_POST['meat'];
        $bill->vat=$_POST['vat'];

        echo "Gross Total:" .$bill->grossTotal();

        echo "<br>";

        echo "Payable Amount :" .$bill->payableAmount();
    }
