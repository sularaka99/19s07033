<?php
$conn = new mysqli("127.0.0.1","root","","db_vesture");
// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}
?>