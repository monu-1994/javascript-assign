<?php
Setcookie();

if(isset($_POST['submit']) && $_POST["submit"]=="Login")
{
    //echo "checking";

    if($_POST["username"]=="komal" && $_POST["password"]=="1994")
    {

    echo "you can login";
    $_SETCOOKIE("username","komal",time()+60);

     header('Location:set1.php');
    
    }
    else
    {
        echo"Invalid username or password";
    }
}
    ?>

    <html>
    <form method="POST">
    <input type="text" name="username">
    <input type="password" name="password">
    <input type="submit" name="submit" value="Login">
    </form>
    </html>
