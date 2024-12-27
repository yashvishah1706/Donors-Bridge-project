<?php
$servername="localhost";
$username="root";
$password="";
$database="blood_bank";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con)
{
    die("Error in connecting".mysqli_error($con));

}
else
    {
        echo "connection";
    }
?>