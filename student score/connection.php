<?php
$con = mysqli_connect("localhost","root","","student_db");

if(!$con){

    die("connection failed".mysqli_connect_error());

}
// echo"connection succesfull";
?>