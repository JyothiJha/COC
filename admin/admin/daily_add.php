<?php
session_start();
require_once "db.php"; 


$id = base64_decode($_POST['id']);
$name       = $_POST['name'];
$type       = $_POST['type'];
$calorie    = $_POST['calorie'];

$work_insert = $dbcon->query("INSERT INTO counting(name,type,calorie) VALUES ( SELECT ('$name','$type','$calorie') FROM menu WHERE id=$id)");
		if($work_insert){
			$_SESSION['menu_add_success'] = "Item added Successfully!";
			header('location: menu.php');
			ob_end_flush();
        }
?>