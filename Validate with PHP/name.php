<?php

    $username = $_REQUEST['name'];


if ($username=="")
{
    echo "Name can not be empty";
}


else {$words = explode(' ',$username);

if (!ctype_alpha($username[0])) 
{
    echo "Name must start with a letter";
}
else if (count($words)<2)
{
    echo "At least two words need ";
}

else {echo "Form submitted";}



}






?>