<?php
require_once "db.php"; 

$id = base64_decode($_GET['id']);
$result = $dbcon->query("UPDATE users SET status=1 WHERE id=$id");
header('location: users.php');
?>