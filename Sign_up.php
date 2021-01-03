<?php

	session_start();
	
	if(isset($_SESSION['username'])) {
		header("location:");	
	}

$servername ="localhost";
$username ="root";
$password ="";
$dbname ="vesture";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
	die("Connection Error");
}

if(isset($_POST['submit'])) {
	

	
	//retreving values from form
	$username = $_POST['username'];
	$password = password_hash($_POST['password'],PASSWORD_DEFAULT);   //Password encription method
	$email = $_POST['email'];
	$telephone = $_POST['telephone'];
	$address = $_POST['address'];
	
		
	
	$sql = "INSERT INTO user (username,password,email,telephone,address)
			VALUES('$username','$password' ,'$email' ,'$telephone', '$address')";
			
	if(mysqli_query($conn,$sql)===TRUE) {
		$_SESSION['username'] = $username;
		echo "User Registered Successfully!";
	} else {
		echo mysqli_error($conn);
	}
	
}


?>

<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>VESTURE</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
                <div class="row">
                    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.php"><img src="images/logo.png" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="index.php">Home</a> </li>
                                        <li> <a href="about.php">About</a> </li>
                                        <li><a href="categories.php">Categories</a></li>
                                        <li><a href="contact.php">Contact Us</a></li>
                                        <li class="last">
                                            <a href="#"><img src="images/search_icon.png" alt="icon" /></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-6">
                        <div class="location_icon_bottum">
                            <ul>
                                <li><a href="login.php">Login/Sign up</a></li>
                                <li><a href="mycart.php" ><img src="images/cart.png">My Cart</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->
    <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Sign Up</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- signup -->
    <div class="Sign_up">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    
             <div class="row">
                 <div class="col-md-6 offset-md-3">
							<form method="post" name="register_form"  action="" onsubmit="validateForm();">
							<div id="response"></div>
							
							<div class="form-group">
							<label><b>Username</b></label>
							<input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
							</div>
							
							<div class="form-group">
							<label><b>Password</b></label>
							<input type="password" name="password" id="password" class="form-control" placeholder="Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
							</div>
							
							<div class="form-group">
							<label><b>Confirm password</b></label>
							<input type="password" name="password2" id="password2" class="form-control" placeholder="Confirm Password" required>
							</div>
							<div class="form-group">
							<label><b>Email Address</b></label>
							<input type="email" name="email" id="email" class="form-control" placeholder="Email Address" required>
							</div>
							<div class="form-group">
							<label><b>Telephone</b></label>
							<input type="text" name="telephone" id="telephone" class="form-control" placeholder="Telephone" required>
							</div>
							<div class="form-group">
							<label><b>Address</b></label>
							<input type="text" name="address" id="address" class="form-control" placeholder="Address" required>
							</div>
							
							<button type ="submit" class="btn btn-default" name="submit">Submit</button>
							</form>	
				 </div>
			 </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end signup -->

    <!-- footer -->
    <footer>
        <div id="sign_up" class="footer">
            <div class="container">
                <div class="row pdn-top-30">
                    <div class="col-md-12 ">
                        <div class="footer-box">
                            <div class="headinga">
                                <h3>Address</h3>
                                <span>144/b, Malani Bulathsinhala Road, Boralesgamuwa.</span>
                                <p>+94-760281149
                                    <br>vestur007@gmail.com</p>
                            </div>
                            <ul class="location_icon">
                                <li> <a href="https://www.facebook.com/Vesture-2297075973854826/"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="https://instagram.com/_vesture_clothing?igshid=1ohuh9e9u05r6"><i class="fa fa-instagram"></i></a></li>

                            </ul>
                            <div class="menu-bottom">
                                <ul class="link">
                                    <li> <a href="index.php">Home</a></li>
                                    <li> <a href="about.php">About</a></li>
                                    
                                    <li> <a href="categories.php">Categories </a></li>
                                    <li> <a href="contact.php"> Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>© 2020 All Rights Reserved. Design By Chamal Bandara</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
</body>

</html>