<?php require_once "db.php"; ?>
<!doctype html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <title><?=$title?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
        
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../front_end_assets/css/fontawesome-all.min.css">
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <div id="wrapper">

            <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                   
                    <div class="user-box" style="margin-top: 0; padding-top: 1rem;">
                        <div class="user-img">

                <?php
                    $email_for_photo = $_SESSION['user_email'];
                    $query_for_photo = $dbcon->query( "SELECT photo FROM users WHERE email='$email_for_photo'");
                    $photo_from_db   = $query_for_photo -> fetch_assoc();
                 ?>

                            <img src="image/users/<?=$photo_from_db['photo']?>" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        </div>
                        <h5><a href="#"><?= $_SESSION['user_name']?></a> </h5>
                        <p class="text-muted"><?=$_SESSION['user_email']?></p>
                    </div>

                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li>
                                <a href="index.php">
                                    <i class="fi-air-play"></i> <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="users.php"><i class="fas fa-users-cog"></i>
                                    <span class="badge badge-danger badge-pill float-right">
                                        <?php
                                        $result = $dbcon->query("SELECT COUNT(*) AS total_users FROM users");
                                        $row = $result->fetch_assoc();
                                        echo $row['total_users']; 
                                        ?>
                                    </span> 
                                    <span> Users </span> 
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="far fa-address-card"></i>  <span> About me </span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="about_me_main.php">About Me</a></li>
                                    <li><a href="about_me.php">About me Update</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fas fa-book"></i> 
                                 
                                <span> MENU </span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="menu.php">VIEW MENU</a></li>
                                    <li><a href="menu_edit.php">ADD ITEMS</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-air-play"></i>
                               
                                    <span> MY DAILY ROUTINE</span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="daily.php">ALL UPDATES</a></li>
                                    <li><a href="daily_addon.php">ADD UPDATES</a></li>
                                </ul>
                            </li>

                        </ul>

                    </div>

                    <div class="clearfix"></div>

                </div>

            </div>

            <div class="content-page">

                <div class="topbar">

                    <nav class="navbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="image/users/<?=$photo_from_db['photo']?>" alt="user" class="rounded-circle"> <span class="ml-1"><?=$_SESSION['user_name']?> <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">

                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <a href="profile.php" class="dropdown-item notify-item">
                                        <i class="fi-head"></i> <span>My Account</span>
                                    </a>

                               
                                    <a href="logout.php" class="dropdown-item notify-item">
                                        <i class="fi-power"></i> <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <h4 class="page-title-main"><?=$title?></h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active"><?=$title?></li>
                                </ol>
                            </li>

                        </ul>

                    </nav>

                </div>

                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">