<?php 
require_once "user_auth.php";
$title="FOOD MENU";
require_once "header.php";
require_once "db.php";

$email = $_SESSION['user_email'];
$about_me = $dbcon->query("SELECT * FROM menu WHERE mmail='$email'");
?>

<div class="card text-dark mb-3" >
	<div class="card-header bg-success text-center"><h3>MENU</h3></div>
		<div class="card-body">

		  	<?php if(isset($_SESSION['education_add_success'])){ ?>
						
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong><?=$_SESSION['education_add_success']?></strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

		  	<?php }
		  	unset($_SESSION['education_add_success']);
		  	?>

		  	<?php if(isset($_SESSION['education_update_message'])){ ?>
						
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong><?=$_SESSION['education_update_message']?></strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

		  	<?php }
		  	unset($_SESSION['education_update_message']);
		  	?>

		  	<?php if(isset($_SESSION['education_delete_success'])){ ?>
						
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong><?=$_SESSION['education_delete_success']?></strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>


		  	<?php } 
		  		unset($_SESSION['education_delete_success']);
		  	?>

			<table id='example' class="table table-bordered text-center">
				<thead>
					<tr>
						<th>Item</th>
						<th>Category</th>
						<th>Calories</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>

				<?php foreach ($about_me as $result) {
				?>

					<tr>
						<td><?=$result['name']?></td>
						<td><?=$result['type']?></td>
						<td><?=$result['calorie']?></td>
						<td><div class="btn-group">
						<a class="btn btn-sm btn-danger" href="menu_delete.php?id=<?=base64_encode($result['id'])?>">Delete Item</a>
						</div></td>
					</tr>

					<?php } ?>

				</tbody>

			</table>
			<a class="btn btn-block btn-success" href="menu_edit.php">Add Another Item</a>
		</div>
	</div>

<?php 
    require_once "footer.php";
?>