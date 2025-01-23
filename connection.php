<?php
//CONNECTION PART
$server = "localhost";
$username = "root";
$password = "";
$dbname = "coc";
$con = mysqli_connect($server, $username, $password, $dbname);

if(!$con){
    echo "not connected";
}
?>