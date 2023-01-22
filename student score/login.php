<html>

    <body>

        <h1>Teacher Login</h1>
        <form action ="" method = "post">
            <table>

            <tr>

                    <td><label>NAME</label></td>
                    <td><input type = "text" name = "username"></td>


            </tr>

            <tr>

                    <td><label>PASSWORD</label></td>
                    <td><input type = "password" name = "pass"></td>


            </tr>

            </table>
            <input type = "reset">
            <input type = "submit" name ="submit">
        </form>

    </body>

</html>

<?php

session_start();

include 'connection.php';

if(isset($_POST['submit'])){


        $username = $_POST['username'];
        $pass = $_POST['pass'];


        $login_query = "select * from teacherlogin where username = '$username' and pass = '$pass'";

        $result_login = mysqli_query($con,$login_query);

        if(mysqli_num_rows($result_login)){

            $_SESSION['username'] = $username;

            header('location:homepage.php');

        }
        else{

            echo"<script>alert('Username or password is incorrect');</script>";

        }



}

?>