<?php
    session_start(); 
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vesture";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
	die("connection Error");
}

$sql = "SELECT * FROM product";

$products = mysqli_query($conn,$sql);

?>

<!DOCTYOPE HTML>
<html>
     <head>
	     <meta name="viewport" content="width=device-width,initial-scale=1.0">
		 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		 
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	 
	 
	     <link href="style.css" rel="stylesheet">
		 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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
   <body class="main-layout special-page">
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
                           <div class="logo"> <a href="index.php"><img src="images/logo.png" alt="#"></a> </div>
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
                           <li><a href="deals.php">Login/Sign up</a></li>
                                <li><a href="#"><img src="images/cart.png">My Cart</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header><br><br>
      <!-- end header -->
      <!--content-->
	<section class="content">
	  <div class="container">
		
			 <div class="table-responsive">
			     <table class="table table-striped">
				     <thead>
					     <tr>
						     <th>product ID</th>
							 <th>Name</th>
							 <th>price</th>
							 <th></th>
						 </tr>
					 </thead>
					 <tbody>
					     <?php if(isset($_SESSION['cart'])) {
                             foreach($_SESSION['cart'] as $item => $qty) {
								 
								 $sql = mysqli_query($conn,"SELECT * FROM product WHERE product_id='$item'");
								 $row = mysqli_fetch_assoc($sql);
								 
                         ?>		
						         <tr>
								     <td><?php echo $row['product_id']; ?></td>
									 <td><?php echo $row['Name']; ?> </td>
                                     <td><?php echo $row['Price']; ?> </td>    
                                     <td><?php echo $qty; ?> </td>	
									 <td><a href="deletefromcart.php?product_id=<?php echo $row['product_id']; ?>" class="btn btn-warning">Remove Item</a></td>
									 
                                 </tr>
                         <?php
							 }
							 } ?>
                         
                     </tbody>
                 </table>
				     <a href="checkout.php" class="btn btn-info">Checkout</a>
             </div>				 			 
				 
			</div>
	  </section>
<br>
	 
	 </body>
</html>