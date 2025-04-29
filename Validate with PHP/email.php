<?php
$email =$_REQUEST['email'];


if($email=="")
{
    echo "Email can not be empty";
}
else
{

    $atPos = strpos($email, '@');
    $dotPos = strrpos($email, '.');

    if ($atPos === false || $dotPos === false || $atPos > $dotPos || $atPos == 0 || $dotPos == strlen($email) - 1) 
    {
        echo "Invalid email format";
    } else 
    {
        echo "Form submitted";
    }

}



?>