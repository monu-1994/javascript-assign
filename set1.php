?php
$_SETCOOKIE ();

if($_SETCOOKIE["name"]=="")

{
    header('Location:set1.php');
}

print_r($_SETCOOKIE);

?>

Welcome

username is
<?php
echo $_SETCOOKIE["name"]

?>