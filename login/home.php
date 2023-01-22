<?php
 

session_start();

echo "Hi ".$_SESSION['name'];

?>

<html>

    <form action = "logout.php">
    <input type="submit" value="logout">
</form>

</html>