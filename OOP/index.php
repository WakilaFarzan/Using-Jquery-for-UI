<?php

            if (isset($_POST["id"]) && isset($_POST["name"]) &&isset($_POST["salary"]))
            {
                $id = $_POST["id"];
                $name = $_POST["name"];
                $salary = $_POST["salary"];
                echo "Id: ", $id, ", Name: ", $name, " , Salary: ", $salary;
            }
