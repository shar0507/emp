<?php

$con=new mysqli("localhost", "root", "", "employee", 4306);
if(!$con){
    die(mysqli_error($con));
}