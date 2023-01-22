<?php

$username = "root";
$pass = "";
$server = "localhost";
$db = "login";

$con = mysqli_connect($server,$username,$pass,$db);

if(!$con){

    die("connection Failed".mysqli_connect_error());

}
 //echo "Connection succesfull";

?>