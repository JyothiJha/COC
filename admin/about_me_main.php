<?php
require_once "user_auth.php";
$title="About me";
require_once "header.php";
require_once "db.php";

$email = $_SESSION['user_email'];
$about_me = $dbcon->query("SELECT * FROM about WHERE amail='$email'");
$result = $about_me -> fetch_assoc();
$_SESSION['id'] = $result['id'];
?>

<div class="card text-dark mb-3">
	<div class="card-header bg-success text-center"><h3>About Me</h3></div>
		<div class="card-body">
		  	<?php if(isset($_SESSION['about_data_success'])){ ?>	
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong><?=$_SESSION['about_data_success']?></strong>
				  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    	<span aria-hidden="true">&times;</span>
				  	</button>
				</div>

	  		<?php }
	  			unset($_SESSION['about_data_success']);
	  		?>

			<table class="table table-bordered text-center">
				<tr>
					<td>NAME</td>
					<td><?=$result['name']?></td>
				</tr>
				<tr>
					<td>HOBBIES</td>
					<td><?php
                        if($result['hobby']==NULL)
                            echo("Enter Hobbies");
                        else  
                            echo($result['hobby']);?></td>
				</tr>
				<tr>
					<td>AGE</td>
					<td><?php
                        if($result['age']==NULL)
                            echo("Enter Age");
                        else  
                            echo($result['age']);?></td>
				</tr>
				<tr>
					<td>HEIGHT</td>
					<td><?php
                        if($result['height']==NULL)
                            echo("Enter Height");
                        else  
                            echo($result['height']);?></td>
				</tr>
				<tr>
					<td>WEIGHT</td>
					<td><?php
                        if($result['weight']==NULL)
                            echo("Enter Weight");
                        else  
                            echo($result['weight']);?></td>
				</tr>
				<tr>
					<td>GENDER</td>
					<td><?php
                        if($result['gender']==NULL)
                            echo("Enter Gender");
                        else  
                            echo($result['gender']);?></td>
				</tr>
			</table>
		<a class="btn btn-block btn-success" href="about_me.php">Change</a>
	</div>
</div>

<?php 
    require_once "footer.php";
?>