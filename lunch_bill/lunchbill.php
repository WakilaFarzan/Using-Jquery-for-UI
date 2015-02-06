<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 2/6/15
 * Time: 3:24 PM
 */

class LunchBill {

    public  $rice;

    public  $vegetable;

    public $fish;

    public $meat;


    public function grossTotal(){

                return ($this->rice*20)+( $this->vegetable*30)+ ($this->fish*80)+( $this->meat*120);
    }

    public function payableAmount()
    {

        return $this->grossTotal()+($this->grossTotal()*$this->vat/100);
    }

} 