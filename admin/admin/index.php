<?php
require_once "user_auth.php";
$title = "Dashboard";

require_once "header.php";
require_once "db.php";
// user part query
$email = $_SESSION['user_email'];

$query = "SELECT * FROM users WHERE email='$email'";
$result = $dbcon -> query($query);
$row = $result -> fetch_assoc();

$about_me = $dbcon->query("SELECT * FROM about WHERE amail='$email'");
$result = $about_me -> fetch_assoc();

$all_works = $dbcon->query("SELECT * FROM counting");
?>


    <div class="row">
                            <div class="col-sm-12">
                                <!-- meta -->
                                <div class="profile-user-box card-box bg-info">
                                    <div class="row text-dark">
                                        <div class="col-sm-6">
                                            <span class="float-left mr-2"><img src="image/users/<?=$row['photo']?>" alt="profile_photo" width='100' class="avatar-xl rounded-circle"></span>
                                            <div class="media-body text-white">
                                                <h4 class="mt-1 mb-1 text-white font-18">USER NAME: <?=$result['name']?></h4>
                                                <p class="font-13">USER EMAIL: <?=$row['email']?></p>
                                                <p class="mb-0">STATUS: active <i class="fa fa-circle text-success"></i></p>
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="text-right">
                                                <a type="button" href="profile.php" class="btn btn-light waves-effect">
                                                    <i class="mdi mdi-account-settings mr-1"></i> Edit Profile
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card-box">                                    
                                    <h4 class="header-title mt-1">Personal Information</h4>
                                    <hr>
                                    <h3 class="header-title mt-1"><?=$result['name']?></h3>
                                    <p>HOBBIES: <?php
                                    if($result['hobby']==NULL)
                                      echo("Enter Hobbies");
                                    else  
                                      echo($result['hobby']);
                                    ?></p>
                                    <br>
                                    <p>AGE: <?php
                                    if($result['age']==NULL)
                                      echo("Enter Age");
                                    else  
                                      echo($result['age']);?></p>
                                    <p>GENDER: <?php
                                    if($result['gender']==NULL)
                                      echo("Enter Gender");
                                    else  
                                      echo($result['gender']);?></p>
                                    <p>WEIGHT: <?php
                                    if($result['weight']==NULL)
                                      echo("Enter Weight");
                                    else  
                                      echo($result['weight']);?></p>
                                    
                                    <br>
                                    <a class="btn btn-sm btn-block btn-success" href="about_me.php">Edit</a>
                                </div>
                              </div>

                                


                            <div class="col-xl-8">

                                <div class="row">

                                    <div class="col-sm-4">
                                        <div class="card-box tilebox-one">
                                            <i class="mdi mdi-account-multiple-outline float-right text-muted"></i>
                                            <h6 class="text-muted text-uppercase mt-0">Users</h6>
                                            <h2 class="" data-plugin="counterup">                                        
                                              <?php
                                              $result = $dbcon->query("SELECT COUNT(*) AS total_users FROM users");
                                              $row = $result->fetch_assoc();
                                              echo $row['total_users']; 
                                              ?>
                                          </h2>
                                        </div>
                                        <a class="btn btn-sm btn-block btn-success" href="users.php">all users</a>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="card-box tilebox-one">
                                            <i class="fas fa-book-open float-right text-muted"></i>
                                            <h6 class="text-muted text-uppercase mt-0">Menu Items</h6>
                                            <h2 class=""><span data-plugin="counterup">
                                              <?php
                                              $email = $_SESSION['user_email'];
                                              $result = $dbcon->query("SELECT COUNT(*) AS menu_items FROM menu WHERE mmail='$email'");
                                              $row = $result->fetch_assoc();
                                              echo $row['menu_items']; 
                                              ?>
                                              </span></h2>
                                        </div>
                                        <a class="btn btn-sm btn-block btn-success" href="menu.php">View Menu</a>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="card-box tilebox-one">
                                            <i class="dripicons-message  float-right text-muted"></i>
                                            <h6 class="text-muted text-uppercase mt-0">Total Calories</h6>
                                            <h2 class="" data-plugin="counterup">
                                              <?php
                                              $email = $_SESSION['user_email'];
                                              $result = $dbcon->query("SELECT SUM(calorie) AS total_cal FROM counting WHERE cmail='$email'");
                                              $row = $result->fetch_assoc();
                                              echo $row['total_cal']; 
                                              ?>
                                              </h2>
                                        </div>
                                        <a class="btn btn-sm btn-block btn-success" href="daily.php">View Updates</a>
                                    </div>

                                </div>
         
                                <div class="card-box">
                                    <h4 class="header-title mb-3">DAILY UPDATES</h4>

                                    <table id="example" class="table table-bordered text-center">
                                          <thead>
                                            <tr>
                                              <th>ITEMS</th>
                                              <th>CALORIES CONSUMED</th>
                                              <th>Average</th>
                                            </tr>
                                          </thead>
                                          <tbody>

                                        <?php foreach ($all_works as $result) {
                                            
                                            ?>


                                            <tr>
                                              <td><?php
                                              $email = $_SESSION['user_email'];
                                              $result = $dbcon->query("SELECT COUNT(calorie) AS total_item FROM counting WHERE cmail='$email'");                                              $row = $result->fetch_assoc();
                                              echo $row['total_item']; 
                                              ?></td>

                                              <td><?php
                                              $email = $_SESSION['user_email'];
                                              $result = $dbcon->query("SELECT SUM(calorie) AS total_cal FROM counting WHERE cmail='$email'");
                                              $row = $result->fetch_assoc();
                                              echo $row['total_cal']; 
                                              ?></td>

                                              <td><?php
                                              $email = $_SESSION['user_email'];
                                              $result = $dbcon->query("SELECT AVG(calorie) AS total_cal FROM counting WHERE cmail='$email'");
                                              $row = $result->fetch_assoc();
                                              echo $row['total_cal']; 
                                              ?></td>

                                              <td style="display:none;">
                                                <div class="btn-group">
                                                  <a class="btn btn-sm btn-warning" href="best_works_update.php?id=<?=base64_encode($result['id'])?>">Update</a>
                                                  <a class="btn btn-sm btn-danger" href="best_works_delete.php?id=<?=base64_encode($result['id'])?>">Delete</a>
                                                </div>
                                              </td>
                                            </tr>

                                          <?php } 
                                        ?>
                                          </tbody>
                                          

                                        </table>
                                        <a class="btn btn-block btn-success mt-2" href="best_works.php">See All</a>

                            </div>

                        </div>

<?php 
    require_once "footer.php";
?>