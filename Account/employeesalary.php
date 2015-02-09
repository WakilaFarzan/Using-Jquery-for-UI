<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 2/9/15
 * Time: 3:08 PM
 */

class EmployeeSalary {

    private $employeeName;

    private $basicAmount;

    private $houseRent;

    private $medicalCost;


    public function setEmployeeName($employeeName)
    {
        $this->employeeName=$employeeName;

    }

    public function setBasicAmount($basicAmount)
    {
        $this->basicAmount=$basicAmount;
    }

    public function setHouseRent($houseRent)
    {
        $this->houseRent=$houseRent;
    }

    public function setMedicalCost($medicalCost)
    {
        $this->medicalCost=$medicalCost;
    }

    public function getEmployeeName()
    {
        return $this->employeeName;
    }

    public function getBasicAmount()
    {
        return $this->basicAmount;

    }

    public function calculateHouseRent()
    {
        return $this->basicAmount*($this->houseRent/100);
    }

    public function calculateMedicalCost()
    {
        return $this->basicAmount*($this->medicalCost/100);
    }

    public function calculateTotal()
    {
        return $this->getBasicAmount()+$this->calculateHouseRent()+$this->calculateMedicalCost();
    }
} 