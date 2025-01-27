<?php
require_once "user_auth.php";
ob_start();
$title="Add About Me";
require_once "header.php";
require_once "db.php";

$email = $_SESSION['user_email'];
$data_from_db = $dbcon->query("SELECT * FROM about WHERE amail='$email'");
$about_data = $data_from_db->fetch_assoc();
?>

<div class="row">
    <div class="col-6">
        <div class="card">
			<div class="card-header bg-success text-center"><h2>Change Data</h2></div>
				<div class="card-body">
					<form action="about_me_update.php" method="post">
						<div class="form-group">
							<label for="project_name">NAME</label>
							<input type="text" class="form-control" name="name" value="<?=$about_data['name']?>">
						</div>
						<div class="form-group">
							<label for="project_catagory">HOBBIES</label>
							<input type="text" class="form-control" name="hobby" value="<?php
								if($about_data['hobby']==NULL)
									echo("Enter Hobbies");
								else  
									echo($about_data['hobby']);?>">
						</div>
						<div class="form-group">
							<label for="project_catagory">AGE</label>
							<input type="text" class="form-control" name="age" placeholder="<?php
								if($about_data['age']==NULL)
									echo("Enter Age");
								else  
									echo($about_data['age']);?>">
						</div>
						<div class="form-group">
							<label for="project_catagory">HEIGHT</label>
							<input type="text" class="form-control" name="height" placeholder="<?php
								if($about_data['height']==NULL)
									echo("Enter Height");
								else  
									echo($about_data['height']);?>">
						</div>
						<div class="form-group">
							<label for="project_catagory">WEIGHT</label>
							<input type="text" class="form-control" name="weight" placeholder="<?php
								if($about_data['weight']==NULL)
									echo("Enter Weight");
								else  
									echo($about_data['weight']);?>">
						</div>
						<div class="form-group">
							<label for="project_catagory">GENDER</label>
							<input type="text" class="form-control" name="gender" placeholder="<?php
								if($about_data['gender']==NULL)
									echo("Enter Gender");
								else  
									echo($about_data['gender']);?>">
						</div>
						<div class="form-group">
							<input class="btn btn-block btn-success" type="submit" value="Edit Data" name="submit">
						</div>
					</form>
			  	</div>
			</div>       			
        </div>
	    <div class="col-4 mx-auto">
		
			<?php if(isset($_SESSION['about_photo_emty'])){ ?>

				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong><?=$_SESSION['about_photo_emty']?></strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

			<?php }
			  	unset($_SESSION['about_photo_emty']);
			?>

			<?php if(isset($_SESSION['about_photo_size'])){ ?>

				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong><?=$_SESSION['about_photo_size']?></strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				  
			<?php }
			  	unset($_SESSION['about_photo_size']);
		  	?>

			<?php if(isset($_SESSION['about_photo_extension'])){ ?>			
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong><?=$_SESSION['about_photo_extension']?></strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

			<?php }
				unset($_SESSION['about_photo_extension']);
			?>

			<?php if(isset($_SESSION['about_photo_success'])){ ?>
						
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong><?=$_SESSION['about_photo_success']?></strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				
			<?php }
				unset($_SESSION['about_photo_success']);
			?>
					
		<h3>Change Profile Photo?</h3>
		<a href="profile.php"><button class="btn btn-block btn-success">Change Photo</button></a>
	</div>
</div>

<?php 
    require_once "footer.php";
?>