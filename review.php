<?php 
ini_set('display errors','1');
include_once('connection.php');
$query = "SELECT * FROM `suggestions`";
$data = mysqli_query($con,$query); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<style>
			#back{
				margin-left:48%;
				margin-right:45%;
			}
			#tab1 {
				margin-left:20%;
				width:60%;
				line-height:40px;
				align-items:center;
				border:1px;
				transition: 0.5s;
			}

			#tab1 td, #tab1 th {
				color: black;
				border: 2px solid #282e34;
				border-radius: 6px;
				padding: 8px;
				transition: 0.5s;
			}
			#tab1 tr:hover {
				background-color: #ddd;
				transition: 0.5s;
			}
		</style>
	<meta name="viewport" content="width=device-width,initial-scale=1">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="parallax.css">
    <link rel="stylesheet" href="sty.css">
	<title> Fetch Data From Database </title> 
	</head> 
	<body> 
	<div class="topnav">
    <nav>
     <h2><div class="mainlogo">COUNT ON <span>CALORIES</span></div></h2> 
     <ul>
      <li><a href="home.html">HOME</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="register.php">Sign Up</a></li>
      <li><a href="review.php">Reviews</a></li>
     </ul>
    </nav>
   </div>
	<h1 class="gt1">FEEDBACKS</h1>
	<table id="tab1"> 
	<tr> 
		</tr> 
			  <th width=60px> S.No. </th> 
			  <th> Name </th> 
			  <th> City </th> 
			  <th> Option </th>
			  <th> Remarks </th>   
		</tr> 
		<?php while($rows=mysqli_fetch_assoc($data)) 
		{ 
		?> 
		<tr> 
            <td><?php echo $rows['id']; ?></td> 
            <td><?php echo $rows['name']; ?></td> 
            <td><?php echo $rows['city']; ?></td> 
			<td><?php echo $rows['opt']; ?></td> 
            <td><?php echo $rows['subject']; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 
	</table> 
	<br>
	<a id='back' href="home.html">Go Back</a>
	<br>
    <br>
<div class="foot">
  <h2 class="ftext">COUNT ON <span>CALORIES</span></h2> 
  <p class="names">PROJECT MADE BY:
    <br><br>AMULYA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BHUVI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; KEERTHANA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; JYOTHI
  </p>
</div>
</body> 
</html>