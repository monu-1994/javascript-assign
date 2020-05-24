<?php
setcookie_start();

if($_setcookie["name"]=="")

{
    header('Location:login1.php');
}

print_r($_setcookie);

?>

Welcome

username is
<?php
echo $_setcookie["name"]

?>