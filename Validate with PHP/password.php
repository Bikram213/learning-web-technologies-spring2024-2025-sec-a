<?php

$password = $_REQUEST['Password'];

if ($password=="")
{
    echo "Give a password";
}

else if (strlen($password)<9)
{
    echo "password should be at least 8 char";
}



else{echo "Submitted";}
?>