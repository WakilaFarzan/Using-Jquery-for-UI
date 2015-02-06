
<form action="interest_calc.php" method = "POST">
    Principal Amount : <input type ="text" name ="amount">
    <br/>
    Annual Interest Rate: <input type ="text" name ="interest"> %
    <br/>
    Time Period : <input type ="text" name ="time"> Year
    <br/>
    <input type="submit" value ="Calculate" name ="calculate">
    <br/>
</form>


<?php

    if(isset($_POST['amount'])&& isset($_POST['interest'])&& isset($_POST['time']))
    {
        require ('interestcalculator.php');
        $interestCalculation= new InterestCalculator();
        $interestCalculation->amount=$_POST['amount'];
        $interestCalculation->interest=$_POST['interest'];
        $interestCalculation->time=$_POST['time'];

        echo "Total :" .$interestCalculation->calculateTotalAmount();
    }