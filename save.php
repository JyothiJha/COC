<?php
error_reporting(0);
include('connection.php');
$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];
$opt = $_POST['opt'];
$subject = $_POST['subject'];
$sql = "INSERT INTO `suggestions`(`name`, `email`, `city`, `opt`, `subject`) VALUES ('$name','$email','$city','$opt','$subject')";
$result = mysqli_query($con, $sql);
if($result){
    echo "data submitted";
}
else{
    echo "query failed.......";
}?>