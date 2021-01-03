<?php
	include "Connection.php";
	
	if (isset($_POST['submit'])){
	session_start();
	
	
	$username = $_POST['email'];
	$password = $_POST['password'];
	$password= md5($password);	// using md5 for password encryption 
	
	$query = "SELECT * FROM sign_up WHERE email='$email' AND password='$newPassword'"; 
	$result = mysql_query($query)or die(mysql_error());
	$num_row = mysql_num_rows($result);
	$row=mysql_fetch_array($result);
		
		
		$_SESSION['user'] = $row['fname'];
		$_SESSION['role'] = $row['state'];
		$_SESSION['userid'] = $row['userid'];
		echo $_SESSION['role'];
		
		if( $num_row > 0 ) {
			if($_SESSION['role']=="admin"){	//check the logging customer or admin
			header ('Location: ../adminprofile.php');	//if logging addmin. admin direct into adminprofile
	
		} 
		else if($_SESSION['role']==""){		//normal customer logging 
		header ('Location: ../products.php');	// cudtomer log..customerdirect in to product page.
		}
		
		}
		else{ ?>
		
	<?php echo '<script language="javascript">'; // strat java script
    echo 'alert("You Entered wrong email or password! Please retry."); location.href=" ../account.php"';
	// if customer or admin enter worng password or email java script pop the screen.
    echo '</script>';	}}
	?>