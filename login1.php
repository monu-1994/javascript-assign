<?php
session_start();

if(isset($_POST['submit']) && $_POST["submit"]=="Login")
{
    echo "checking";

    if($_POST["username"]=="komal" && $_POST["password"]=="1994")
    {

    echo "you can login";
    $_SESSION["name"]=$_POST["username"];

    //header('Location:welcome.php');
    
    }
    else
    {
        echo"Invalid username or password";
    }
}
    ?>

    <html>
    <form method="POST" action="welcome.php">
    <input type="text" name="username">
    <input type="password" name="password">
    <input type="submit" name="submit" value="Login">
    </form>
    </html>
