<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 2/9/15
 * Time: 12:34 PM
 */

class Person {

    private $firstName;

    private $middleName;

    private $lastName;


    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }


    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }


    public function getFullName()
    {
        return ($this-> firstName." ".$this-> middleName." ".$this->lastName);
    }

    public function getReverseFullName()
    {
        $fullName=$this->getFullName();

        return strrev($fullName);
    }

}