<?php 
$active = 'Lube, Oil And Filter';
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
			<p class="lead"><a href="Services.php" class="text-muted">Our Services</a> / <a href="Our_services.php?pg=Lube-Oil-Filter" class="text-muted">Lube-Oil-Filter</a> / <a href="" ><?php echo ($_GET['pg']); ?></a></p>
			<div id="trans">
			<?php
	if ($_GET['pg'] == 'Lube-and-Oil-Change') {
			?>
				<h3 class="text-blue">The Basics Behind Lube and Oil Change Services</h3>
				<p>Motor oil and lube changes are very important for keeping your engine functioning properly. Motor oil keeps your engine lubricated so there isn’t any excess friction or wear on moving parts. Oil cools down your engine, fights rust and corrosion, reduces engine noise, and works with the oil filter to remove contaminants from the engine. Oil is very important to your engine for helping it operate at optimum performance levels. When you drive your car, your engine becomes very hot, and heat makes oil break down. Broken down oil doesn’t move through your engine as well, which means the oil cannot do its job. Oil also cleans your engine as it flows around it. Dirty oil moves more slowly than clean oil and is not able to lubricate your engine correctly. In addition, the gritty particles in dirty oil can hinder its friction reduction abilities and increase wear on moving parts.</p>
				<h3 class="text-blue">Why Should You Have Lube and Oil Change Services Performed?</h3>
				<p>our engine needs motor oil to keep everything in proper working order, but old oil can break down, turn dirty, and harm your vehicle. During an oil change, our staff will change the oil filter, drain the dirty oil from your engine, and replace it with clean, new oil to keep your engine running smoothly. During a lube and oil change, our service staff will lubricate the chassis and the internal framework that holds your car together. By the time our staff finishes with your lube and oil change, your engine should be running smoothly, complete with a new oil filter, fresh oil, and a lubricated chassis. Changing your oil early and often will keep your engine running under optimal conditions. Contact us online or call us today to schedule your next oil change and lube service.<br><br><span class="text-danger">Approx. Time: 30 Minutes</span></p>
				<a href="appoinment.php" class="btn-blue btn">Appoinment</a>
<script type="text/javascript">
					var eng = `<h3 class="text-blue">The Basics Behind Lube and Oil Change Services</h3>
				<p>Motor oil and lube changes are very important for keeping your engine functioning properly. Motor oil keeps your engine lubricated so there isn’t any excess friction or wear on moving parts. Oil cools down your engine, fights rust and corrosion, reduces engine noise, and works with the oil filter to remove contaminants from the engine. Oil is very important to your engine for helping it operate at optimum performance levels. When you drive your car, your engine becomes very hot, and heat makes oil break down. Broken down oil doesn’t move through your engine as well, which means the oil cannot do its job. Oil also cleans your engine as it flows around it. Dirty oil moves more slowly than clean oil and is not able to lubricate your engine correctly. In addition, the gritty particles in dirty oil can hinder its friction reduction abilities and increase wear on moving parts.</p>
				<h3 class="text-blue">Why Should You Have Lube and Oil Change Services Performed?</h3>
				<p>our engine needs motor oil to keep everything in proper working order, but old oil can break down, turn dirty, and harm your vehicle. During an oil change, our staff will change the oil filter, drain the dirty oil from your engine, and replace it with clean, new oil to keep your engine running smoothly. During a lube and oil change, our service staff will lubricate the chassis and the internal framework that holds your car together. By the time our staff finishes with your lube and oil change, your engine should be running smoothly, complete with a new oil filter, fresh oil, and a lubricated chassis. Changing your oil early and often will keep your engine running under optimal conditions. Contact us online or call us today to schedule your next oil change and lube service.<br><br><span class="text-danger">Approx. Time: 30 Minutes</span></p>
				<a href="appoinment.php" class="btn-blue btn">Appoinment</a>`;
					var head_e = 'Lube-and-Oil-Change';
					var head_f = 'Changement de lubrifiant';
					var fre = `<h3 class="text-blue">Les bases des services de lubrification et de vidange</h3><p>Les changements d'huile moteur et de lubrification sont très importants pour le bon fonctionnement de votre moteur. L’huile moteur maintient votre moteur lubrifié afin d’éviter tout frottement excessif et toute usure des pièces mobiles. L'huile refroidit votre moteur, combat la rouille et la corrosion, réduit le bruit du moteur et fonctionne avec le filtre à huile pour éliminer les contaminants du moteur. L’huile est très importante pour votre moteur afin de lui permettre de fonctionner à des performances optimales. Lorsque vous conduisez votre voiture, votre moteur devient très chaud et la chaleur fait tomber l'huile. L’huile cassée ne passe pas aussi bien dans votre moteur, ce qui signifie que l’huile ne peut pas faire son travail. L'huile nettoie également votre moteur lorsqu'il circule autour de lui. L'huile sale se déplace plus lentement que l'huile propre et ne parvient pas à lubrifier correctement votre moteur. En outre, les particules granuleuses contenues dans l'huile sale peuvent entraver ses capacités de réduction du frottement et augmenter l'usure des pièces en mouvement.</p><h3 class="text-blue">Pourquoi devriez-vous faire exécuter des services de lubrification et de vidange d'huile?</h3><p>notre moteur a besoin d'huile moteur pour que tout reste en bon état de fonctionnement, mais l'huile usée peut tomber en panne, se salir et endommager votre véhicule. Lors d'un changement d'huile, notre personnel remplacera le filtre à huile, vidangera l'huile encrassée de votre moteur et la remplacera par une huile neuve et propre afin que votre moteur continue de fonctionner correctement. Lors d’un changement de lubrifiant et d’huile, notre personnel de service lubrifiera le châssis et le cadre interne qui maintient votre voiture en place. Au moment où notre personnel termine la vidange de votre lubrifiant et de votre huile, votre moteur devrait fonctionner sans à-coups, avec un nouveau filtre à huile, une huile neuve et un châssis lubrifié. Changer votre huile tôt et souvent gardera votre moteur en marche dans des conditions optimales. Contactez-nous en ligne ou appelez-nous dès aujourd'hui pour planifier votre prochain service de vidange d'huile et de lubrification.<br><br><span class="text-danger">Approx. Time: 30 Minutes</span></p><a href="appoinment.php" class="btn-blue btn">RENDEZ-VOUS</a>`;

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