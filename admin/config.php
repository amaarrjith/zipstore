<?php
$dbhost = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "zipstore";

$conn = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
if(!$conn){
    echo "Connection failed: " . mysqli_connect_error();
}
?>
