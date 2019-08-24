<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>One-M || <?php echo ($active); #mention in top of every page?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="./imgs/One M.png">
	<!--Font Awsome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<!--Goggle Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">

	<style>
		<?php echo($container); ?>
	</style>

</head>
<!--<Loading>-->
<body onload="$('.pre-loader').fadeOut('slow');">
<div class="pre-loader" style=" background: #000 !important;">
	<div class="spinner sspinner">
	<div class="spinner-border spinner-border-lg text-blue"></div>
</div>
</div>
<!-- </loading> -->

<!--<Head Section>-->
	<div class="container-fuid p-0">
		<div class="bg-rgba">
			<!--Header-->
		<div class="contar">
			<img src="imgs/One M.png" alt="logo" class="mt-3 mar ml-4 mb-3" >
			<!--Appoinment bar-->
			<div class="raw row p-0">
				<p class=" text-center ml-auto hid" id="b_hour" style="font-size: 17px !important">Saturday-Wednesday 
					<span class="text-blue">7h30-18</span>, Thursday 
					<span class="text-blue">(7h30-13)</span>
				</p>
				<!--Appointment Btn-->
				<div class="slanted bg-blue" onclick="window.open('appoinment.php','_self');"><p class="maar ml-3"><i class="far fa-arrow-alt-circle-right mr-2"></i><span id="sssp">Appointment</span></p></div>
				<!--</Appointment btn>-->
			</div>
				<!--</Appointment bar>-->
				<p class="text-right text-light mt-5 apoin"><label class=' hid'><span id="sps">Shedule Your Appointment Today </span><span class="text-blue ml-3" style=" font-size: 23px;font-family: 'Anton', sans-serif; letter-spacing: 5px; ">+213-770-577-755</span></label>
					<button class=" navbar-toggler" onclick="tg_nav()"><i class="fas fa-bars"></i></button></p>
				</div>
				<!--Nav bar-->
				<div class=" navbar navbar-expand-md navbar-light" id="myNav">
					<!--Language Selector-->
					<select onchange="head_tran()" id="lang" style="background: transparent;width: 200px; padding: 10px; border-radius: 0px; margin-left: 10px;outline: 0;">
						<option value='eng'>English</option>
						<option value="fre">French</option>
					</select>

	<script>
		//Header Translater
		var h_fre = ['Samedi-mercredi <span class="text-blue">7h30-18</span>, Jeudi <span class="text-blue">(7h30-13)</span>',"Planifier votre rendez-vous aujourd'hui",'Rendez-vous'];
		var h_eng = ['Saturday-Wednesday <span class="text-blue">7h30-18</span>, Thursday <span class="text-blue">(7h30-13)</span>','SHEDULE YOUR APPOINTMENT TODAY','APPOINTMENT'];
		var ar = document.getElementsByClassName('tran');

		var ar_eng = ['Home','Our Services','About Us' , 'My Vhicle' , 'Contact'];
		var ar_fre = ['Accueil','Nos Services','A Propos' , 'Mon Véhicule' , 'Contact'];


		function head_tran() {
			lan = document.querySelector('#lang').value;
			if (lan == 'fre') {
				lang_trans();
				document.getElementById('b_hour').innerHTML = h_fre[0];
				document.getElementById('sps').innerHTML = h_fre[1];
				document.getElementById('sssp').innerHTML = h_fre[2];
				for (var i = 0; i < ar.length; i++) {
					ar[i].innerHTML = ar_fre[i];
				}
				if ($('#AL').length > 0  && $('#fuo').length > 0) {
					document.getElementById('AL').innerHTML = 'ALGÉRIE';
					document.getElementById('fuo').innerHTML = 'Trouvez <spam class="text-blue">nous à</span>';
				}
			}
			else if (lan == 'eng') {
				lang_trans();
				document.getElementById('b_hour').innerHTML = h_eng[0];
				document.getElementById('sps').innerHTML = h_eng[1];
				document.getElementById('sssp').innerHTML = h_eng[2];
				for (var i = 0; i < ar.length; i++) {
					ar[i].innerHTML = ar_eng[i];
				}
				if ($('#AL').length > 0  && $('#fuo').length > 0) {
					document.getElementById('AL').innerHTML = 'ALGERIA';
					document.getElementById('fuo').innerHTML = 'Find <span class="text-blue">Us On</span>';
				}
			}
			var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {    };
    xhttp.open("GET", `translate.php?lan=${lan}`, true);
    xhttp.send();	
	
		}

	</script>
					<!--Nav Links-->
					<ul class="m-auto navbar-nav nav">
						<?php if($active == 'Home') {#To see which item is active, mention in top of each page?>
						<li class="nav-item  acctive" >
						<?php }
						else{ ?>
						<li class="nav-item" >
						<?php } ?>
							<a href="index.php" class="tran nav-link">Home</a>
						
						</li>
						<?php if($active == 'Services') { ?>
						<li class="nav-item  acctive" >
						<?php }
						else{ ?>
						<li class="nav-item" >
						<?php } ?>
							<a href="Services.php" class="tran nav-link">Our Services</a>
						</li>
						<?php if($active == 'About Us') { ?>
						<li class="nav-item  acctive" >
						<?php }
						else{ ?>
						<li class="nav-item" >
						<?php } ?>
							<a href="about.php" class="nav-link tran">About Us</a>
						</li>
						<?php if($active == 'My Vehicle') { ?>
						<li class="nav-item  acctive" >
						<?php }
						else{ ?>
						<li class="nav-item" >
						<?php } ?>
							<a href="my_vehicle.php" class="nav-link tran">My Vechile</a>
						</li>
						<?php if($active == 'Contact Us') { ?>
						<li class="nav-item  acctive" >
						<?php }
						else{ ?>
						<li class="nav-item" >
						<?php } ?>
							<a href="contact.php" class="nav-link  tran">Contact</a>
						</li>
					</ul>
				</div>
				<div class="container" id="texxt">