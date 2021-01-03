<?php
include("db.php");
//if($_SERVER["REQUEST_METHOD"] == "POST")

// username and password sent from Form
$fname=$_POST['firstName']; 
$lname=$_POST['lastName']; 
$email = $_POST['email'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$newPassword = $_POST['newPassword'];
$hashpassword= md5($newPassword); // Encrypted Password
$sql="Insert into sign_up(firstName , lastName , email , gender , phone , address , newPassword) values('$firstName','$lastName','$email', '$gender','$phone','$address','$hashpassword' );";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  else{
	echo '<script language="javascript">';  //javascript
    echo 'alert("You are Successfully Registered ! Click OK to continue."); location.href=" index.html"';
	// gie the java script messages  and locatin to logging page.
    echo '</script>';
		

 
  }


?>