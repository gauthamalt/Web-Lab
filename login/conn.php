<?php

$host ="localhost";

$usr = "root";

$pass = "cetmca";

$db = "mca28";

$con = new mysqli($host,$usr,$pass,$db); 

if($con-> connect_errno){

    echo "Failed to connect (".$con -> connect_error.")";

}
else{

    echo"Connection successfull";
}

?>