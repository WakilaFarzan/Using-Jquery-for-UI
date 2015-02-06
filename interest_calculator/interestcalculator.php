<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 2/6/15
 * Time: 2:48 PM
 */

class InterestCalculator {

    public $amount;

    public $interest;

    public $time;


    public function calculateTotalAmount(){

        return ($this->amount*$this->interest*$this->time)/100 + $this->amount;

    }

} 