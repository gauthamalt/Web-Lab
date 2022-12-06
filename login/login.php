<?php
    include 'conn.php';
    if(isset($_POST['submit'])){
    

    // echo "<br>".$_POST['usr'];

        $usr = $_POST['usr'];

        $pass = $_POST['pass'];

        $res = $con -> query("INSERT INTO `login`(`name`, `password`) VALUES ($usr,$pass)");

        // mysqli_query($con,"insert into login('name','password') values(name,pass)");

    }





?>




<html>

    <head>
        
    </head>

    <body>


        <form method="POST" action="">
        <label>Username</label>
        <input type="text" name="usr">
        <label>password</label>
        <input type="text" name="pass">  
        <input type="submit" value="Login" name="submit"> 
        </form>
    </body>

</html>