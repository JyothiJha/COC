<?php
session_start();
require_once 'db.php'; 

$id = base64_decode($_GET['id']);
$dbcon->query("DELETE FROM counting WHERE id=$id");
$_SESSION['daily_delete'] = 'Delete Successfully!';
header('location: daily.php');
?>