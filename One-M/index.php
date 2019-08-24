<?php 
$active = 'Home'; #For page tittle

#ADDING CSS ON EACH PAGE
$container = '.container-fuid{overflow: hidden;background: url(imgs/jp.jpg); background-position: center !important;background-size: cover !important;transition: .5s;}
	.bg-rgba{background: rgba(0,0,0,0.64); height: 100vh;}
	@media (max-width:922px){
	.bg-rgba{height: 550px;}
	.display-1{font-size: 60px !important;}
}
#imgs:hover{transform: scale(1.2);}
#imgs{transition: 1s;}';

require 'header.php';
?>
<h3 class="mt-5 pt-5 display-3 text-light ani1 zero" style="font-weight: bold;">Looking For A </h3>	<h1 class="ani4 text-blue display-1 " style="font-family: 'Anton', sans-serif; letter-spacing: 5px;">Premium Service.</h1>

			</div>
</div>
</div>				<!--/ head closed-->

			<!--Body Start-->
<!--Gearbox Section & Slider-->
<div class="container-fluid pt-5 pl-5 pr-5 pb-0">
	<div class="row">
		<div class="col-md-8" id="col">
		<h1 style="font-family: 'Anton', sans-serif;">Looking For a 100% ATF</h1><h1 class="display-4 text-blue" style="font-family: 'Abril Fatface', cursive;">GEARBOX EXCHANGE <span class="text-dark">AND</span> FLUSH SERVICE...</h1>		<h1 style="font-family: 'Anton', sans-serif;">You Are In The Correct Address.</h1>
		</div>
		<div class="col-md-4">
			<div style="width: 100%; height: 300px; overflow: hidden; box-shadow: 5px 5px 10px #666; border-radius: 10px ;">
				<img src="imgs/Gear.jpg" id="imgs" alt="Gearbox" height="100%" width="100%">
			</div>
		</div>
	</div>
</div>
<!-- /Gearbox Section & Slider-->
<div class="container-fluid p-0 mt-5" style="overflow: hidden;">
	<img src="imgs/One-M.png" style="width: 100%; ">
</div>
<script>
	//Image and text Animation
	var i = 0;
	var txt = [`<h3 class="mt-5 pt-5 display-4 four ani2 text-light text-center zero">Get Your Service</h3>	<h1 class="text-center ani3 text-blue display-3 three " style=" font-family: 'Anton', sans-serif; letter-spacing: 3px; font-size:40px !important;">Appointment And</h1><p class="text-center lead text-light text-center" style="font-weight: bold; font-size: 30px; letter-spacing: 5px;">Estimated...</p>`,
	`<h3 class="mt-5 pt-5 display-3 three ani1 text-light text-center zero">You Just Trust On Us</h3>	<h1 class="text-center ani3 text-blue three display-3 " style=" font-family: 'Anton', sans-serif; letter-spacing: 5px;">And We Will Take Care</h1><p class="text-center lead text-light text-center ani4" style="font-weight: bold; font-size: 30px; letter-spacing: 5px;">Of Your Auto</p>`,
	`<h3 class="mt-5 pt-5 display-3 text-light ani1 zero" style="font-weight: bold;">Looking For A </h3>	<h1 class="ani4 text-blue display-1 " style=" font-family: 'Anton', sans-serif; letter-spacing: 5px;">Premium Service.</h1>`];
	//For translation
		function text(trans) {
			if (trans == 'fre') {
			txt = [`<h3 class="mt-5 pt-5 display-3 ani2 text-light text-center zero">Obtenez votre</h3>	<h1 class="text-center ani3 text-blue display-3 " style="font-family: 'Anton', sans-serif; letter-spacing: 5px;">RDV et une </h1><p class="text-center lead text-light text-center" style="font-weight: bold; font-size: 30px; letter-spacing: 5px;">estimation..</p>`,
	`<h3 class="mt-5 pt-5 display-3 ani1 text-light text-center zero">Vous avez juste a faire </h3>	<h1 class="text-center ani3 text-blue display-3 " style=" font-family: 'Anton', sans-serif; letter-spacing: 5px;">confiance en nous ... </h1><p class="text-center lead text-light text-center ani4" style="font-weight: bold; font-size: 30px; letter-spacing: 5px;">et nous prendrons soin de votre auto</p>`,
	`<h3 class="mt-5 pt-5 display-3 text-light ani1 zero" style="font-weight: bold;">Besoin d'un service</h3>	<h1 class="ani4 text-blue display-1 " style=" font-family: 'Anton', sans-serif; letter-spacing: 5px;"> d'une haute qualité</h1>`];		
			}
			else if (trans == 'eng') {
				txt = ['<h3 class="mt-5 pt-5 display-3 ani2 text-light text-center zero">Get Your Service</h3>	<h1 class="text-center ani3 text-blue display-3 " style=" font-family: fantasy; letter-spacing: 5px;">Appointment And</h1><p class="text-center lead text-light text-center" style="font-weight: bold; font-size: 30px; letter-spacing: 5px;">Estimated...</p>',
	'<h3 class="mt-5 pt-5 display-3 ani1 text-light text-center zero">You Just Trust On Us</h3>	<h1 class="text-center ani3 text-blue display-3 " style=" font-family: fantasy; letter-spacing: 5px;">And We Will Take Care</h1><p class="text-center lead text-light text-center ani4" style="font-weight: bold; font-size: 30px; letter-spacing: 5px;">Of Your Auto</p>',
	'<h3 class="mt-5 pt-5 display-3 text-light ani1 zero" style="font-weight: bold;">Looking For A </h3>	<h1 class="ani4 text-blue display-1 " style=" font-family: fantasy; letter-spacing: 5px;">Premium Service.</h1>'];
}
		}

	var img = ['imgs/mo.jpg', 'imgs/mc.jpg','imgs/jp.jpg'];
	var gb = ['imgs/gB.png', 'imgs/Gb-botle.jpg', 'imgs/Gear.jpg']
	//Time-Interval
	setInterval(()=>{
		//Change Image And Text
		$('.container-fuid').css('background', 'url('+ img[i] +')');
		document.getElementById('texxt').innerHTML = txt[i];
		document.getElementById('imgs').src = gb[i];
		i++;
		if (i >= 3) {
		i = 0;
		}

	},7000);

</script>

<!--Service section-->
<div class="container pt-5 mt-3" >
	<div class="col-md-6 mx-auto d-block p-2">
	<h3 class=" text-center display-4" id='os'>Our <span class="text-blue">Services</span></h3>
	<p class="text-center text-capitalize" id="seerr">As an auto service center, we offer our customers a wide range of general repair and maintenance services, including brakes, suspensions, air conditioning and heating, and oil changes. <b>See you today
at ONE M. </b><br><br> <a href="Services.php" style="font-size: 22px;">View All Services</a></p>

</div>
</div>
<!--/Service section-->

<!--About Us section-->
<div class="container-fluid mt-5 mb-5 p-5 cnt" style="background: url(imgs/mc.jpg), rgba(0,0,0,0.8); background-size: cover; background-position: center; background-attachment: fixed; background-blend-mode: soft-light;">
<div class="col-md-6 mx-auto d-block">
		<h3 class="display-4 text-center text-light" id="abt_h">About<span class="text-blue"> Us</span></h3>
	<p class=" text-light text-capitalize abt" id="abot" style="font-size: 18px;">
		One M is a love story between the human and his car, his bike or any other kind of automotive.<br>
One M is the result from this story, for you to give, to report and to prescribe the upscale VIP the
best thing your vehicle.<br>
One M is a self-employed specialized in different vehicle maintenance services.<br>
One M uses only premium products as well as premium equipment for a premium service..
</p>
	<p class="text-capitalize text-center">	<a href="about.php" class="text-center" id="vm" style="font-size: 22px;">View More</a></p>

</div>
</div>
<!-- /About Us section-->

<!--Shedule Appointment-->
<div class="container-fluid mb-5">
	<div class="row">
		<div class="col-md-6 p-2">
			<h3 class="text-center display-4 text-capitalize" id="Shh">Shedule <span class="text-blue">Your <br>Appointment</span> Today</h3>
			<p class="text-center" id="as" style="font-size: 20px; font-family:serif;">Your Automotive Repair & Maintenance Service Specialist</p>
			<h3 class="text-center txt-muted" style="font-family: 'Anton', sans-serif; letter-spacing: 2px;">Call: +213-770-577-755</h3>
			<div class="text-center">
			<a href='appoinment.php' class="btn btn-blue btn-lg text-light mt-4">APPOINTMENT</a>
		</div>		</div>
		<div class="col-md-6" style="overflow: hidden;">
			<img src="imgs/img-car-move.png" alt="car-image" style="width: 100%;transform:translateX( 1250px)'" class="mx-auto car d-block mt-2">
		</div>
	</div>
</div>
<!--Shedule Appointment-->

<script>
	
//Language Translater
var fre = ['One M c’est toute une histoire d’amour entre l’humain et sa voiture, sa moto ou tout autre genre d’automotive.<br>One M c’est le résultat émanant de cette histoire, pour vous permettre de donner, de rapporter et de prescrire le haut de gamme le VIP la meilleure chose a ton véhicule.<br>One M est un entre indépendant spécialisé aux différents services de maintenance des véhicules.<br>One M utilise que des produits, ainsi, qu’un équipement premium, pour un service premium.','A <span class="text-blue">Propos</span>',
	'En tant que centre de réparation automobile, nous proposons à nos clients une vaste gamme de services de réparation générale et d’entretien courant, notamment des freins, des suspensions, la climatisation et le chauffage et des vidanges. <b>Rendez-vous dès aujourd&#39;hui chez ONE M.</b></b><br><br> <a href="Services.php" style="font-size: 22px;">VOIR TOUT LES SERVICES</a>',"Planifier <span class='text-blue'>votre<br>rendez-vous</span> aujourd'hui",'Nos <span class="text-blue">Services</span>','Afficher plus','Votre spécialiste en réparation entretien et maintenance de véhicules'];

var eng = ['One M is a love story between the human and his car, his bike or any other kind of automotive.<br>One M is the result from this story, for you to give, to report and to prescribe the upscale VIP the best thing your vehicle.<br>One M is a self-employed specialized in different vehicle maintenance services.<br>One M uses only premium products as well as premium equipment for a premium service..','About <span class="text-blue">Us</span>',
	'As an auto service center, we offer our customers a wide range of general repair and maintenance services, including brakes, suspensions, air conditioning and heating, and oil changes. <b>See you today at ONE M. </b><br><br> <a href="Services.php" style="font-size: 22px;">View All Services</a>','Shedule <span class="text-blue">Your <br>Appoinment</span> Today','Our <span class="text-blue">Services</span>','View More','Your Automotive Repair & Maintenance Service Specialist'];
var elem = [document.getElementById('abot'),document.getElementById('abt_h'),document.getElementById('seerr'),document.getElementById('Shh'),document.getElementById('os'),document.getElementById('vm'),document.getElementById('as'),document.getElementById('col')];
function lang_trans() {
		var lng = document.getElementById('lang').value;
		if (lng == 'fre') {
			elem[0].innerHTML = fre[0];
			elem[1].innerHTML = fre[1];
			elem[2].innerHTML = fre[2];
			elem[3].innerHTML = fre[3];
			elem[4].innerHTML = fre[4];
			elem[5].innerHTML = fre[5];
			elem[6].innerHTML = fre[6];
			elem[7].innerHTML = `<h1 style="font-family: fantasy;" class='mt-5'>Besoin d'un service de </h1><h1 class="display-4 text-blue" style="font-family: fantasy;">nettoyage et changement d'ATF...</h1>		<h1 style="font-family: fantasy;">VOUS ÊTES A LA BONNE ADRESSE</h1>`;
		}
		else if(lng == 'eng'){
			elem[0].innerHTML = eng[0];
			elem[1].innerHTML = eng[1];	
			elem[2].innerHTML = eng[2];	
			elem[3].innerHTML = eng[3];	
			elem[4].innerHTML = eng[4];	
			elem[5].innerHTML = eng[5];	
			elem[6].innerHTML = eng[6];
			elem[7].innerHTML = `<h1 style="font-family: fantasy;">Looking For a 100% ATF</h1><h1 class="display-4 text-blue" style="font-family: fantasy;">GEARBOX EXCHANGE <span class="text-dark">AND</span> FLUSH SERVICE...</h1>		<h1 style="font-family: fantasy;">You Are In The Correct Address.</h1>`;
		}
		text(lng);
		//Translate header
	}
</script>
<?php 
#Map
require 'cn_map.php';
#Footer
require 'footer.php' ;?>