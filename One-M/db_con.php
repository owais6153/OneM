<?php  #Database Connection
$con = mysqli_connect('localhost', 'root', '', "one-m");   #Connect to database
if (!$con) {
	echo '<script>alert(Connection is lost, Please try again later);</script>';
}