<?php
session_start();
require_once 'db.php'; 

$id = base64_decode($_GET['id']);
$dbcon->query("DELETE FROM menu WHERE id=$id");
$_SESSION['menu_delete'] = 'Delete Successfully!';
header('location: menu.php');
?>