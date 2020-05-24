<?php
print_r($_POST);
echo "Username-".$_POST["username"]."<br>";
echo "Password-".$_POST["password"]."<br>";

if($_POST["username"]=="komal" && $_POST["password"]=="1994")
{
    echo "You can login";

}
else
{
    echo "username or password incorrect";  
}
?>
