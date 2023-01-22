
<?php

session_start();

include 'con.php';

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $pass = $_POST["password"];



    $q = "select * from user where username = '$username'";
    $res = mysqli_query($con,$q);

    $row = mysqli_fetch_assoc($res);

    if(mysqli_num_rows($res)>0){

        if($row['password']==$pass){

        $_SESSION['name'] = $username;

        header("location:home.php");
        }


    }
    else{

        echo "username or password is invalid";

    }


}

?>


<html>
    <head></head>
    <body>
            <form action =" " method ="post">
                <label>Username</label>
                <input type ="text" name = "username">
                <label>Password</label>
                <input type ="password" name = "password">
                <button name="submit">Submit</button>
                </form>
    </body>

</html>