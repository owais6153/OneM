<?php
#Calling History of clients
 if (!empty($_REQUEST['em']) && !empty($_REQUEST['num'])) { 
require 'db_con.php';
$em = mysqli_real_escape_string($con, $_REQUEST['em']);
$nu = mysqli_real_escape_string($con, $_REQUEST['num']);
$sql = "SELECT * FROM `booked` WHERE `Email` = '$em' AND `Numb` = '$nu'";
$run = mysqli_query($con, $sql);
if ($run) {
	if (mysqli_num_rows($run) > 0) { ?>
<div class="text-center">
	<h3 class="text-blue display-4">Here Is Your Service History</h3>
<?php 
		while($product = mysqli_fetch_assoc($run)){
			$email = $product['Email'];
			$num = $product['Numb'];
			$Name = $product['Name'];
			$car = $product['Car'];
			$Model = $product['Model'];
			$ser = $product['Service'];
			$date = $product['Dat'];
			$tim = $product['Tim'];
			echo '<div class="p-5 bb" style="; border: dashed ; max-width: 350px; margin: 20px !important;">
	<h4 class="mb-0">'.$Name.'</h4>
	<p class="text-muted mb-0" style="font-size: 12px;">'.$email.'</p>
	<p class="lead m-0"><b>Service: </b>'.$ser.'</p>
	<p class="m-0"><b>Car:</b> '.$car .' <b>Model: </b> '.$Model.'</p>
	<p class="text-muted" style="font-size: 12px;"><b>Date:</b> '.$date.' <b>Time: </b>'.$tim.'</p>
</div>';
		}
	}
	else{
		echo('<h3 class="display-4 text-danger">Not Found!</h3>');
	}
}
else{
	echo "<h3 class='display-4 text-danger'>Some Thing Went Wrong, Please Try Again.</h3>";
}
?>
</div>
<?php } ?>