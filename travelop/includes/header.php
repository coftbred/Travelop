<?php 
	include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/bootstrap/bootstrapxxx.min.css">
    <link rel="stylesheet" href="./css/utility.css">
    <link rel="stylesheet" href="./css/index.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Travelop</title>
</head>
<body>
<div class="super-container">
    <header>
        <div class="top-bar">
            <div class="container">
                <div class="wrapper">
                    <div class="phone">+8801747015688</div>
                    <div class="social">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-github"></i>
                        <i class="fab fa-linkedin"></i>
                    </div>
                    <div class="login">
                    <?php if ($_SESSION['loggedin'] == true): ?>  
                        <a href="#"><i class="fas fa-user"></i> <?php echo $_SESSION['user_name']; ?> </a>             
                    <?php else: ?>
                        <a href="login.php"><i class="fas fa-user"></i>Log In</a>
                    <?php endif; ?>    
                    <span></span>
                    <?php if($_SESSION['loggedin'] == true): ?>
                    <a href="logout.php">Logout</a>
                    <?php else: ?>
                        <a href="signup.php"> <i class="fas fa-registered" aria-hidden="true"></i>Register</a>
                    <?php endif; ?> 
                        <!-- <a href="login.php">Login</a>
                        <span></span>
                        <a href="signup.php">Registration</a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="main-nav">
            <div class="container">
                <div class="wrapper">
                    <div class="logo">
                        <i class="fa fa-map-marker-alt" aria-hidden="true"></i>
                        <h1>Travelop</h1>
                    </div>
                    <div class="nav">
                        <style> a{text-decoration: none;} </style>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="offers.php">Offer</a></li>
                            <li><a href="blog.php">News</a></li>
                            <?php 
                            if($_SESSION['loggedin'] == true): ?>
                                <?php if($_SESSION['user_role'] == 0):?> 
                                    <li><a href="manage.php">Manage</a></li>
                              <?php endif;  ?>       
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="search">
                        <i class="fa fa-search"></i>
                        <div class="input">
                            <span> <button class="btn btn-outline-warning btn-block" type="text">Search</button><input type="text"> </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>