<?php 
$active = 'Belt & Hoes';
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
			<p class="lead"><a href="Services.php" class="text-muted">Our Services</a> / <a href="Our_services.php?pg=Belt-and-Hoes" class="text-muted">Belt-and-Hoes</a> / <a href="" ><?php echo ($_GET['pg']); ?></a></p>
			<div id="trans">
			<?php
	if ($_GET['pg'] == 'Heater-Hose-Replacement') {
			?>
				<h3 class="text-blue">The Basics Behind Heater Hose Replacement Services</h3>
				<p>Heater hoses play a crucial role in a vehicle’s heating system, which operates in conjunction with the cooling system. Running engines produce a tremendous amount of heat that will need to be transferred away from the engine in order to prevent overheating and subsequent breakdowns. Heater hoses are responsible for carrying coolant to prevent overheating. Coolant or antifreeze flows through the engine, absorbs the excess heat, and carries the heat away from the engine. More specifically, heater hoses are responsible for transferring coolant away from the engine to the heater core, where the warm air can be blown inside the compartment of your vehicle by engaging the adjacent fan. Heater fans blow through the heater core to heat the vehicle and cool the antifreeze inside of it. The hoses transfer the coolant back into the path of the cooling system at a lower temperature so the coolant can continue to regulate consistent temperatures inside the engine.</p>
				<h3 class="text-blue">Why Should You Have Heater Hose Replacement Services Performed?</h3>
				<p>Made of durable rubber, heater hoses are built to sustain the hot coolant that is carried from the engine to the heater core. Poor climate control is a sign of problems with your vehicle’s hoses. When your heater hoses near the end of their useful life, they will become hard and brittle or soft and mushy. If they crack, the coolant will leak and pool underneath your vehicle. When this happens, allow a member of our service staff to replace your heater hoses. A leaky hose means your heating system will not effectively heat your vehicle, and your cooling system will not have a proper supply of coolant. Leaky heater hoses can result in your engine overheating. As such, we encourage you to periodically inspect your heater hoses to determine the correct time to replace them.<br><br><span class="text-danger">Approx. Time: 60 Minutes</span></p>
				<a href="appoinment.php" class="btn-blue btn">Appointment</a>
				<script type="text/javascript">
					var eng = `<h3 class="text-blue">The Basics Behind Heater Hose Replacement Services</h3><p>Heater hoses play a crucial role in a vehicle’s heating system, which operates in conjunction with the cooling system. Running engines produce a tremendous amount of heat that will need to be transferred away from the engine in order to prevent overheating and subsequent breakdowns. Heater hoses are responsible for carrying coolant to prevent overheating. Coolant or antifreeze flows through the engine, absorbs the excess heat, and carries the heat away from the engine. More specifically, heater hoses are responsible for transferring coolant away from the engine to the heater core, where the warm air can be blown inside the compartment of your vehicle by engaging the adjacent fan. Heater fans blow through the heater core to heat the vehicle and cool the antifreeze inside of it. The hoses transfer the coolant back into the path of the cooling system at a lower temperature so the coolant can continue to regulate consistent temperatures inside the engine.</p><h3 class="text-blue">Why Should You Have Heater Hose Replacement Services Performed?</h3><p>Made of durable rubber, heater hoses are built to sustain the hot coolant that is carried from the engine to the heater core. Poor climate control is a sign of problems with your vehicle’s hoses. When your heater hoses near the end of their useful life, they will become hard and brittle or soft and mushy. If they crack, the coolant will leak and pool underneath your vehicle. When this happens, allow a member of our service staff to replace your heater hoses. A leaky hose means your heating system will not effectively heat your vehicle, and your cooling system will not have a proper supply of coolant. Leaky heater hoses can result in your engine overheating. As such, we encourage you to periodically inspect your heater hoses to determine the correct time to replace them.<br><br><span class="text-danger">Approx. Time: 60 Minutes</span></p><a href="appoinment.php" class="btn-blue btn">Appointment</a>`;
					var head_e = 'Heater-Hose-Replacement';
					var head_f = 'Remplacement des durites de chauffage';
					var fre = `<h3 class="text-blue">L&#39;essentiel des services de remplacement des durites de chauffage</h3><p>Les tuyaux de chauffage jouent un rôle crucial dans le système de chauffage d’un véhicule, qui fonctionne conjointement avec le système de refroidissement. Les moteurs en marche produisent une énorme quantité de chaleur qui devra être évacuée du moteur afin d&#39;éviter une surchauffe et des pannes ultérieures. Les tuyaux de chauffage sont chargés de transporter du liquide de refroidissement pour éviter une surchauffe. Le liquide de
refroidissement ou l&#39;antigel traverse le moteur, absorbe l&#39;excès de chaleur et éloigne la
chaleur du moteur. Plus spécifiquement, les tuyaux de chauffage sont responsables du
transfert du liquide de refroidissement du moteur vers le bloc chauffage, où l&#39;air chaud peut
être soufflé à l&#39;intérieur du compartiment de votre véhicule en engageant le ventilateur. Les
ventilateurs de chauffage soufflent à travers le radiateur pour chauffer le véhicule et
refroidir l&#39;antigel à l&#39;intérieur. Les durites renvoient le liquide de refroidissement dans le
circuit du système de refroidissement à une température plus basse afin que le liquide de
refroidissement puisse continuer à réguler des températures constantes à l&#39;intérieur du
moteur.</p><h3 class="text-blue">Pourquoi devriez-vous remplacer les durites de chauffage ?</h3><p>Fabriqués en caoutchouc durable, les durites de chauffage sont conçues pour maintenir le
liquide de refroidissement chaud transporté du moteur au cœur du chauffage. Un mauvais
contrôle du chauffage est le signe de problèmes avec les durites de votre véhicule. Lorsque
votre appareil de chauffage arrive à la fin de sa vie utile, il devient dur et cassant ou mou et
pâteux. S&#39;ils se fissurent, le liquide de refroidissement fuira et se regroupera sous votre
véhicule. Lorsque cela se produit, permettez à un membre de notre personnel de service de
remplacer vos durites de chauffage. Une durite qui fuit signifie que votre système de
chauffage ne chauffera pas efficacement votre véhicule et que votre système de
refroidissement ne disposera pas d&#39;un approvisionnement adéquat en liquide de
refroidissement. Des durites de chauffage qui fuient peuvent entraîner une surchauffe de
votre moteur. Par conséquent, nous vous encourageons à inspecter périodiquement vos
durites de chauffage afin de déterminer le bon moment pour les remplacer.<br><br><span class="text-danger">Approx. Time: 60 Minutes</span></p><a href="appoinment.php" class="btn-blue btn">RENDEZ-VOUS</a>`;

				</script>

<?php	}
else if ($_GET['pg'] == 'Radiator-Hose-Replacement') { ?>
				<h3 class="text-blue">The Basics Behind Radiator Hose Replacement Services</h3>
				<p>Your car or truck’s radiator hoses, which connect the engine to the radiator, are important components that maintain consistent internal engine temperatures. The upper hose connects to the top of the engine, while the lower hose connects to the bottom. Coolant flows through the engine to cool internal temperatures and works with the hoses. Radiator hoses carry hot coolant away from the engine and into the radiator, a large tank with small channels where the coolant flows to dissipate heat. Radiator fans, which are located behind the radiator, help cool the antifreeze or coolant once it enters. The radiator hoses also carry the coolant back into the engine to absorb the heat created during the combustion process. Once the engine reaches operating temperatures, the hot coolant cycles back to the radiator where it is cooled again. Because the engine can reach extreme temperatures, the coolant is often extremely hot. Over time, hot coolant can cause radiator hoses to deteriorate from the inside out.</p>
				<h3 class="text-blue">Why Should You Have Radiator Hose Replacement Services Performed?</h3>
				<p>Replacing your radiator hoses is one way to minimize the chance of engine failure and breakdowns. A visual inspection of your hoses can help you determine the proper time to replace them. Cracks, bulges, and hardened hoses are all signs that your radiator hoses are nearing the end of their useful life. Poor heating system performance also indicates a problem with your hoses. Heat, vibrations, and corrosion are all contributing factors to bad radiator hoses. A coolant leak in either green, red, or yellow liquid is another warning sign of a cracked or corroded radiator hose that should be replaced. Bad hoses can cause serious engine damage through an overheating engine or catastrophic failure. At the first sign of a bad radiator hose, be sure to contact our service staff to have your radiator hose replaced.<br><br><span class="text-danger">Approx. Time: 60 Minutes</span></p>
				<a href="appoinment.php" class="btn-blue btn">Appointment</a>
				<script type="text/javascript">
					var eng = `<h3 class="text-blue">The Basics Behind Radiator Hose Replacement Services</h3><p>Your car or truck’s radiator hoses, which connect the engine to the radiator, are important components that maintain consistent internal engine temperatures. The upper hose connects to the top of the engine, while the lower hose connects to the bottom. Coolant flows through the engine to cool internal temperatures and works with the hoses. Radiator hoses carry hot coolant away from the engine and into the radiator, a large tank with small channels where the coolant flows to dissipate heat. Radiator fans, which are located behind the radiator, help cool the antifreeze or coolant once it enters. The radiator hoses also carry the coolant back into the engine to absorb the heat created during the combustion process. Once the engine reaches operating temperatures, the hot coolant cycles back to the radiator where it is cooled again. Because the engine can reach extreme temperatures, the coolant is often extremely hot. Over time, hot coolant can cause radiator hoses to deteriorate from the inside out.</p><h3 class="text-blue">Why Should You Have Radiator Hose Replacement Services Performed?</h3><p>Replacing your radiator hoses is one way to minimize the chance of engine failure and breakdowns. A visual inspection of your hoses can help you determine the proper time to replace them. Cracks, bulges, and hardened hoses are all signs that your radiator hoses are nearing the end of their useful life. Poor heating system performance also indicates a problem with your hoses. Heat, vibrations, and corrosion are all contributing factors to bad radiator hoses. A coolant leak in either green, red, or yellow liquid is another warning sign of a cracked or corroded radiator hose that should be replaced. Bad hoses can cause serious engine damage through an overheating engine or catastrophic failure. At the first sign of a bad radiator hose, be sure to contact our service staff to have your radiator hose replaced.<br><br><span class="text-danger">Approx. Time: 60 Minutes</span></p><a href="appoinment.php" class="btn-blue btn">Appointment</a>`;
					var head_e = 'Radiator-Hose-Replacement';
					var head_f = 'Remplacement des durites de radiateur';
					var fre = `<h3 class="text-blue">L&#39;essentiel des services de remplacement de la durite de radiateur</h3><p>Les durites de radiateur de votre voiture, qui relient le moteur au radiateur, sont des
composants importants qui permettent de maintenir une température interne du moteur
constante. La durite supérieure se raccorde au sommet du moteur, tandis que celle inférieur
se raccorde au bas. Le liquide de refroidissement circule dans le moteur pour refroidir les
températures internes et sa fonctionne des autres durites. Les durites de radiateur
transportent le liquide de refroidissement chaud loin du moteur. Dans le radiateur, un grand
réservoir avec de petits canaux où le liquide de refroidissement s&#39;écoule pour dissiper la chaleur. Les ventilateurs de radiateur, situés derrière le radiateur, aident à refroidir l&#39;antigel
ou le liquide de refroidissement une fois qu&#39;il est entré. Les tuyaux de radiateur renvoient
également le liquide de refroidissement dans le moteur pour absorber la chaleur créée
pendant le processus de combustion. Une fois que le moteur a atteint la température de
fonctionnement, le liquide de refroidissement chaud revient au radiateur où il est refroidi.
Le moteur pouvant atteindre des températures extrêmes, le liquide de refroidissement est
souvent extrêmement chaud. Avec le temps, le liquide de refroidissement chaud peut
détériorer les tuyaux de radiateur de l&#39;intérieur vers l&#39;extérieur.</p><h3 class="text-blue">Pourquoi devriez-vous remplacer les durites de radiateur</h3><p>Le remplacement des durites de radiateur est un moyen de réduire les risques de panne moteur et de panne. Une inspection visuelle de vos durites peut vous aider à déterminer le moment opportun pour les remplacer. Des fissures, des renflements et des durites durcis
indiquent que vos durites de radiateur approchent de la fin de leur durée de vie utile. Une
mauvaise performance du système de chauffage indique également un problème avec vos
durites. La chaleur, les vibrations et la corrosion sont des facteurs qui contribuent à la
détérioration des tuyaux de radiateur. Une fuite de liquide de refroidissement dans un
liquide vert, rouge ou jaune est un autre signe d&#39;alerte d&#39;une durite de radiateur fissurée ou
corrodée qui doit être remplacée. Des durites défectueuses peuvent endommager
gravement le moteur en raison d&#39;une surchauffe du moteur ou d&#39;une défaillance
catastrophique. Au premier signe d&#39;une mauvaise durite de radiateur, assurez-vous de
contacter notre personnel de service pour la faire remplacée.<br><br><span class="text-danger">Approx. Time: 60 Minutes</span></p><a href="appoinment.php" class="btn-blue btn">RENDEZ-VOUS</a>`;

				</script>

<?php	}
else if ($_GET['pg'] == 'Serpentine-Belt-Replacement') { ?>
				<h3 class="text-blue">The Basics Behind Serpentine Belt Replacement Services</h3>
				<p>As the timing belt synchronizes engine processes, the serpentine belt powers peripheral processes in the engine compartment, like the power steering pump, water pump, cooling fan, air conditioner, and alternator. The serpentine belt receives its name from the snake-like path it takes through the various steering and electrical components it powers. Belt tension also plays an important role in serpentine belt maintenance. A properly tensioned belt helps promote long belt life while ensuring that all components are not overloaded or strained during operation. Serpentine belts are tough, built to sustain years of continued and heavy use, but they do have a natural life projected by every manufacturer. Periodic inspections of your serpentine belt will help prevent breakdowns, though replacing your serpentine belt is a natural part of overall car maintenance. If you suspect trouble with your serpentine belt, please give us a call or contact us for assistance.</p>
				<h3 class="text-blue">Why Should You Have Serpentine Belt Replacement Services Performed?</h3>
				<p>Because your serpentine belt powers varying processes in the front of your engine, failure of the belt will result in failure of the other processes. If the serpentine belt fails to power the water pump, an important part of the cooling system, your engine could overheat and break down. Steering would also be impossible without a fully functioning belt. Regular inspections can keep your serpentine belt operating as intended. Visual inspections are the best way to detect early signs of serpentine belt issues, like frays and cracks. Trouble turning or steering at low speeds is another sign of possible belt failure. A loose belt can result in overheating, engine noise, or a dead battery. Manufacturers advise adhering to specific maintenance intervals for scheduling a serpentine belt replacement. When it’s time to replace your serpentine belt, just give us a call or contact us online.<br><br><span class="text-danger">Approx. Time: 60 Minutes</span></p>
				<a href="appoinment.php" class="btn-blue btn">Appointment</a>
				<script type="text/javascript">
					var eng = `<h3 class="text-blue">The Basics Behind Serpentine Belt Replacement Services</h3><p>As the timing belt synchronizes engine processes, the serpentine belt powers peripheral processes in the engine compartment, like the power steering pump, water pump, cooling fan, air conditioner, and alternator. The serpentine belt receives its name from the snake-like path it takes through the various steering and electrical components it powers. Belt tension also plays an important role in serpentine belt maintenance. A properly tensioned belt helps promote long belt life while ensuring that all components are not overloaded or strained during operation. Serpentine belts are tough, built to sustain years of continued and heavy use, but they do have a natural life projected by every manufacturer. Periodic inspections of your serpentine belt will help prevent breakdowns, though replacing your serpentine belt is a natural part of overall car maintenance. If you suspect trouble with your serpentine belt, please give us a call or contact us for assistance.</p><h3 class="text-blue">Why Should You Have Serpentine Belt Replacement Services Performed?</h3><p>Because your serpentine belt powers varying processes in the front of your engine, failure of the belt will result in failure of the other processes. If the serpentine belt fails to power the water pump, an important part of the cooling system, your engine could overheat and break down. Steering would also be impossible without a fully functioning belt. Regular inspections can keep your serpentine belt operating as intended. Visual inspections are the best way to detect early signs of serpentine belt issues, like frays and cracks. Trouble turning or steering at low speeds is another sign of possible belt failure. A loose belt can result in overheating, engine noise, or a dead battery. Manufacturers advise adhering to specific maintenance intervals for scheduling a serpentine belt replacement. When it’s time to replace your serpentine belt, just give us a call or contact us online.<br><br><span class="text-danger">Approx. Time: 60 Minutes</span></p><a href="appoinment.php" class="btn-blue btn">Appointment</a>`;
					var head_e = 'Serpentine-Belt-Replacement';
					var head_f = 'Remplacement de la courroie serpentine';
					var fre = `<h3 class="text-blue">L&#39;essentiel des services de remplacement de la courroie serpentine</h3><p>Lorsque la courroie de synchronisation synchronise les processus du moteur, la courroie
serpentine alimente les processus périphériques dans le compartiment moteur, tels que la
pompe de direction assistée, la pompe à eau, le ventilateur de refroidissement, le
climatiseur et l&#39;alternateur. La courroie serpentine tire son nom du chemin sinueux qu’elle
emprunte à travers les différents composants électriques qu’elle alimente. La tension de la
courroie joue également un rôle important dans l&#39;entretien de la courroie serpentine. Une
courroie correctement tendue aide à prolonger la durée de vie de la courroie tout en
veillant à ce que tous les composants ne soient ni surchargés ni soumis à des contraintes de
fonctionnement. Les courroies serpentines sont robustes, conçues pour durer des années
d’utilisation intensive et continue, mais elles ont une durée de vie naturelle projetée par
tous les fabricants. Des inspections périodiques de votre ceinture en serpentin aideront à
prévenir les pannes, bien que le remplacement de votre ceinture en serpentin fasse
naturellement partie de l’entretien général de votre voiture. Si vous soupçonnez un
problème avec votre courroie serpentine, appelez-nous ou contactez-nous pour obtenir de
l&#39;aide.</p><h3 class="text-blue">Pourquoi devriez-vous remplacer la courroie serpentine?</h3><p>Étant donné que votre courroie serpentine alimente divers processus situés à l&#39;avant de
votre moteur, une défaillance de la courroie entraînera une défaillance des autres

processus. Si la courroie serpentine ne parvient pas à alimenter la pompe à eau, une partie
importante du système de refroidissement, votre moteur pourrait surchauffer et tomber en
panne. La direction serait également impossible sans une courroie pleinement fonctionnelle.
Des inspections régulières permettent à votre courroie serpentine de fonctionner comme
prévu. Les inspections visuelles sont le meilleur moyen de détecter les signes précoces de
problèmes liés à la courroie serpentine, tels que les effilures et les fissures. Des difficultés à
tourner ou à diriger à basse vitesse sont un autre signe de défaillance possible de la
courroie. Une courroie desserrée peut entraîner une surchauffe, des bruits de moteur ou
une batterie à plat. Les fabricants conseillent de respecter des intervalles de maintenance
spécifiques pour planifier le remplacement de la courroie serpentine. Au moment de
remplacer votre courroie serpentine, appelez-nous ou contactez-nous en ligne.<br><br><span class="text-danger">Approx. Time: 60 Minutes</span></p><a href="appoinment.php" class="btn-blue btn">RENDEZ-VOUS</a>`;

				</script>
<?php	}
else if ($_GET['pg'] == 'Timing-Belt-Replacement') { ?>
				<h3 class="text-blue">The Basics Behind Timing Belt Replacement Services</h3>
				<p>The timing belt, or timing chain in some vehicles, is a drive belt that synchronizes the rotation of the engine’s crankshaft and camshaft with the opening and closing of your engine’s valves. Depending on the vehicle, it may also rotate the water pump. When the crankshaft turns, the timing belt turns the camshaft, which opens and closes the engine valves to allow the pistons to move up and down. Your vehicle’s engine operates in four phases: intake, compression, combustion, and exhaust. During the intake phase, intake valves open and exhaust valves close as fuel and air enter the cylinders. As the air and fuel is mixed, compressed, and ignited by spark plugs during the compression and combustion phases, the valves close. The remaining air and fuel is pushed out of the exhaust valve during the exhaust phase. The timing belt is responsible for synchronizing this process and for opening and closing valves during normal engine operation.</p>
				<h3 class="text-blue">Why Should You Have Timing Belt Replacement Services Performed?</h3>
				<p>Avoiding a timing belt replacement can result in complete engine failure. A worn or stretched belt can disrupt the operating order of the valves and pistons, which can result in a piston hitting a valve and damaging the engine. Timing belt failure warning signs include rough idling or difficulty starting the engine. Cracks on the belt, which is made of reinforced rubber, are an indication that it may soon break. Replacement of your timing belt will help keep your engine performing as it should and ensure you avoid expensive future repairs. During our replacement service, your belt will be replaced and synchronized with the crankshaft and camshaft to restore proper operating precision and order. It is widely recommended that you have your water pump changed during a timing belt replacement service as well. If your water pump fails later, it can do great damage to your vehicle. Since the water pump is easy to change during a timing belt replacement, consider having a new one installed at this time. Referring to your owner’s manual will help determine the appropriate service intervals for timing belt maintenance.<br><br><span class="text-danger">Approx. Time: 180 Minutes</span></p>
				<a href="appoinment.php" class="btn-blue btn">Appointment</a>
				<script type="text/javascript">
					var eng = `<h3 class="text-blue">The Basics Behind Timing Belt Replacement Services</h3><p>The timing belt, or timing chain in some vehicles, is a drive belt that synchronizes the rotation of the engine’s crankshaft and camshaft with the opening and closing of your engine’s valves. Depending on the vehicle, it may also rotate the water pump. When the crankshaft turns, the timing belt turns the camshaft, which opens and closes the engine valves to allow the pistons to move up and down. Your vehicle’s engine operates in four phases: intake, compression, combustion, and exhaust. During the intake phase, intake valves open and exhaust valves close as fuel and air enter the cylinders. As the air and fuel is mixed, compressed, and ignited by spark plugs during the compression and combustion phases, the valves close. The remaining air and fuel is pushed out of the exhaust valve during the exhaust phase. The timing belt is responsible for synchronizing this process and for opening and closing valves during normal engine operation.</p><h3 class="text-blue">Why Should You Have Timing Belt Replacement Services Performed?</h3>
				<p>Avoiding a timing belt replacement can result in complete engine failure. A worn or stretched belt can disrupt the operating order of the valves and pistons, which can result in a piston hitting a valve and damaging the engine. Timing belt failure warning signs include rough idling or difficulty starting the engine. Cracks on the belt, which is made of reinforced rubber, are an indication that it may soon break. Replacement of your timing belt will help keep your engine performing as it should and ensure you avoid expensive future repairs. During our replacement service, your belt will be replaced and synchronized with the crankshaft and camshaft to restore proper operating precision and order. It is widely recommended that you have your water pump changed during a timing belt replacement service as well. If your water pump fails later, it can do great damage to your vehicle. Since the water pump is easy to change during a timing belt replacement, consider having a new one installed at this time. Referring to your owner’s manual will help determine the appropriate service intervals for timing belt maintenance.<br><br><span class="text-danger">Approx. Time: 60 Minutes</span></p><a href="appoinment.php" class="btn-blue btn">Appointment</a>`;
					var head_e = 'Timing-Belt-Replacement';
					var head_f = 'Remplacement de la courroie de distribution';
					var fre = `<h3 class="text-blue">L&#39;essentiel des services de remplacement de la courroie de distribution</h3><p>La courroie de distribution, ou chaîne de distribution de certains véhicules, est une courroie
qui synchronise la rotation du vilebrequin et de l’arbre à cames du moteur avec l’ouverture
et la fermeture des soupapes de votre moteur. Selon le véhicule, il est également possible
de faire tourner la pompe à eau. Lorsque le vilebrequin tourne, la courroie de distribution
fait tourner l&#39;arbre à cames, qui ouvre et ferme les soupapes du moteur pour permettre aux
pistons de monter et de descendre. Le moteur de votre véhicule fonctionne en quatre
phases: admission, compression, combustion et échappement. Pendant la phase
d&#39;admission, les soupapes d&#39;admission s&#39;ouvrent et les soupapes d&#39;échappement se ferment
lorsque du carburant et de l&#39;air pénètrent dans les cylindres. Lorsque l&#39;air et le carburant
sont mélangés, comprimés et enflammés par des bougies d&#39;allumage pendant les phases de
compression et de combustion, les vannes se ferment. L&#39;air et le carburant restants sont
expulsés par la soupape d&#39;échappement pendant la phase d&#39;échappement. La courroie de
distribution est responsable de la synchronisation de ce processus et de l’ouverture et de la
fermeture des soupapes pendant le fonctionnement normal du moteur.</p><h3 class="text-blue">Pourquoi devriez-vous remplacer la courroie de distribution?</h3><p>Éviter le remplacement de la courroie de distribution peut entraîner une panne complète du
moteur. Une courroie usée ou étirée peut perturber l&#39;ordre de fonctionnement des
soupapes et des pistons, ce qui pourrait faire en sorte qu&#39;un piston heurte une soupape et
endommage le moteur. Les signes avertisseurs de défaillance de la courroie de distribution
incluent un ralenti accéléré ou une difficulté à démarrer le moteur. Les fissures sur la
courroie, qui est faite de caoutchouc renforcé, indiquent qu’elle risque de se briser. Le
remplacement de votre courroie de distribution aidera votre moteur à continuer de
fonctionner comme prévu et vous évitera des réparations coûteuses. Lors de notre service
de remplacement, votre courroie sera remplacée et synchronisée avec le vilebrequin et
l’arbre à cames afin de rétablir la précision et l’ordre de fonctionnement. Il est
généralement recommandé de changer votre pompe à eau pendant un service de
remplacement de la courroie de distribution. Si votre pompe à eau tombe en panne plus
tard, cela peut causer de gros dommages à votre véhicule. Étant donné que la pompe à eau est facile à changer lors du remplacement de la courroie de distribution, pensez à en
installer une nouvelle à ce stade. Se reporter à votre manuel du constructeur vous aidera à
déterminer les intervalles d’entretien appropriés pour l’entretien de la courroie de
distribution.<br><br><span class="text-danger">Approx. Time: 180 Minutes</span></p><a href="appoinment.php" class="btn-blue btn">RENDEZ-VOUS</a>`;

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