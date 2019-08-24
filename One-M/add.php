<?php
#Adding appointment in database

if (isset($_REQUEST['name']) && isset($_REQUEST['num']) && isset($_REQUEST['email']) && isset($_REQUEST['service']) && isset($_REQUEST['car']) && isset($_REQUEST['model']) && isset($_REQUEST['date']) && isset($_REQUEST['time'])) {
	require 'db_con.php';
	$name = $_REQUEST['name'];
	$num = $_REQUEST['num'];
	$email = $_REQUEST['email'];
	$ser = $_REQUEST['service'];
	$car = $_REQUEST['car'];
	$model = $_REQUEST['model'];
	$tim = $_REQUEST['time'];
	$dat = $_REQUEST['date'];
	$sql = 'INSERT INTO `Booked`( Name, Car, Model, Email, Numb, Service, Dat, Tim) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
	$stmt = mysqli_stmt_init($con);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "Some Thing Went Wrong";
	}
	else{
		mysqli_stmt_bind_param($stmt, 'ssssssss', $name, $car, $model, $email, $num, $ser, $dat, $tim);
		mysqli_stmt_execute($stmt);
		echo "success";
	}
}