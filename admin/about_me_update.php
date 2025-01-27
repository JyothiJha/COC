<?php
session_start();
require_once 'db.php'; 

$email = $_SESSION['user_email'];
if(isset($_POST['submit'])){
	$name       = $_POST['name'];	
	$hobby      = $_POST['hobby'];
	$age    	= $_POST['age'];
	$height   	= $_POST['height'];
	$weight    	= $_POST['weight'];
	$gender    	= $_POST['gender'];	
	if(!empty($name) && !empty($hobby) && !empty($age) && !empty($height) && !empty($weight) && !empty($gender) ){
		$about_update = $dbcon->query("UPDATE about SET name='$name',hobby='$hobby',age='$age',height='$height',weight='$weight',gender='$gender' WHERE amail='$email'");
		if($about_update){
			$_SESSION['about_data_success'] = "Data updated successfully!";
			header('location: about_me_main.php');
			ob_end_flush();
		} 
	}
}
?>