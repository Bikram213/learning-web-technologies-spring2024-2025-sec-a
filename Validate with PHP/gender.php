<?php
   
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (!isset($_POST['Gender']) || $_POST['Gender'] == "") 
    {
            echo "Select a gender";
    } 
    else 
    {
        echo "Submitted";
    }
}
?>