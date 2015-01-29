<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 1/26/15
 * Time: 11:09 AM
 */

class Course {

    function  __set($name,$value){
        //echo "Hi";
//        var_dump($name);
//        var_dump($value);
    }

    function __get($name){

        //echo "hello";
        echo $name;

    }

function  __call($name,$arguments){
    echo "hello";
    var_dump($name);
    var_dump($arguments);
}
} 