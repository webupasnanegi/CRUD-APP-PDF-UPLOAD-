<?php
$servername =  "localhost";
$username = "root";
$password = "";
$dbname = "responsiveform3";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn)
{
    // echo  "Connect Ok";
}
else
{
    echo  "Connection failed" . mysqli_connect_error();
}

?>