<?php 
$active = 'Charging And Batteries';
$container = '.container-fuid{overflow: hidden;background: url(imgs/mc.jpg); background-position: center !important;background-size: cover !important;transition: .5s;} 
    	.bg-rgba{background: rgba(0,0,0,0.8); height: 350px;} 
@media (max-width:992px){
	.bg-rgba{height: 300px;}
}    	';
require 'header.php'; 
    	?>

	<h3 class="pt-5 display-4 text-light ani1 text-center"  style="font-size: 35px !important;" id="head"><?php if (isset($_GET['pg'])) { echo($_GET['pg']); } ?></h3>
			</div>
</div>
</div>
<?php 
if (isset($_GET['pg'])) {
	?>
	<div class="container p-5 ">
		<div class="seer">
			<p class="lead"><a href="Services.php" class="text-muted">Our Services</a> / <a href="Our_services.php?pg=Charging-and-Batteries" class="text-muted">Charging-and-Batteries</a> / <a href="" ><?php echo ($_GET['pg']); ?></a></p>
			<div id="trans">
			<?php
	if ($_GET['pg'] == 'Alternator-Replacement') {
			?>
				<h3 class="text-blue">The Basics Behind Alternator Replacement Services</h3>
				<p>An alternator is part of a vehicle’s charging system, and is an essential component in keeping a vehicle operable. The alternator works with the battery and voltage regulator to keep electrical components running. Usually located near the front of a vehicle’s engine, an alternator can be identified by its aluminum body, vents, and an internal or external cooling fan. Depending on the vehicle, the alternator pulley is driven by either a serpentine belt or v-belt. This mechanical energy is then converted into electrical energy as internal parts operate to create a magnetic field used to produce the alternating current output. The alternator can reach high temperatures fast, so an operative cooling fan is important. Although the battery can keep the vehicle running for a little while, it will not be able to keep it running for an extended period of time if the alternator malfunctions. In fact, the alternator serves as the charger for the battery as well. Because a bad alternator will eventually render the vehicle inoperable, it is imperative that a driver have this component repaired or replaced as soon as possible.</p>
				<h3 class="text-blue">Why Should You Have Alternator Replacement Services Performed?</h3>
				<p>When your alternator begins to malfunction, seek out our alternator replacement service as soon as possible. Warning signs that your alternator requires repair or replacement will involve your vehicle’s electrical components. For example, a dashboard warning light may appear, or headlights may dim. In cases where the alternator begins making noise, it is possible that the belt is simply loose. Other times, the smell of burning rubber may permeate the air and signal a problem. No matter what symptoms you are experiencing, we can help. The next time you suspect alternator issues, allow us to take a look and help get you back on the road again.<br><br><span class="text-danger">Approx. Time: 120 Minutes</span></p>
				<a href="appoinment.php" class="btn-blue btn">Appoinment</a>
				<script type="text/javascript">
					var eng = `<h3 class="text-blue">The Basics Behind Alternator Replacement Services</h3>
				<p>An alternator is part of a vehicle’s charging system, and is an essential component in keeping a vehicle operable. The alternator works with the battery and voltage regulator to keep electrical components running. Usually located near the front of a vehicle’s engine, an alternator can be identified by its aluminum body, vents, and an internal or external cooling fan. Depending on the vehicle, the alternator pulley is driven by either a serpentine belt or v-belt. This mechanical energy is then converted into electrical energy as internal parts operate to create a magnetic field used to produce the alternating current output. The alternator can reach high temperatures fast, so an operative cooling fan is important. Although the battery can keep the vehicle running for a little while, it will not be able to keep it running for an extended period of time if the alternator malfunctions. In fact, the alternator serves as the charger for the battery as well. Because a bad alternator will eventually render the vehicle inoperable, it is imperative that a driver have this component repaired or replaced as soon as possible.</p>
				<h3 class="text-blue">Why Should You Have Alternator Replacement Services Performed?</h3>
				<p>When your alternator begins to malfunction, seek out our alternator replacement service as soon as possible. Warning signs that your alternator requires repair or replacement will involve your vehicle’s electrical components. For example, a dashboard warning light may appear, or headlights may dim. In cases where the alternator begins making noise, it is possible that the belt is simply loose. Other times, the smell of burning rubber may permeate the air and signal a problem. No matter what symptoms you are experiencing, we can help. The next time you suspect alternator issues, allow us to take a look and help get you back on the road again.<br><br><span class="text-danger">Approx. Time: 120 Minutes</span></p>
				<a href="appoinment.php" class="btn-blue btn">Appoinment</a>`;
					var head_e = 'Alternator-Replacement';
					var head_f = `Alternateur-remplacement`;
					var fre = `<h3 class="text-blue">L'essentiel des services de remplacement d'alternateur</h3><p>Un alternateur fait partie du système de charge d’un véhicule et joue un rôle essentiel dans le maintien de son fonctionnement. L'alternateur fonctionne avec la batterie et le régulateur de tension pour maintenir les composants électriques en fonctionnement. Habituellement situé près de l’avant du moteur d’un véhicule, un alternateur peut être identifié par son corps en aluminium, ses orifices de ventilation et son ventilateur de refroidissement interne ou externe. Selon le véhicule, la poulie de l'alternateur est entraînée par une courroie serpentine ou par une courroie trapézoïdale. Cette énergie mécanique est ensuite convertie en énergie électrique lorsque les pièces internes créent un champ magnétique utilisé pour produire la sortie de courant alternatif. L'alternateur peut atteindre rapidement des températures élevées. Un ventilateur de refroidissement en fonctionnement est donc important. Bien que la batterie puisse maintenir le véhicule en marche pendant un certain temps, elle ne pourra pas le faire fonctionner pendant une période prolongée si l’alternateur ne fonctionne pas correctement. En fait, l'alternateur sert également de chargeur pour la batterie. Parce qu'un mauvais alternateur finira par rendre le véhicule inutilisable, il est impératif que le conducteur fasse réparer ou remplacer ce composant le plus tôt possible.</p><h3 class="text-blue">Pourquoi devriez-vous faire exécuter des services de remplacement d'alternateur?</h3><p>Lorsque votre alternateur commence à mal fonctionner, contactez notre service de remplacement d’alternateur dès que possible. Les signes d’avertissement indiquant que votre alternateur doit être réparé ou remplacé impliquent les composants électriques de votre véhicule. Par exemple, un voyant d’avertissement du tableau de bord peut apparaître ou des phares peuvent s’éteindre. Dans les cas où l'alternateur commence à faire du bruit, il est possible que la courroie soit simplement lâche. D'autres fois, l'odeur de caoutchouc en combustion peut pénétrer dans l'air et signaler un problème. Quels que soient vos symptômes, nous pouvons vous aider. La prochaine fois que vous soupçonnez des problèmes d’alternateur, permettez-nous de jeter un coup d’œil et de vous aider à reprendre la route.<br><br><span class="text-danger">Approx. Time: 120 Minutes</span></p><a href="appoinment.php" class="btn-blue btn">RENDEZ-VOUS</a>`;

				</script>

<?php	}
else if ($_GET['pg'] == 'Battery-Replacement') { ?>
				<h3 class="text-blue">The Basics Behind Battery Replacement Services</h3>
				<p>Car batteries are fundamental parts of both the charging and starting systems. Within the starting system, the role of the battery is to send a current of electricity to the starter so that the vehicle is able to start and run. In addition, the battery is responsible for supplying electricity to other electrical components, such as the radio and the internal and external lights when the demand exceeds the supply of the alternator or when the vehicle is off. Most vehicles use one battery, but vehicles with diesel engines, electric vehicles, or vehicles that run a 24-volt system may require two or more batteries to power their engines and electric systems. Currently, the SLI battery is a popular type of battery used in many vehicles. The letters, which stand for starting, lighting, and ignition, indicate the battery’s major functions. Overall, an automotive battery is an essential component in vehicles. Without a working battery, an engine will not start. As such, it is important for a driver to keep watch over battery life.</p>
				<h3 class="text-blue">Why Should You Have Battery Replacement Services Performed?</h3>
				<p>If you are having trouble starting your engine, visit us for a battery replacement service. We will determine if the battery is the cause of the problem and in need of replacement. In addition, our replacement service may be advisable even if your battery is currently working properly. Although new batteries generally perform well for the first three to five years before they are likely to malfunction, battery life can be shortened from extreme weather conditions or improper maintenance. Unless you have access to the right testing tools, there may be little warning that your battery needs to be replaced. Our staff has the necessary tools to review your battery’s performance. If our results indicate you need a replacement battery, we will help you through the replacement process. If you have questions or concerns about your battery, simply give us a call or contact us online.<br><br><span class="text-danger">Approx. Time: 15 Minutes</span></p>
				<a href="appoinment.php" class="btn-blue btn">Appoinment</a>
				<script type="text/javascript">
					var eng = `<h3 class="text-blue">The Basics Behind Battery Replacement Services</h3>
				<p>Car batteries are fundamental parts of both the charging and starting systems. Within the starting system, the role of the battery is to send a current of electricity to the starter so that the vehicle is able to start and run. In addition, the battery is responsible for supplying electricity to other electrical components, such as the radio and the internal and external lights when the demand exceeds the supply of the alternator or when the vehicle is off. Most vehicles use one battery, but vehicles with diesel engines, electric vehicles, or vehicles that run a 24-volt system may require two or more batteries to power their engines and electric systems. Currently, the SLI battery is a popular type of battery used in many vehicles. The letters, which stand for starting, lighting, and ignition, indicate the battery’s major functions. Overall, an automotive battery is an essential component in vehicles. Without a working battery, an engine will not start. As such, it is important for a driver to keep watch over battery life.</p>
				<h3 class="text-blue">Why Should You Have Battery Replacement Services Performed?</h3>
				<p>If you are having trouble starting your engine, visit us for a battery replacement service. We will determine if the battery is the cause of the problem and in need of replacement. In addition, our replacement service may be advisable even if your battery is currently working properly. Although new batteries generally perform well for the first three to five years before they are likely to malfunction, battery life can be shortened from extreme weather conditions or improper maintenance. Unless you have access to the right testing tools, there may be little warning that your battery needs to be replaced. Our staff has the necessary tools to review your battery’s performance. If our results indicate you need a replacement battery, we will help you through the replacement process. If you have questions or concerns about your battery, simply give us a call or contact us online.<br><br><span class="text-danger">Approx. Time: 15 Minutes</span></p>
				<a href="appoinment.php" class="btn-blue btn">Appoinment</a>`;
					var head_e = 'Battery-Replacement';
					var head_f = `Remplacement de la batterie`;
					var fre = `<h3 class="text-blue">L'essentiel des services de remplacement de batterie</h3><p>Les batteries de voiture sont des éléments fondamentaux des systèmes de charge et de démarrage. Dans le système de démarrage, le rôle de la batterie est d’envoyer un courant électrique au démarreur afin que le véhicule puisse démarrer et fonctionner. De plus, la batterie est responsable de l'alimentation en électricité d'autres composants électriques, tels que la radio et les éclairages internes et externes, lorsque la demande dépasse l'alimentation de l'alternateur ou lorsque le véhicule est à l'arrêt. La plupart des véhicules utilisent une seule batterie, mais les véhicules à moteur diesel, les véhicules électriques ou les véhicules fonctionnant avec un système 24 volts peuvent nécessiter deux batteries ou plus pour alimenter leurs moteurs et leurs systèmes électriques. Actuellement, la batterie SLI est un type de batterie populaire utilisé dans de nombreux véhicules. Les lettres, qui désignent le démarrage, l’allumage et l’allumage, indiquent les fonctions principales de la batterie. Globalement, une batterie automobile est un composant essentiel dans les véhicules. Sans batterie en état de fonctionnement, le moteur ne démarre pas. En tant que tel, il est important que le conducteur veille sur la durée de vie de la batterie.</p><h3 class="text-blue">Pourquoi devriez-vous avoir des services de remplacement de batterie effectués?</h3><p>Si vous rencontrez des difficultés pour démarrer votre moteur, visitez-nous pour un service de remplacement de batterie. Nous déterminerons si la batterie est la cause du problème et doit être remplacée. En outre, notre service de remplacement peut être conseillé même si votre batterie fonctionne correctement. Bien que les nouvelles batteries fonctionnent généralement bien pendant les trois à cinq années précédant les risques de dysfonctionnements, leur durée de vie peut être réduite en raison de conditions climatiques extrêmes ou d'un mauvais entretien. À moins d’avoir accès aux outils de test appropriés, il se peut que vous ne soyez pas averti que votre batterie doit être remplacée. Notre personnel dispose des outils nécessaires pour évaluer les performances de votre batterie. Si nos résultats indiquent que vous avez besoin d'une batterie de remplacement, nous vous aiderons tout au long du processus de remplacement. Si vous avez des questions ou des préoccupations au sujet de votre batterie, appelez-nous ou contactez-nous en ligne.<br><br><span class="text-danger">Approx. Time: 15 Minutes</span></p><a href="appoinment.php" class="btn-blue btn">RENDEZ-VOUS</a>`;

				</script>

<?php	}
else if ($_GET['pg'] == 'Starter-Replacement') { ?>
				<h3 class="text-blue">The Basics Behind Starter Replacement Services</h3>
				<p>The starter is a motor that, when supplied with electricity from a vehicle’s battery, will engage the flywheel ring gear and crank the engine. When a driver turns the key to start the engine, the battery sends a small supply of electricity to the starter solenoid. In turn, the solenoid powers the motor which sends a gear to mesh with the ring gear on a vehicle’s flywheel. Depending on the vehicle, the starter may be a direct drive (DD), planetary gear (PLGR), permanent magnet gear reduction (PMGR), permanent magnet direct drive (PMDD), or offset gear reduction (OSGR). In a DD starter, components are attached in a line and run off the armature. A PLGR starter has a shaft that the armature uses and is good at increasing torque. A PMGR starter is similar to a PLGR starter except the PMGR starter uses permanent magnets instead of field coils. Similarly, PMDD starters are akin to DD starters except PMDDs use permanent magnets instead of field coils. Finally, OSGR starters do not run directly off the armature. No matter the type, each starter ultimately plays an essential role in powering a vehicle.</p>
				<h3 class="text-blue">Why Should You Have Starter Replacement Services Performed?</h3>
				<p>In addition to an inoperable engine, there are other factors that indicate a replacement is needed. If your starter is making a clicking sound that lasts momentarily or the crank is operating slowly, you may need to change your vehicle’s starter. We can look over your starter and review whether or not it is the culprit of current vehicular troubles. If you are unfamiliar with the type of starter your vehicle uses, we will help you find the right one for your vehicle make and model. Our goal is to get your vehicle running again.<br><br><span class="text-danger">Approx. Time: 60 Minutes</span></p>
				<a href="appoinment.php" class="btn-blue btn">Appoinment</a>
				<script type="text/javascript">
					var eng = `<h3 class="text-blue">The Basics Behind Starter Replacement Services</h3>
				<p>The starter is a motor that, when supplied with electricity from a vehicle’s battery, will engage the flywheel ring gear and crank the engine. When a driver turns the key to start the engine, the battery sends a small supply of electricity to the starter solenoid. In turn, the solenoid powers the motor which sends a gear to mesh with the ring gear on a vehicle’s flywheel. Depending on the vehicle, the starter may be a direct drive (DD), planetary gear (PLGR), permanent magnet gear reduction (PMGR), permanent magnet direct drive (PMDD), or offset gear reduction (OSGR). In a DD starter, components are attached in a line and run off the armature. A PLGR starter has a shaft that the armature uses and is good at increasing torque. A PMGR starter is similar to a PLGR starter except the PMGR starter uses permanent magnets instead of field coils. Similarly, PMDD starters are akin to DD starters except PMDDs use permanent magnets instead of field coils. Finally, OSGR starters do not run directly off the armature. No matter the type, each starter ultimately plays an essential role in powering a vehicle.</p>
				<h3 class="text-blue">Why Should You Have Starter Replacement Services Performed?</h3>
				<p>In addition to an inoperable engine, there are other factors that indicate a replacement is needed. If your starter is making a clicking sound that lasts momentarily or the crank is operating slowly, you may need to change your vehicle’s starter. We can look over your starter and review whether or not it is the culprit of current vehicular troubles. If you are unfamiliar with the type of starter your vehicle uses, we will help you find the right one for your vehicle make and model. Our goal is to get your vehicle running again.<br><br><span class="text-danger">Approx. Time: 60 Minutes</span></p>
				<a href="appoinment.php" class="btn-blue btn">Appoinment</a>`;
					var head_e = 'Starter-Replacement';
					var head_f = `Démarreur-Remplacement`;
					var fre = `<h3 class="text-blue">L'essentiel des services de remplacement de démarreur</h3><p>Le démarreur est un moteur qui, lorsqu'il est alimenté en électricité par la batterie d'un véhicule, engage la couronne dentée du volant et lance le moteur. Lorsqu'un conducteur tourne la clé pour démarrer le moteur, la batterie envoie une petite quantité d'électricité au solénoïde du démarreur. À son tour, l’électrovanne alimente le moteur qui envoie un engrenage à engrener avec la couronne du volant du véhicule. Selon le véhicule, le démarreur peut être un entraînement direct (DD), un engrenage planétaire (PLGR), un réducteur à engrenage à aimant permanent (PMGR), un entraînement direct à aimant permanent (PMDD) ou un réducteur à engrenages décalés (OSGR). Dans un démarreur DD, les composants sont attachés dans une ligne et sortent de l'armature. Un démarreur PLGR a un arbre que l'induit utilise et est capable d'augmenter le couple. Un démarreur PMGR est similaire à un démarreur PLGR, sauf que le démarreur PMGR utilise des aimants permanents au lieu de bobines de champ. De même, les démarreurs PMDD s'apparentent aux démarreurs DD, à la différence que les PMDD utilisent des aimants permanents au lieu de bobines de champ. Enfin, les démarreurs OSGR ne fonctionnent pas directement à partir de l'armature. Peu importe le type, chaque démarreur joue un rôle essentiel dans l’alimentation d’un véhicule.</p><h3 class="text-blue">Pourquoi devriez-vous faire exécuter des services de remplacement de démarreur?</h3><p>Outre un moteur inutilisable, d'autres facteurs indiquent qu'un remplacement est nécessaire. Si votre démarreur émet un clic qui dure momentanément ou que la manivelle fonctionne lentement, vous devrez peut-être changer le démarreur de votre véhicule. Nous pouvons examiner votre démarreur et déterminer s'il est ou non le coupable des problèmes de véhicules actuels. Si vous ne connaissez pas le type de démarreur utilisé par votre véhicule, nous vous aiderons à trouver celui qui convient à votre marque et à votre modèle de véhicule. Notre objectif est de remettre votre véhicule en marche.<br><br><span class="text-danger">Approx. Time: 60 Minutes</span></p><a href="appoinment.php" class="btn-blue btn">RENDEZ-VOUS</a>`;

				</script>
<?php	}
else if ($_GET['pg'] == 'Starting-Charging-System-Check') { ?>
				<h3 class="text-blue">The Basics Behind Starting & Charging System Check Services</h3>
				<p>The starting and charging system is responsible for getting an engine to run and for keeping different components charged. The starting system involves a number of parts, including the ignition switch, starter, and flywheel. Using energy from the battery, the starter uses a gear to interact with the engine. Without a starter, an engine would be inoperable. The charging system, which includes the battery, alternator, and voltage regulator, play an equally important role. The battery is needed to send electricity to the starter. The alternator powers all the electrical components by generating electrical currents, and the voltage regulator ensures that the output of the alternator does not over- or under-charge the components dependent on the electrical current. Together, the starting and charging systems interact with one-another to keep a vehicle operating for its driver.</p>
				<h3 class="text-blue">Why Should You Have Starting & Charging System Check Services Performed?</h3>
				<p>The various components that make up your starting and charging system are not impervious to failure from constant use and wear. Warning signs for a starting and charging system include dim headlights, clicking or growling noises, and the presence of dashboard warning lights. During a starting and charging system service, our staff will review the voltage level of your battery, test your alternator, and look over your starter. An inefficient starting and charging system can lead to engine failure, which is makes routine maintenance extremely important. Some components, like the battery, may give little warning before they fail. Our service staff combines the proper tools with extensive automotive knowledge to test and repair the components of your vehicle’s starting and charging system.<br><br><span class="text-danger">Approx. Time: 15 Minutes</span></p>
				<a href="appoinment.php" class="btn-blue btn">Appoinment</a>
				<script type="text/javascript">
					var eng = `<h3 class="text-blue">The Basics Behind Starting & Charging System Check Services</h3>
				<p>The starting and charging system is responsible for getting an engine to run and for keeping different components charged. The starting system involves a number of parts, including the ignition switch, starter, and flywheel. Using energy from the battery, the starter uses a gear to interact with the engine. Without a starter, an engine would be inoperable. The charging system, which includes the battery, alternator, and voltage regulator, play an equally important role. The battery is needed to send electricity to the starter. The alternator powers all the electrical components by generating electrical currents, and the voltage regulator ensures that the output of the alternator does not over- or under-charge the components dependent on the electrical current. Together, the starting and charging systems interact with one-another to keep a vehicle operating for its driver.</p>
				<h3 class="text-blue">Why Should You Have Starting & Charging System Check Services Performed?</h3>
				<p>The various components that make up your starting and charging system are not impervious to failure from constant use and wear. Warning signs for a starting and charging system include dim headlights, clicking or growling noises, and the presence of dashboard warning lights. During a starting and charging system service, our staff will review the voltage level of your battery, test your alternator, and look over your starter. An inefficient starting and charging system can lead to engine failure, which is makes routine maintenance extremely important. Some components, like the battery, may give little warning before they fail. Our service staff combines the proper tools with extensive automotive knowledge to test and repair the components of your vehicle’s starting and charging system.<br><br><span class="text-danger">Approx. Time: 15 Minutes</span></p>
				<a href="appoinment.php" class="btn-blue btn">Appoinment</a>`;
					var head_e = 'Starting-Charging-System-Check';
					var head_f = `Vérification du système de démarrage`;
					var fre = `<h3 class="text-blue">L'essentiel des services de vérification du système de démarrage et de charge</h3><p>Le système de démarrage et de charge est chargé de faire fonctionner un moteur et de maintenir différents composants chargés. Le système de démarrage comprend un certain nombre de pièces, notamment le contacteur d'allumage, le démarreur et le volant moteur. En utilisant l'énergie de la batterie, le démarreur utilise un engrenage pour interagir avec le moteur. Sans démarreur, un moteur serait inutilisable. Le système de charge, qui comprend la batterie, l’alternateur et le régulateur de tension, joue également un rôle important. La batterie est nécessaire pour envoyer de l'électricité au démarreur. L'alternateur alimente tous les composants électriques en générant des courants électriques, et le régulateur de tension garantit que la sortie de l'alternateur ne surcharge pas ou ne sous-charge pas les composants en fonction du courant électrique. Ensemble, les systèmes de démarrage et de charge interagissent les uns avec les autres pour que le véhicule reste opérationnel pour le conducteur.</p><h3 class="text-blue">Pourquoi devriez-vous faire exécuter des services de vérification du système de démarrage?</h3><p>The various components that make up your starting and charging system are not impervious to failure from constant use and wear. Warning signs for a starting and charging system include dim headlights, clicking or growling noises, and the presence of dashboard warning lights. During a starting and charging system service, our staff will review the voltage level of your battery, test your alternator, and look over your starter. An inefficient starting and charging system can lead to engine failure, which is makes routine maintenance extremely important. Some components, like the battery, may give little warning before they fail. Our service staff combines the proper tools with extensive automotive knowledge to test and repair the components of your vehicle’s starting and charging system.<br><br><span class="text-danger">Approx. Time: 15 Minutes</span></p><a href="appoinment.php" class="btn-blue btn">RENDEZ-VOUS</a>`;

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