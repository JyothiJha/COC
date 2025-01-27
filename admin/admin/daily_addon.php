<?php
ob_start(); 
require_once "user_auth.php";
$title="Add DAILY COUNT";
require_once "header.php";
require_once "db.php";

$email = $_SESSION['user_email'];
if(isset($_POST['submit'])){
	$name       = $_POST['name'];
	$type       = $_POST['type'];
	$calorie    = $_POST['calorie'];
	if(!empty($name) &&!empty($type) && !empty($calorie)){
		$work_insert = $dbcon->query("INSERT INTO counting(name,type,calorie,cmail) VALUES('$name','$type','$calorie','$email')");
		if($work_insert){
			$_SESSION['counting_add_success'] = "Item added Successfully!";
			header('location: daily.php');
			ob_end_flush();
		}
	}
}
?>



<div class="card text-dark mb-3" >
	<div class="card-header bg-success text-center "><h2>Add Items</h2></div>
	<div class="card-body">
		<form action="" method="post" >
			<div class="form-group">
				<label for="project_name">Item Name</label>
				<input type="text" class="form-control" name="name" placeholder="Enter Item Name">
			</div>
			<div class="form-group">
				<label for="project_catagory">Category</label>
				<input type="text" class="form-control" name="type" placeholder="Breakfast or Lunch or Dinner">
			</div>
			<div class="form-group">
				<label for="project_catagory">Calories</label>
				<input type="text" class="form-control" name="calorie" placeholder="Calories in Item">
			</div>
			<div class="form-group">
				<input class="btn btn-block btn-success" type="submit" value="Add" name="submit">
			</div>
		</form>
	</div>
</div>

<?php 
    require_once "footer.php";
?>