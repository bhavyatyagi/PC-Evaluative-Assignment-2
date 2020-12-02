<?php
$dbHost     = "localhost";
$dbUsername = "id15560845_7y4g1";
$dbPassword = "Bhavya@tyagi16";
$dbName     = "id15560845_pc_assignment";

$dbConnection=mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);
if(mysqli_connect_error($dbConnection)){
    echo "Some error occured while connecting to database...";
    die();
}

?>
