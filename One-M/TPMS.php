<?php 
$active = 'TPMS';
$container = '.container-fuid{overflow: hidden;background: url(imgs/mc.jpg); background-position: center !important;background-size: cover !important;transition: .5s;} 
    	.bg-rgba{background: rgba(0,0,0,0.8); height: 350px;} 
@media (max-width:992px){
	.bg-rgba{height: 300px;}
}    	';
require 'header.php'; 
    	?>

	<h3 class="pt-5 display-4 text-light ani1 text-center" style="font-size: 35px !important;" id="head"><?php if (isset($_GET['pg'])) { echo($_GET['pg']); } ?></h3>
			</div>
</div>
</div>
<?php 
if (isset($_GET['pg'])) {
	?>
	<div class="container p-5 ">
		<div class="seer">
			<p class="lead"><a href="Services.php" class="text-muted">Our Services</a> / <a href="Our_services.php?pg=TPMS" class="text-muted">TPMS</a> / <a href="" ><?php echo ($_GET['pg']); ?></a></p>
			<div id="trans">
			<?php
	if ($_GET['pg'] == 'TPMS-Repair') {
			?>
				<h3 class="text-blue">The Basics Behind TPMS Repair Services</h3>
				<p>The Tire Pressure Monitoring System (TPMS) tracks the amount of pressure in tires and alerts a driver when the pressure is at an insufficient level. There are two types of tire pressure monitoring systems—direct and indirect. A direct TPMS receives information from pressure sensors inside each tire on the vehicle, while an indirect TPMS uses speed sensor data from the wheels to determine tire pressure levels. When a tire has an insufficient level of pressure, it becomes a safety hazard for various reasons. If pressure is too high, tires tend to bounce and lose traction. If pressure is too low, tires heat up quickly and wear out easily. Heat can negatively affect the tread of a tire and ultimately lead to blowouts and accidents. We recommend that drivers pay attention to the Tire Pressure Monitoring System and heed any warnings it produces.</p>
				<h3 class="text-blue">Why Should You Have TPMS Repair Services Performed?</h3>
				<p>When your TPMS alerts you to a tire pressure problem, please contact us for assistance. Our service staff is equipped with the right tools for the job. After we use our professional diagnostic tools to obtain information from your TPMS, we can help you inflate or deflate your tires until they are within the correct pressure range. We can also check that your pressure or speed sensors are working correctly. In the case that your Tire Pressure Monitoring System is simply not working at all, our service staff will determine the correct repair procedure. If you have any questions about the functionality of your TPMS, please give us a call or contact us online. We are happy to discuss your TPMS with you and look forward to sending you back out on the road with a fully operational system.<br><br><span class="text-danger">Approx. Time: 30 Minutes</span></p>
				<a href="appoinment.php" class="btn-blue btn">Appoinment</a>
				<script type="text/javascript">
					var eng = `<h3 class="text-blue">The Basics Behind TPMS Repair Services</h3>
				<p>The Tire Pressure Monitoring System (TPMS) tracks the amount of pressure in tires and alerts a driver when the pressure is at an insufficient level. There are two types of tire pressure monitoring systems—direct and indirect. A direct TPMS receives information from pressure sensors inside each tire on the vehicle, while an indirect TPMS uses speed sensor data from the wheels to determine tire pressure levels. When a tire has an insufficient level of pressure, it becomes a safety hazard for various reasons. If pressure is too high, tires tend to bounce and lose traction. If pressure is too low, tires heat up quickly and wear out easily. Heat can negatively affect the tread of a tire and ultimately lead to blowouts and accidents. We recommend that drivers pay attention to the Tire Pressure Monitoring System and heed any warnings it produces.</p>
				<h3 class="text-blue">Why Should You Have TPMS Repair Services Performed?</h3>
				<p>When your TPMS alerts you to a tire pressure problem, please contact us for assistance. Our service staff is equipped with the right tools for the job. After we use our professional diagnostic tools to obtain information from your TPMS, we can help you inflate or deflate your tires until they are within the correct pressure range. We can also check that your pressure or speed sensors are working correctly. In the case that your Tire Pressure Monitoring System is simply not working at all, our service staff will determine the correct repair procedure. If you have any questions about the functionality of your TPMS, please give us a call or contact us online. We are happy to discuss your TPMS with you and look forward to sending you back out on the road with a fully operational system.<br><br><span class="text-danger">Approx. Time: 30 Minutes</span></p>
				<a href="appoinment.php" class="btn-blue btn">Appoinment</a>`;
					var head_e = 'TPMS-Repair';
					var head_f = 'Réparation TPMS';
					var fre = `<h3 class="text-blue">L'essentiel des services de réparation du TPMS</h3><p>Le système de surveillance de la pression des pneus (TPMS) surveille la quantité de pression dans les pneus et alerte le conducteur lorsque la pression est insuffisante. Il existe deux types de systèmes de surveillance de la pression des pneus - directs et indirects. Un TPMS direct reçoit des informations des capteurs de pression à l'intérieur de chaque pneu du véhicule, tandis qu'un TPMS indirect utilise les données du capteur de vitesse des roues pour déterminer les niveaux de pression des pneus. Quand un pneu a un niveau de pression insuffisant, cela devient un danger pour la sécurité pour diverses raisons. Si la pression est trop élevée, les pneus ont tendance à rebondir et à perdre de la traction. Si la pression est trop basse, les pneus chauffent rapidement et s'usent facilement. La chaleur peut affecter négativement la bande de roulement d'un pneu et provoquer des éruptions et des accidents. Nous recommandons aux conducteurs de prêter attention au système de surveillance de la pression des pneus et de tenir compte des avertissements qu'il génère.</p><h3 class="text-blue">Pourquoi devriez-vous avoir des services de réparation TPMS effectués?</h3><p>Lorsque votre système TPMS vous avertit d'un problème de pression des pneus, veuillez nous contacter pour obtenir de l'aide. Notre personnel de service est équipé des bons outils pour le travail. Après avoir utilisé nos outils de diagnostic professionnels pour obtenir des informations de votre système TPMS, nous pouvons vous aider à gonfler ou dégonfler vos pneus jusqu'à ce qu'ils se trouvent dans la plage de pression correcte. Nous pouvons également vérifier que vos capteurs de pression ou de vitesse fonctionnent correctement. Si votre système de surveillance de la pression des pneus ne fonctionne tout simplement pas, notre personnel de service déterminera la procédure de réparation appropriée. Si vous avez des questions sur les fonctionnalités de votre SSPP, appelez-nous ou contactez-nous en ligne. Nous sommes heureux de discuter de votre SSPP avec vous et sommes impatients de vous renvoyer sur la route avec un système pleinement opérationnel.<br><br><span class="text-danger">Approx. Time: 30 Minutes</span></p><a href="appoinment.php" class="btn-blue btn">RENDEZ-VOUS</a>`;

				</script>
<?php	}
?>
</div>
</div>
</div>
<script type="text/javascript">
	var head = document.getElementById('head');
	var elem = document.getElementById('trans');
function lang_trans() {
		var lng = document.getElementById('lang').value;
		if (lng == 'fre') {
		head.innerHTML = head_f;
		trans.innerHTML = fre;
		}
		else if (lng = 'eng'){
		head.innerHTML = head_e;
		trans.innerHTML = eng;
		}

	}
</script>
<?php
}
require 'footer.php';
?>