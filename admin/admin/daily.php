<?php 
require_once "user_auth.php";
$title="My Daily Calories Count";
require_once "header.php";
require_once "db.php";

$email = $_SESSION['user_email'];
$all_works = $dbcon->query("SELECT * FROM counting WHERE cmail='$email'");
?>

<div class="card mb-3" >
	<div class="card-header bg-success text-center"><h2>DAILY COUNT</h2></div>
		<div class="card-body">
			
			<?php if(isset($_SESSION['best_works_success'])){ ?>
						
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong><?=$_SESSION['best_works_success']?></strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>


			<?php }
				unset($_SESSION['best_works_success']);
			?>

			<?php if(isset($_SESSION['best_works_delete'])){ ?>
						
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong><?=$_SESSION['best_works_delete']?></strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<?php }
				unset($_SESSION['best_works_delete']);
			?>

			<?php if(isset($_SESSION['best_works_update_success'])){ ?>
						
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong><?=$_SESSION['best_works_update_success']?></strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<?php }
				unset($_SESSION['best_works_update_success']);
			?>

			<table id="example" class="table table-bordered text-center">
				<thead>
					<tr>
						<th>Item Name</th>
						<th>Category</th>
						<th>Calories</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>

				<?php foreach ($all_works as $result) { ?>

				<tr>
					<td><?=$result['name']?></td>
					<td><?=$result['type']?></td>
					<td><?=$result['calorie']?></td>
					<td>
						<div class="btn-group">
							<a class="btn btn-sm btn-danger" href="daily_delete.php?id=<?=base64_encode($result['id'])?>">Delete</a>
						</div>
					</td>
				</tr>

				<?php } ?>
			
			</tbody>
		</table>
		<a class="btn btn-block btn-success mt-2" href="daily_addon.php">Add Another item</a>
	</div>
</div>

<?php 
    require_once "footer.php";
?>
