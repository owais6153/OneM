<?php 
if ($_REQUEST['pg'] == 'Belt-and-Hoes') {
	?>
	<div class="container pb-5">
<div class="row">
	<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="hhh">1. Heater Hose Replacement</h4>	
		<p id="hhp">Heater hoses play a crucial role in a vehicle’s heating system, which operates in conjunction with the cooling system...<br><span class="text-danger">Approx. Time: 60 Minutes</span>
		</p>
		<a href="Belt-and-hoes.php?pg=Heater-Hose-Replacement" class="vm btn btn-blue">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>
	</div>
	</div>
		<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="rhh">2. Radiator Hose Replacement</h4>	
		<p id="rhp">Your car or truck’s radiator hoses, which connect the engine to the radiator, are important components that maintain...<br><span class="text-danger">Approx. Time: 60 Minutes</span>
		</p>
		<a href="Belt-and-hoes.php?pg=Radiator-Hose-Replacement" class="btn btn-blue vm">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>
	</div>
	</div>

</div>
<div class="row">
	<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="sbh">3. Serpentine Belt Replacement</h4>	
		<p id="sbp">As the timing belt synchronizes engine processes, the serpentine belt powers peripheral processes in the engine compartment...<br><span class="text-danger">Approx. Time: 60 Minutes</span>
		</p>
		<a href="Belt-and-hoes.php?pg=Serpentine-Belt-Replacement" class="btn vm btn-blue">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>
	</div>
	</div>
		<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="tbh">4. Timing Belt Replacement</h4>	
		<p id="tbp">The timing belt, or timing chain in some vehicles, is a drive belt that synchronizes the rotation of the engine’s...<br><span class="text-danger">Approx. Time: 180 Minutes</span>
		</p>
		<a href="Belt-and-hoes.php?pg=Timing-Belt-Replacement" class="btn btn-blue vm">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>	</div>
	</div>

</div>
</div>
<script type="text/javascript">
		var ap = document.getElementsByClassName('ap');
		var vm = document.getElementsByClassName('vm');
		var cata = document.getElementById('cata');
		var ser = [document.getElementById('hhh'),document.getElementById('hhp'),document.getElementById('rhh'),document.getElementById('rhp'),document.getElementById('sbh'),document.getElementById('sbp'),document.getElementById('tbh'),document.getElementById('tbp'),]
		function lang_trans(){
		var lng = document.getElementById('lang').value;
		//Translate header
		
		if (lng == 'fre') {
			for(let i = 0; i < ap.length; i++){
				ap[i].innerHTML = 'RENDEZ-VOUS';
				vm[i].innerHTML = 'AFFICHER PLUS';
			}

			ser[0].innerHTML = 'Remplacement des durites de chauffage';
			ser[1].innerHTML = 'Les durites de chauffage jouent un rôle crucial dans le système de chauffage d’un véhicule, qui fonctionne conjointement avec le système de refroidissement ....<br><span class="text-danger">Approx. Time: 60 Minutes</span>';
			ser[2].innerHTML = 'Remplacement des durites de radiateur';
			ser[3].innerHTML = 'Les durites de radiateur de votre voiture, qui relient le moteur au radiateur, sont des composants importants qui ....<br><span class="text-danger">Approx. Time: 60 Minutes</span>';
			ser[4].innerHTML = 'Remplacement de la courroie serpentine';
			ser[5].innerHTML = 'Lorsque la courroie de distribution synchronise les processus du moteur, la courroie serpentine alimente les processus périphériques dans le compartiment moteur ...<br><span class="text-danger">Approx. Time: 60 Minutes</span>';
			ser[6].innerHTML = 'Remplacement de la courroie de distribution';
			ser[7].innerHTML = 'La courroie de distribution, ou chaîne de distribution de certains véhicules, est une courroie qui synchronise la rotation du ...<br><span class="text-danger">Approx. Time: 180 Minutes</span>';
		document.getElementById('head').innerHTML = 'Courroies et Durites';	
		 cata.innerHTML = `<h3 class='text-blue'>Description Ceinture &amp; Houes</h3>
<p>Les courroies et les Durites de votre véhicule participent aux processus du système de
refroidissement, du système de climatisation, du système de charge et du moteur. Ces
courroies et durites jouent un rôle crucial dans les opérations fonctionnelles à l&#39;intérieur
de votre véhicule. La durite du chauffage et celle du radiateur acheminent du liquide de
refroidissement vers et depuis le moteur, radiateur et le bloc chauffage. La courroie de
distribution est responsable du maintien de la précision du moteur en synchronisant la
rotation du vilebrequin et de l’arbre à cames, qui déplacent les soupapes et les pistons
du moteur. À la place des courroies de distribution, certains véhicules utilisent des
chaînes de distribution. À l&#39;extérieur du moteur, la courroie serpentine transmet la
puissance de l&#39;avant du moteur aux autres systèmes du véhicule, comme le système de
climatisation et le système de charge. Certains facteurs contribuant à l&#39;usure de vos
courroies et de vos durites incluent l&#39;âge du véhicule, le kilométrage, la tension de la
courroie, la défaillance du collier de serrage, la dégradation électrochimique et la
contamination par l&#39;huile. À long terme, l’entretien courant et le remplacement des
courroies et des durites de votre véhicule éviteront les pannes et les réparations
coûteuses.</p>
<h3 class='text-blue'>Avantages des courroies et des durites</h3><p>Comparées aux autres composants de votre voiture, les courroies et les durites ont l&#39;une
des durées de vie les plus courtes. Ces articles sont constamment exposés à la chaleur
du moteur, aux vibrations du véhicule et aux produits chimiques nocifs, susceptibles de
provoquer des fissures et des fuites. Certains symptômes présentent des défaillances
pour les courroies et les durites en l’occurrence les bruits de grincement, de crissement
ou de grincement qui commencent lors du démarrage du moteur ou apparaissent
pendant le fonctionnement du véhicule. Il convient de noter que les sons de meulage
près des courroies sont généralement associés à un mauvais palier de poulie plutôt qu&#39;à
la courroie elle-même, car le palier de poulie peut geler et finalement conduire à un
remplacement de la courroie. Une autre perte de courant, de liquide de refroidissement
ou d’autres liquides, des voyants lumineux du tableau de bord, une montée de vapeur
du moteur et une défaillance de la climatisation sont d’autres symptômes d’une
mauvaise courroie ou d’une mauvaise durite. Bien que l&#39;entretien courant des courroies
et des durites soit toujours important, l&#39;été est une saison particulièrement importante
pour garder un œil sous le capot en raison de la hausse des températures, qui accélérera
la détérioration des composants en caoutchouc. Comme les courroies et les durites
peuvent être difficiles à inspecter visuellement, veillez à suivre les recommandations du
fabricant pour l’entretien programmé.</p>`;
		}
		else if(lng == 'eng'){
			for(let i = 0; i < ap.length; i++){
				ap[i].innerHTML = 'Appointment';
				vm[i].innerHTML = 'View More';
			}
		document.getElementById('head').innerHTML = 'Belt-and-Hoes';
			ser[0].innerHTML = '1. Heater Hose Replacement';
			ser[1].innerHTML = 'Heater hoses play a crucial role in a vehicle’s heating system, which operates in conjunction with the cooling system...<br><span class="text-danger">Approx. Time: 60 Minutes</span>';
			ser[2].innerHTML = '2. Radiator Hose Replacement';
			ser[3].innerHTML = 'Your car or truck’s radiator hoses, which connect the engine to the radiator, are important components that maintain...<br><span class="text-danger">Approx. Time: 60 Minutes</span>';
			ser[4].innerHTML = 'Serpentine Belt Replacement';
			ser[5].innerHTML = 'As the timing belt synchronizes engine processes, the serpentine belt powers peripheral processes in the engine compartment...<br><span class="text-danger">Approx. Time: 60 Minutes</span>';
			ser[6].innerHTML = '4. Timing Belt Replacement';
			ser[7].innerHTML = 'The timing belt, or timing chain in some vehicles, is a drive belt that synchronizes the rotation of the engine’s...<br><span class="text-danger">Approx. Time: 180 Minutes</span>';
		cata.innerHTML = `<h3 class="text-blue">Description Belt & Hoes
</h3><p>Your vehicle’s belts and hoses are involved in processes within the cooling system, air conditioning system, charging system, and engine. These belts and hoses play crucial roles in functional operations inside your vehicle. The heater hose and radiator hose carry liquid coolant to and from the engine, radiator, and heater core. The timing belt is responsible for maintaining engine precision by synchronizing the rotation of the crankshaft and camshaft, which move the engine’s valves and pistons. However, not all vehicles contain timing belts. In place of timing belts, some vehicles use timing chains. On the outside of the engine, the serpentine belt transmits power from the front of the engine to other systems in the vehicle, like the air conditioning system and charging system. Some factors that contribute to wear and tear on your belts and hoses include vehicle age, mileage, belt tension, hose clamp failure, electrochemical degradation, and oil contamination. In the long run, routine maintenance and replacements of your vehicle’s belts and hoses will prevent breakdowns and costly repairs.</p>
<h3 class="text-blue">Benefits of Belts & Hoses</h3>
<p>When compared to other components in your car, belts and hoses have one of the shortest life spans. These items are constantly exposed to engine heat, vehicle vibrations, and harmful chemicals, which all have the potential to cause cracks and leaks. Some symptoms to be aware of for belts and hoses nearing failure include squeaking, screeching, or grinding noises that begin when starting your engine or appear during vehicle operation. It's worth noting that grinding sounds near belts are usually associated with a bad pulley bearing rather than the belt itself, as the pulley bearing may freeze up and ultimately lead to a belt replacement. Other symptoms of a bad belt or hose include loss of power, leaking coolant or other fluids, illuminated dashboard lights, rising steam from the engine, and air conditioning failure. While routine maintenance of belts and hoses is always important, summertime is an especially important season to keep an eye under the hood due to increased temperatures, which will accelerate deterioration of the rubber components. Since belts and hoses can be difficult to inspect visually, be sure to follow your manufacturer’s recommendations for scheduled maintenance.</p>`;
		}

		}
	</script>
	<?php
}
else if ($_REQUEST['pg'] == 'Brake-Repair') {
?>
<div class="container pb-5">
<div class="row">
	<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="bih">1. Brake Inspection</h4>	
		<p id="bip">Brakes use friction to bring a vehicle to a complete stop. This friction creates a substantial amount of heat...<br><span class="text-danger">Approx. Time: 30 Minutes</span>
		</p>
		<a href="Brake-repair.php?pg=Brake-Inspection" class="vm btn btn-blue">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>
	</div>
	</div>
		<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="brrh">2. Brake Rotor Replacement</h4>	
		<p id="brrp">Your brake system’s rotors, in conjunction with the brake pads, help bring your vehicle to a complete stop...<br><span class="text-danger">Approx. Time: 60 Minutes</span>
		</p>
		<a href="Brake-repair.php?pg=Brake-Rotor-Replacement" class=" vm btn btn-blue">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>
	</div>
	</div>

</div>
<div class="row">
	<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="fdbrh">3. Front Disc Brake Repair</h4>	
		<p id="fdbrp">In the brake systems of modern vehicles, disc brakes are used in both the front and rear of the vehicle...<br><span class="text-danger">Approx. Time: 120 Minutes</span>
		</p>
		<a href="Brake-repair.php?pg=Front-Disc-Brake-Repair" class="btn btn-blue vm">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>
	</div>
	</div>
		<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="pbah">4. Parking Brake Adjustment</h4>	
		<p id="pbap">Whether you have a disc brake system or a drum brake system, you have a parking brake that is responsible for locking your vehicle...<br><span class="text-danger">Approx. Time: 30 Minutes</span>
		</p>
		<a href="Brake-repair.php?pg=Parking-Brake-Adjustment" class="vm btn btn-blue">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>
	</div>
	</div>

</div>
<div class="row">
	<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="rdbrh">5. Rear Disc Brake Repair</h4>	
		<p id="rdbrp">Some brake systems use disc brakes in the rear of a vehicle. Most rear disc brake systems contain brake pads, calipers, rotors...<br><span class="text-danger">Approx. Time: 120 Minutes</span>
		</p>
		<a href="Brake-repair.php?pg=Rear-Disc-Brake-Repair" class="vm btn btn-blue">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>
	</div>
	</div>
		<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="rdbrrh">6. Rear Drum Brake Repair</h4>	
		<p id="rdbrrp">Some brake systems use rear drum brakes instead of rear disc brakes. Drum brake components consist of brake drums..<br><span class="text-danger">Approx. Time: 120 Minutes</span>
		</p>
		<a href="Brake-repair.php?pg=Rear-Drum-Brake-Repair" class="vm btn btn-blue">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>	</div>
	</div>

</div>
</div>
<script type="text/javascript">
		var ap = document.getElementsByClassName('ap');
		var vm = document.getElementsByClassName('vm');
		var cata = document.getElementById('cata');
		var ser = [document.getElementById('bih'),document.getElementById('bip'),document.getElementById('brrh'),document.getElementById('brrp'),document.getElementById('fdbrh'),document.getElementById('fdbrp'),document.getElementById('pbah'),document.getElementById('pbap'),document.getElementById('rdbrh'),document.getElementById('rdbrp'),document.getElementById('rdbrrh'),document.getElementById('rdbrrp'),]
		function lang_trans(){
		var lng = document.getElementById('lang').value;
		if (lng == 'fre') {
			for(let i = 0; i < ap.length; i++){
				ap[i].innerHTML = 'RENDEZ-VOUS';
				vm[i].innerHTML = 'AFFICHER PLUS';
			}

			ser[0].innerHTML = '1. Inspection des freins';
			ser[1].innerHTML = 'Les freins utilisent le frottement pour immobiliser complètement un véhicule. Cette friction crée une quantité importante de chaleur ...<br><span class="text-danger">Approx. Time: 30 Minutes</span>';
			ser[2].innerHTML = '2. Remplacement du disque de frein';
			ser[3].innerHTML = 'Les rotors de votre système de freinage, associés aux plaquettes de frein, aident à immobiliser votre véhicule ...<br><span class="text-danger">Approx. Time: 60 Minutes</span>';
			ser[4].innerHTML = '3. Réparation du frein à disque avant';
			ser[5].innerHTML = `Dans les systèmes de freinage des véhicules modernes, les freins à disque sont utilisés à l'avant et à l'arrière du véhicule.<br><span class="text-danger">Approx. Time: 120 Minutes</span>`;
			ser[6].innerHTML = '4. Réglage du frein de stationnement';
			ser[7].innerHTML = 'Que vous ayez un système de frein à disque ou un système de frein à tambour, vous avez un frein de stationnement qui est responsable du verrouillage de votre véhicule ...<br><span class="text-danger">Approx. Time: 30 Minutes</span>';
			ser[8].innerHTML = '5. Réparation du frein à disque arrière';
			ser[9].innerHTML = `Certains systèmes de freinage utilisent des freins à disque à l'arrière d'un véhicule. La plupart des systèmes de freins à disque arrière contiennent des plaquettes de frein, des étriers, des rotors ...<br><span class="text-danger">Approx. Time: 120 Minutes</span>`;
			ser[10].innerHTML = '6. Réparation du frein à tambour arrière';
			ser[11].innerHTML = `Certains systèmes de freinage utilisent des freins à tambour arrière au lieu de freins à disque arrière. Les composants du frein à tambour sont constitués de tambours de frein.<br><span class="text-danger">Approx. Time: 120 Minutes</span>`;
		document.getElementById('head').innerHTML = 'Réparation de freins';	
		 cata.innerHTML = `<h3 class='text-blue'>Description de la réparation des freins</h3>
<p>Un système de freinage complet est essentiel à votre sécurité, à celle de vos passagers et à celle des autres conducteurs sur la route. Le système de freinage de votre véhicule implique des pièces de haute technologie et des mouvements précis qui arrêtent votre véhicule en convertissant l’énergie cinétique en énergie thermique. Lorsque vous appuyez sur la pédale de frein, le maître-cylindre met sous pression un système de conduites de frein hydrauliques conduisant à chacune des roues du véhicule. Les patins ou les sabots de frein s'appuient sur un disque ou un tambour et créent le frottement nécessaire pour ralentir le véhicule arrêt complet. Au fil du temps, ces frictions et cette chaleur risquent d'user les mâchoires de frein, les plaquettes de frein, les étriers, les disques de frein et autres composants de freinage. Bien que les composants de chaque système de freinage puissent varier, les signaux d’avertissement relatifs aux réparations imminentes des freins sont les mêmes.</p>
<h3 class='text-blue'>Avantages de la réparation des freins</h3><p>Les freins défectueux affichent des signaux d'avertissement pour l'entretien imminent des freins. Par exemple, si vos freins grincent ou grincent lors de l'utilisation, vos plaquettes de frein peuvent être usées et avoir besoin d'être remplacées. Si votre véhicule tire sur le côté lors du freinage, cela peut indiquer des freins usés, un étrier défectueux ou une faible quantité de liquide de frein dans les conduites de frein. Si votre pédale de frein appuie trop facilement, ce que vous appelez des freins «spongieux», cela peut indiquer une surcharge d'air dans les conduites de freins hydrauliques. Parfois, le système de diagnostic électronique de votre véhicule vous avertira d’un problème de freinage potentiel par un voyant de service situé sur le tableau de bord. Bien que ce ne soient que quelques-uns des signes les plus courants de problèmes potentiels du système de freinage de votre véhicule, le fait de remarquer ces signes de freins défectueux et de rechercher un service de freinage peut vous faire économiser de l'argent en bout de ligne. Notre personnel est formé à la maintenance et à l'entretien des systèmes de freinage avant et arrière et de tous les composants de système de freinage suivants: plaquettes de frein, mâchoires de frein, freins de stationnement, rotors, tambours et systèmes hydrauliques. Si vous présentez l'un des signes ou symptômes de mauvais freins mentionnés ci-dessus, par exemple des craquements ou des grincements inhabituels, contactez-nous en ligne ou appelez-nous aujourd'hui pour faire inspecter vos freins immédiatement.</p>`;
		}
		else if(lng == 'eng'){
			for(let i = 0; i < ap.length; i++){
				ap[i].innerHTML = 'Appointment';
				vm[i].innerHTML = 'View More';
			}
		document.getElementById('head').innerHTML = 'Brake-Repair';
			ser[0].innerHTML = '1. Brake Inspection';
			ser[1].innerHTML = 'Brakes use friction to bring a vehicle to a complete stop. This friction creates a substantial amount of heat...<br><span class="text-danger">Approx. Time: 30 Minutes</span>';
			ser[2].innerHTML = '2. Brake Rotor Replacement';
			ser[3].innerHTML = 'Your brake system’s rotors, in conjunction with the brake pads, help bring your vehicle to a complete stop...<br><span class="text-danger">Approx. Time: 60 Minutes</span>';
			ser[4].innerHTML = '3. Front Disc Brake Repair';
			ser[5].innerHTML = 'In the brake systems of modern vehicles, disc brakes are used in both the front and rear of the vehicle..<br><span class="text-danger">Approx. Time: 120 Minutes</span>';
			ser[6].innerHTML = '4. Parking Brake Adjustment';
			ser[7].innerHTML = 'Whether you have a disc brake system or a drum brake system, you have a parking brake that is responsible for locking your vehicle...<br><span class="text-danger">Approx. Time: 30 Minutes</span>';
			ser[8].innerHTML = '5. Rear Disc Brake Repair';
			ser[9].innerHTML = 'Some brake systems use disc brakes in the rear of a vehicle. Most rear disc brake systems contain brake pads, calipers, rotors...<br><span class="text-danger">Approx. Time: 120 Minutes</span>';
			ser[10].innerHTML = '6. Rear Drum Brake Repair';
			ser[11].innerHTML = 'Some brake systems use rear drum brakes instead of rear disc brakes. Drum brake components consist of brake drums..<br><span class="text-danger">Approx. Time: 120 Minutes</span>';

		cata.innerHTML = `<h3 class="text-blue">Description of Brake Repair</h3><p>A fully functioning brake system is crucial to your safety, the safety of your passengers, and the safety of other drivers on the road. Your vehicle’s brake system involves highly engineered parts and precise movements that stop your vehicle by converting kinetic energy into thermal energy. When you press down on the brake pedal, the master cylinder pressurizes a system of hydraulic brake lines leading to each of the vehicle’s wheels, where brake pads or shoes press against a disc or drum and create the necessary friction needed to slow the vehicle to a complete stop. Over time, this friction and heat has the potential to wear down the brake shoes, brake pads, calipers, brake rotors, and other braking components. While the components comprising each brake system may vary, the warning signs for impending brake repairs are the same.</p>
<h3 class="text-blue">Benefits of Brake Repair</h3>
<p>Bad brakes display warning signs for impending brake maintenance. For example, if your brakes squeal or grind when in use, then your brake pads may be worn and require replacements. If your vehicle pulls to one side when braking, then this may point to worn brakes, a malfunctioning caliper, or low brake fluid in the brake lines. If your brake pedal presses down too easily—also known as “spongy” brakes—then this may be an indication of too much air in the hydraulic brake lines. Sometimes, your vehicle’s electronic diagnostic system will alert you to a potential brake issue by a service indicator light on the dashboard. While these are only some of the most common signs of potential problems with your vehicle’s brake system, noticing these signs of faulty brakes and seeking out a brake service can save you money down the line. Our staff is trained in maintaining and servicing front and rear brake systems and all accompanying brake system components like brake pads, brake shoes, parking brakes, rotors, drums, and hydraulic systems. If you experience any of the above signs or symptoms of bad brakes, like unusual squealing or grinding noises, then contact us online or call us today to have your brakes inspected immediately.</p>`;
		}

		}
	</script>

<?php
}
else if ($_REQUEST['pg'] == 'Climate-Control-Systems') {
?>
	<div class="container pb-5">
<div class="row">
	<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="acsdh">1. Air Conditioning System Diagnostic</h4>	
		<p id="acsdp">Your vehicle’s air conditioning system cools, purifies, and circulates air throughout the vehicle to promote a comfortable cabin environment and...<br><span class="text-danger">Approx. Time: 60 Minutes</span>
		</p>
		<a href="Climate-Control-System.php?pg=Air-Conditioning-System-Diagnostic" class="vm btn btn-blue">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>
	</div>
	</div>
		<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="acssh">2. Air Conditioning System Service</h4>	
		<p id="acssp">Car air conditioning systems promote a comfortable cabin interior and help prevent driver fatigue. During normal vehicle operation...<br><span class="text-danger">Approx. Time: 60 Minutes</span>
		</p>
		<a href="Climate-Control-System.php?pg=Air-Conditioning-System-Service" class="btn btn-blue vm">View More</a>
		<a href="appoinment.php" class="ap btn btn-blue">Appoinment</a>
	</div>
	</div>

</div>
<div class="row">
	<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="hsdh">3. Heating System Diagnostic</h4>	
		<p id="hsdp">Your vehicle’s heating system absorbs excess engine heat through a coolant—a mixture of water and antifreeze. Hoses carry...<br><span class="text-danger">Approx. Time: 60 Minutes</span>
		</p>
		<a href="Climate-Control-System.php?pg=Heating-System-Diagnostic" class="vm btn btn-blue">View More</a>
		<a href="appoinment.php" class="ap btn btn-blue">Appoinment</a>
	</div>
	</div>
		<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="hssh">4. Heating System Service</h4>	
		<p id="hssp">In contrast to the cooling system, which removes heat from the engine, the heating system transfers the engine’s heat to the vehicle’s interior...<br><span class="text-danger">Approx. Time: 60 Minutes</span>
		</p>
		<a href="Climate-Control-System.php?pg=Heating-System-Service" class="vm btn btn-blue">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>	</div>
	</div>

</div>
</div>

<script type="text/javascript">
		var ap = document.getElementsByClassName('ap');
		var vm = document.getElementsByClassName('vm');
		var cata = document.getElementById('cata');
		var ser = [document.getElementById('acsdh'),document.getElementById('acsdp'),document.getElementById('acssh'),document.getElementById('acssp'),document.getElementById('hsdh'),document.getElementById('hsdp'),document.getElementById('hssh'),document.getElementById('hssp')];
		function lang_trans(){
		var lng = document.getElementById('lang').value;
		//Translate header
		if (lng == 'fre') {
			for(let i = 0; i < ap.length; i++){
				ap[i].innerHTML = 'RENDEZ-VOUS';
				vm[i].innerHTML = 'AFFICHER PLUS';
			}

			ser[0].innerHTML = '1. Diagnostic du système de climatisation';
			ser[1].innerHTML = `Le système de climatisation de votre véhicule refroidit, purifie et fait circuler l'air dans tout le véhicule pour créer un environnement de cabine confortable et ...<br><span class="text-danger">Approx. Time: 60 Minutes</span>`;
			ser[2].innerHTML = '2. Service de climatisation';
			ser[3].innerHTML = 'Les systèmes de climatisation des voitures favorisent un habitacle confortable et évitent la fatigue du conducteur. Pendant le fonctionnement normal du véhicule ...<br><span class="text-danger">Approx. Time: 60 Minutes</span>';
			ser[4].innerHTML = '3. Diagnostic du système de chauffage';
			ser[5].innerHTML = `Le système de chauffage de votre véhicule absorbe la chaleur excessive du moteur par le biais d’un liquide de refroidissement, mélange d’eau et d’antigel. Les tuyaux portent ...<br><span class="text-danger">Approx. Time: 60 Minutes</span>`;
			ser[6].innerHTML = '4. Service de système de chauffage';
			ser[7].innerHTML = 'Contrairement au système de refroidissement, qui dissipe la chaleur du moteur, le système de chauffage transfère la chaleur du moteur à l’intérieur du véhicule ...<br><span class="text-danger">Approx. Time: 60 Minutes</span>';
		
		document.getElementById('head').innerHTML = 'Systèmes de contrôle du climat';	
		 cata.innerHTML = `<h3 class='text-blue'>Description des systèmes de climatisation</h3>
<p>Un système de climatisation est un système complexe qui nécessite un entretien régulier pour une performance et un fonctionnement saisonniers accrus. Le système de climatisation d’un véhicule est composé de multiples systèmes plus petits qui fonctionnent ensemble pour maintenir un environnement de cabine confortable. Le système de climatisation est en mesure d’affecter et de réguler la température interne d’un véhicule au cours d’un cycle de processus. Bien que le système de climatisation soit principalement utilisé pour améliorer le confort des conducteurs et des passagers, il est parfois difficile de maintenir la température interne idéale au-delà de l’année. Dans des conditions météorologiques extrêmes, le maintien d'un climat interne adéquat peut réellement contribuer à la sécurité automobile. C'est pourquoi il est important pour vous de rechercher des réparations de climatisation dès les premiers signes de problèmes.</p>
<h3 class='text-blue'>Avantages des systèmes de contrôle du climat</h3><p>Lorsque le système de climatisation de votre véhicule fonctionne mal ou cesse de fonctionner, il est important de prévoir un service de réparation. En plus de retrouver l’atmosphère de cabine confortable qui était la sienne avant les problèmes de votre système, vous pouvez contribuer à assurer votre sécurité en tant que conducteur. Si vous prêtez attention aux signes avant-coureurs d'un service imminent du système de contrôle du climat, vous pourrez peut-être éviter une panne du système et des problèmes de sécurité ultérieurs. De plus, votre manuel du propriétaire doit indiquer les intervalles d’entretien réguliers recommandés pour les systèmes de climatisation. Le fait de détecter les signes avant-coureurs et de remplacer ou de réparer les composants du système de climatisation, au besoin, vous aidera à contrôler à tout moment la sortie d’air.</p>`;
		}
		else if(lng == 'eng'){
			for(let i = 0; i < ap.length; i++){
				ap[i].innerHTML = 'Appointment';
				vm[i].innerHTML = 'View More';
			}
		document.getElementById('head').innerHTML = 'Climate-Control-Systems';
			ser[0].innerHTML = '1. Air Conditioning System Diagnostic';
			ser[1].innerHTML = 'Your vehicle’s air conditioning system cools, purifies, and circulates air throughout the vehicle to promote a comfortable cabin environment and...<br><span class="text-danger">Approx. Time: 60 Minutes</span>';
			ser[2].innerHTML = '2. Air Conditioning System Service';
			ser[3].innerHTML = 'Car air conditioning systems promote a comfortable cabin interior and help prevent driver fatigue. During normal vehicle operation...<br><span class="text-danger">Approx. Time: 60 Minutes</span>';
			ser[4].innerHTML = '3. Heating System Diagnostic';
			ser[5].innerHTML = 'In contrast to the cooling system, which removes heat from the engine, the heating system transfers the engine’s heat to the vehicle’s interior...<br><span class="text-danger">Approx. Time: 60 Minutes</span>';
			ser[6].innerHTML = '4. Heating System Service';
			ser[7].innerHTML = 'Whether you have a disc brake system or a drum brake system, you have a parking brake that is responsible for locking your vehicle...<br><span class="text-danger">Approx. Time: 60 Minutes</span>';
		cata.innerHTML = `<h3 class="text-blue">Description of Climate Control Systems</h3><p>A climate control system is a complex system that requires routine maintenance for increased seasonal performance and operation. A vehicle’s climate control system is comprised of multiple, smaller systems that work together to maintain a comfortable cabin environment. The climate control system is able to affect and regulate the internal temperature of a vehicle through a cycle of processes. Although the climate control system is primarily used to improve the comfort levels of both drivers and passengers, there are times over the course of the year when maintaining the ideal internal temperature becomes more than a matter of comfort. In severe weather conditions, maintaining the proper internal climate can actually factor into automotive safety. This is why it is important for you to seek climate control repairs at the first sign of trouble.</p>
<h3 class="text-blue">Benefits of Climate Control Systems</h3>
<p>When your vehicle’s climate control system malfunctions or stops working, it is important to schedule a climate control repair service. In addition to regaining the comfortable cabin environment you enjoyed prior to your system’s problems, you can help ensure your safety as a driver. If you pay attention to the warning signs of an impending climate control system service, you may be able to prevent a broken system and subsequent safety concerns. In addition, your owner’s manual should provide recommended regular service intervals for climate control systems. Catching early warning signs and replacing or repairing climate control system components as necessary will help ensure your ability to control air outflow at all times.</p>`;
		}

		}
	</script>




<?php
}
else if ($_REQUEST['pg'] == 'Cooling-System-Repair') {
?>
<div class="container pb-5">
<div class="row">
	<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="csffh">1. Cooling System Flush & Fill</h4>	
		<p id="cssfp">An overheating engine can cause major damage to various components and cost you a significant amount of time and money to fix...<br><span class="text-danger">Approx. Time: 60 Minutes</span>
		</p>
		<a href="Cooling-System-Repair.php?pg=Cooling-System-Flush-And-Fill" class="btn vm btn-blue">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>
	</div>
	</div>
		<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="cspth">2. Cooling System Pressure Test</h4>	
		<p id="csptp">In a vehicle with a combustion engine, fuel is converted into heat energy, which means the vehicle can get very hot very quickly...<br><span class="text-danger">Approx. Time: 30 Minutes</span>
		</p>
		<a href="Cooling-System-Repair.php?pg=Cooling-System-Pressure-Test" class="vm btn btn-blue">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>
	</div>
	</div>

</div>
<div class="row">
	<div class="col-md-6 mx-auto d-block p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="rrh">3. Replace Radiator</h4>
		<p id="rrp">The radiator on your car helps keep your engine cool. An overheated engine will lead to a breakdown, so radiator maintenance...<br><span class="text-danger">Approx. Time: 120 Minutes</span>
		</p>
		<a href="Cooling-System-Repair.php?pg=Replace-Radiator" class="vm btn btn-blue">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>
	</div>
	</div>
</div>
</div>


<script type="text/javascript">
		var ap = document.getElementsByClassName('ap');
		var vm = document.getElementsByClassName('vm');
		var cata = document.getElementById('cata');
		var ser = [document.getElementById('csffh'),document.getElementById('cssfp'),document.getElementById('cspth'),document.getElementById('csptp'),document.getElementById('rrh'),document.getElementById('rrp')];
		function lang_trans(){
		var lng = document.getElementById('lang').value;
		if (lng == 'fre') {
			for(let i = 0; i < ap.length; i++){
				ap[i].innerHTML = 'RENDEZ-VOUS';
				vm[i].innerHTML = 'AFFICHER PLUS';
			}

			ser[0].innerHTML = '1. Système de refroidissement affleurant de remplissage';
			ser[1].innerHTML = `Un moteur en surchauffe peut causer des dommages importants à divers composants et vous faire perdre beaucoup de temps et d’argent ...<br><span class="text-danger">Approx. Time: 60 Minutes</span>`;
			ser[2].innerHTML = '2. Test de pression du système de refroidissement';
			ser[3].innerHTML = 'Dans un véhicule à moteur à combustion, le carburant est converti en énergie thermique, ce qui signifie que le véhicule peut devenir très chaud très rapidement ...<br><span class="text-danger">Approx. Time: 30 Minutes</span>';
			ser[4].innerHTML = '3. Remplacer le radiateur';
			ser[5].innerHTML = `Le radiateur de votre voiture garde votre moteur au frais. Un moteur surchauffé entraînera une panne, ce qui rend la maintenance du radiateur ...<br><span class="text-danger">Approx. Time: 120 Minutes</span>`;
		
		document.getElementById('head').innerHTML = 'Système de refroidissement';	
		 cata.innerHTML = `<h3 class='text-blue'>Description de la réparation du système de refroidissement</h3>
<p>Le système de refroidissement comprend un ventilateur de refroidissement, une pompe à eau, un thermostat, un radiateur, un noyau de chauffage, une soupape de chauffage et diverses autres pièces fonctionnant ensemble pour dissiper et éliminer la chaleur du moteur du véhicule. Le système de refroidissement de votre véhicule est responsable de la réduction de la température à l'intérieur de votre moteur et de la prévention d'une éventuelle surchauffe. L’excès de chaleur peut s’accumuler à divers endroits dans le moteur de votre véhicule. Lorsque le moteur atteint les températures maximales de fonctionnement, le thermostat s'ouvre et libère l'antigel du moteur vers le radiateur, ce qui déclenche le flux circulatoire pour absorber l'excès de chaleur. L'antigel est également chargé d'empêcher les autres liquides moteur de bouillir ou de geler. Une fois que l'antigel a traversé le moteur, il retourne au radiateur où l'excès de chaleur s'échappe par les parois du radiateur. L'antigel est refroidi par le ventilateur de refroidissement et prêt à être libéré dans le moteur pour dissiper toute chaleur supplémentaire.</p>
<h3 class='text-blue'>Avantages de la réparation du système de refroidissement</h3><p>Au fil du temps, l'antigel se dégrade et perd de son efficacité. S'il n'est pas drainé et remplacé, le vieil antigel peut conduire à la corrosion. Pendant le rinçage et le remplissage du système de refroidissement, notre personnel vidange l’antigel du radiateur, rince le système de refroidissement et remplit le radiateur avec un nouvel antigel. Le ventilateur du système de refroidissement fait circuler l’air à travers le radiateur et évacue la chaleur excessive du moteur. Si le ventilateur de refroidissement ne fonctionne pas correctement, le moteur de votre véhicule surchauffera. Lors de l'inspection du service du système de refroidissement, nos experts vérifieront que le ventilateur de refroidissement n'est pas endommagé et que la courroie de ventilateur ne se fissure pas. Comme le radiateur est responsable du refroidissement de l'antigel lors de sa circulation dans le système de refroidissement, une fuite ou un flexible de radiateur brisé peut entraîner une panne majeure du moteur. Un test de pression de radiateur est un moyen de vérifier les fuites potentielles ou les dommages au radiateur. En fin de compte, négliger la maintenance de base du système de refroidissement et du radiateur peut conduire à un remplacement possible du radiateur et à des réparations majeures du moteur ou du radiateur sur la route.</p>`;
}
		else if(lng == 'eng'){
			for(let i = 0; i < ap.length; i++){
				ap[i].innerHTML = 'Appointment';
				vm[i].innerHTML = 'View More';
			}
		document.getElementById('head').innerHTML = 'Cooling-System-Repair';
			ser[0].innerHTML = '1. Cooling System Flush & Fill';
			ser[1].innerHTML = 'An overheating engine can cause major damage to various components and cost you a significant amount of time and money to fix...<br><span class="text-danger">Approx. Time: 60 Minutes</span>';
			ser[2].innerHTML = '2. Cooling System Pressure Test';
			ser[3].innerHTML = 'In a vehicle with a combustion engine, fuel is converted into heat energy, which means the vehicle can get very hot very quickly...<br><span class="text-danger">Approx. Time: 30 Minutes</span>';
			ser[4].innerHTML = '3. Replace Radiator';
			ser[5].innerHTML = 'The radiator on your car helps keep your engine cool. An overheated engine will lead to a breakdown, so radiator maintenance...<br><span class="text-danger">Approx. Time: 120 Minutes</span>';

		cata.innerHTML = `<h3 class="text-blue">Description of Cooling System Repair</h3><p>The cooling system consists of a cooling fan, water pump, thermostat, radiator, heater core, heater valve, and various other parts that primarily work together to dissipate and remove heat from a vehicle’s engine. Your vehicle’s cooling system is responsible for reducing the temperature inside your engine and preventing possible overheating. Excess heat can build in a variety of places in your vehicle’s engine. When the engine reaches maximum operating temperatures, the thermostat opens and releases antifreeze from the engine to the radiator, which initiates the circulatory flow to absorb excess heat. The antifreeze is also responsible for keeping other engine fluids from boiling or freezing. After the antifreeze flows through the engine, it cycles back to the radiator, where the excess heat escapes through the radiator’s walls. The antifreeze is cooled by the cooling fan and readied to be re-released into the engine to dissipate additional heat.</p>
<h3 class="text-blue">Benefits of Cooling System Repair</h3>
<p>Over time, antifreeze breaks down and loses its efficiency. If not drained and replaced, old antifreeze can lead to corrosion. During a cooling system flush and fill, our staff will drain the antifreeze from the radiator, flush the cooling system, and fill the radiator with new antifreeze. The cooling system’s cooling fan circulates air through the radiator and passes excess heat out of the engine. If the cooling fan malfunctions, your vehicle’s engine will overheat. During an inspection of the cooling system service, our experts will check the cooling fan for damage and the fan belt for cracks. Because the radiator is responsible for cooling the antifreeze as it circulates throughout the cooling system, a leak or a broken radiator hose can lead to major engine failure. A radiator pressure test is one way we can check for potential leaks or radiator damage. Ultimately, neglecting basic cooling system and radiator maintenance can lead to a potential radiator replacement and major engine or radiator repairs down the road.</p>`;
		}

		}
	</script>

<?php
}
else if ($_REQUEST['pg'] == 'Gearbox-Maintenance') {
	?>
<a href="appoinment.php" id="ap-btn" class="btn btn-blue btn-lg">Appointment</a>
	<script type="text/javascript">
		var cata = document.getElementById('cata');
		function lang_trans(){
		var lng = document.getElementById('lang').value;
		if (lng == 'fre') {
		document.getElementById('head').innerHTML = 'Maintenance boite auto';	
		 cata.innerHTML = `<h3 class='text-blue'>VIDANGE BOITE DE VITESSES AUTOMATIQUE</h3>
<p>Pourquoi l&#39;opération d&#39;une vidange sur une boite de vitesses est un entretien important :
La vidange d&#39;une boite de vitesses automatique et aussi importante que la vidange moteur de votre
véhicule.<br>
En effet, l&#39;huile subit des contraintes mécaniques, notamment la corrosion due principalement à la
friction des disques à l&#39;intérieur de la boite, ce qui génère des particules que nous retrouvons dans
l&#39;huile. Il faut donc la changer régulièrement, nous vous conseillons de faire une vidange totale tous
les 50 000 à 80 000 kms, ce qui rallongera la durée de vie de votre boite de vitesses automatique.<br>
<b class='text-warning'>ATTENTION!</b> Vidanger la moitié ne suffit pas, la vieille huile se mélangera alors à la nouvelle.
ONE M est équipé d&#39;une machine qui assure une vidange à 100 % de l&#39;huile contenue dans votre
boite de vitesses. Nous remplaçons également le filtre avec la pièce d&#39;origine.</p>
<h3 class='text-blue'>Quand changer l’huile de la transmission automatique?</h3><p>Comment vérifier l’ATF de la transmission automatique
L’opération de contrôle du niveau ATF d’un véhicule automatique est similaire à celle du contrôle du
niveau d’huile du moteur. La seule différence pour vérifier le niveau de l’huile de boite et que le
moteur doit être en marche.
Lorsque nous vérifions l’ATF, nous devons vérifier le niveau et la qualité. Bien que ces deux critères
soient importants, un niveau trop bas d’ATF peut provoquer des défaillances plus graves que si la
qualité de l’ATF est médiocre.
Quoi qu’il en soit, si nous constatons que le liquide de transmission sent le brûlé ou qu’il est marron,
nous devons le remplacer d’urgence.
Quand changer l’huile de transmission automatique?
L’huile d’une transmission automatique se détériore avec le temps. Certains facteurs accélèrent cette
détérioration, comme:
La circulation en milieu urbain oblige à faire des arrêts fréquents en raison de la circulation.
Le transport de charges lourdes.
L’attelage de remorques.
La raison pour laquelle l’ATF se détériore est que la température de la transmission augmente au fur
et à mesure qu’elle tourne. Plus le fluide n’est chaud, plus l’usure de la transmission est importante,
ce qui oblige les engrenages à travailler plus fort.
Les recommandations de cycles de vidanges d’huile de transmission varient en fonction du fabricant
et du type de boîte de vitesses. En général, ONE M recommande de vidanger l’huile avec une
MACHINE DIDIÉE ET SPÉCIALE tous les:
– 60 000 km pour les transmissions DCT et CVT
– 80 000 km pour le reste des transmissions automatiques, tout en respectant le manuel du
constructeur.<br><br>
ONE M utilise cette machine afin de garantir au client une vidange à 100% contrairement a la vidange
manuelle, cette dernière ne fait que 40% à 60% de la vidange. Le client va recevoir un rinçage avec
des produits spéciaux, contrairement a l&#39;opération manuelle, en garantissant un PRIX TRÈS
COMPÉTITIF....</p>`;
		}
		else if(lng == 'eng'){
		document.getElementById('head').innerHTML = 'Gearbox-Maintenance';
		cata.innerHTML = `<h3 class="text-blue">Why the operation of a drain on a gearbox is an important thing</h3><p>Why the operation of a drain on a gearbox is an important thing:
The emptying of an automatic gearbox and as important as the engine drain of your vehicle.
Indeed, the oil undergoes mechanical stress, including corrosion due mainly to the friction of the
discs inside the box, which generates particles that we find in the oil. It must be changed regularly,
we advise you to do a total oil change every 50,000 to 80,000 km, which will extend the life of your
automatic gearbox.<br> <b class="text-warning">WARNING !</b> Drain half is not enough, the old oil will then mix with the new one. ONE M is equipped with a machine that ensures 100% oil change in your gearbox. We also replace
the filter with the original part.</p>
<h3 class="text-blue">When to change the oil of the automatic transmission?</h3>
<p>How to check the ATF of the automatic transmission<br>The operation of controlling the ATF level of an automatic vehicle is similar to that of checking the engine oil level. The only difference to check the level of the gearbox oil and that the engine must be running.When we check the ATF, we have to check the level and the quality. Although these two criteria are important, too low a level of ATF can cause more serious failures than if the quality of the ATF is poor. Anyway, if we find that the transmission fluid is burnt or brown, we need to replace it urgently. When to change the automatic transmission oil? The oil in an automatic transmission deteriorates over time. Some factors accelerate this deterioration, such as:Traffic in urban areas requires frequent stops due to traffic. The transport of heavy loads. Trailer hitch. The reason why ATF deteriorates is that the temperature of the transmission increases as it rotates.
The hotter the fluid, the greater the wear of the transmission, which forces the gears to work harder.
The recommendations for transmission oil change cycles vary depending on the manufacturer and
the type of transmission. In general, ONE M recommends draining the oil with a DIDIED AND SPECIAL
MACHINE every: - 60,000 km for DCT and CVT transmissions
- 80 000 km for the rest of the automatic transmissions, while respecting the manufacturer&#39;s manual.
<br><br>ONE M uses this machine to guarantee the customer a 100% emptying, unlike manual emptying, the
latter only 40% to 60% of the emptying. The customer will receive a rinse with special products,
contrary to the manual operation, ensuring a VERY COMPETITIVE PRICE....</p>`;
document.getElementById('ap-btn').innerHTML = 'Appointment';
		}
		}
	</script>
	<?php
}
else if ($_REQUEST['pg'] == 'Lube-Oil-Filter') {
?>
	<div class="container pb-5">
	<div class="row">
	<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="lubeh">Lube and Oil Change</h4>
		<p id="lubep">Motor oil and lube changes are very important for keeping your engine functioning properly. Motor oil keeps your engine lubricated so...<br><span class="text-danger">Approx. Time: 30 Minutes</span>
		</p>
		<a href="Lube-Oil-Filter.php?pg=Lube-and-Oil-Change" class="vm btn btn-blue">View More</a>
		<a href="appoinment.php" class="ap btn btn-blue">Appoinment</a>
	</div>
	</div>
</div>
</div>


<script type="text/javascript">
		var ap = document.getElementsByClassName('ap');
		var vm = document.getElementsByClassName('vm');
		var cata = document.getElementById('cata');
		var ser = [document.getElementById('lubeh'),document.getElementById('lubep')];
		function lang_trans(){
		var lng = document.getElementById('lang').value;
		if (lng == 'fre') {
			for(let i = 0; i < ap.length; i++){
				ap[i].innerHTML = 'RENDEZ-VOUS';
				vm[i].innerHTML = 'AFFICHER PLUS';
			}

			ser[0].innerHTML = `Changement de lubrifiant et d'huile`;
			ser[1].innerHTML = `Les changements d'huile moteur et de lubrification sont très importants pour le bon fonctionnement de votre moteur. L'huile moteur garde votre moteur lubrifié, alors ...<br><span class="text-danger">Approx. Time: 30 Minutes</span>`;
		
		document.getElementById('head').innerHTML = 'Filtre à huile lubrifiant';	
		 cata.innerHTML = `<h3 class='text-blue'>Description du changement de lubrifiant, d'huile et de filtre</h3>
<p>La vidange d'huile et le remplacement du filtre font partie des nombreux services d'entretien préventif qui contribuent à optimiser les performances du véhicule tout en prolongeant sa durée de vie. L’huile est responsable de la lubrification des composants actifs dans le moteur de votre véhicule tout en réduisant le frottement entre eux. Étant donné que le moteur génère une quantité de chaleur importante, l'huile joue le rôle d'agent de refroidissement lorsqu'elle circule dans le moteur. L'huile absorbe également les autres particules nocives créées pendant le processus de combustion et les dirige vers le filtre à huile, qui filtre les débris et les contaminants pour obtenir une huile propre et fluide. Ensemble, les filtres à huile et à huile maintiennent le moteur de votre véhicule à des performances optimales. Lors d’une vidange, nous allons remplacer l’ancienne huile de votre moteur par de l’huile neuve et remplacer le filtre à huile. Nous allons également lubrifier les composants du châssis du véhicule selon les normes du fabricant. À la fin de chaque lubrification, huile et changement de filtre, notre personnel s’assurera que votre huile moteur est propre et que les pièces mobiles de votre moteur sont correctement lubrifiées.</p>
<h3 class='text-blue'>Avantages du changement de lubrifiant, d'huile et de filtre</h3><p>Au fil du temps, lorsque l'huile devient saturée de contaminants, des particules en excès sont laissées dans le moteur, où elles peuvent former des dépôts et causer une usure importante du moteur. L'huile sursaturée perd sa lubrification, ce qui finira par provoquer un moteur surchargé de travail, une chaleur excessive et une panne moteur. Une chaleur excessive peut également entraîner une dégradation thermique de l’huile de votre moteur, modifier la viscosité de l’huile et entraîner une diminution du débit d’huile. De même, l'huile sale coule plus lentement, ce qui oblige le moteur à travailler plus fort, ce qui entraîne une usure accrue du moteur. Notre personnel de service inspectera le filtre à huile lors de chaque vidange et le remplacera pour que votre huile reste propre. Les changements de lubrifiant et d'huile de routine garderont votre moteur en marche plus fort et plus longtemps. Contactez-nous en ligne ou appelez-nous aujourd'hui au sujet de votre prochain changement de lubrifiant, d'huile et de filtre.</p>`;
	}
		else if(lng == 'eng'){
			for(let i = 0; i < ap.length; i++){
				ap[i].innerHTML = 'Appointment';
				vm[i].innerHTML = 'View More';
			}
		document.getElementById('head').innerHTML = 'Lube-Oil-Filter';
			ser[0].innerHTML = 'Lube and Oil Change';
			ser[1].innerHTML = 'Motor oil and lube changes are very important for keeping your engine functioning properly. Motor oil keeps your engine lubricated so...<br><span class="text-danger">Approx. Time: 30 Minutes</span>';
		cata.innerHTML = `<h3 class="text-blue">Description of Lube, Oil & Filter Change</h3><p>An oil change and filter replacement is one of many preventative maintenance services that help promote maximum vehicle performance while extending the life of your vehicle. Oil is responsible for lubricating the working components inside your vehicle’s engine while reducing the amount of friction between them. Because the engine generates a substantial amount of heat, oil acts as a cooling agent as it circulates through the engine. Oil also absorbs other harmful particles created during the combustion process and directs them to the oil filter, which filters out the debris and contaminants for clean, free-flowing oil. Together, the oil and oil filter keep your vehicle’s engine operating at optimal levels of performance. During an oil change, we will replace your engine’s old oil with new oil and replace the oil filter. We will also lubricate the chassis components of the vehicle according to the standards of the manufacturer. At the end of every lube, oil and filter change, our staff will have ensured that your engine oil is clean and the working parts of your engine are properly lubricated.</p>
<h3 class="text-blue">Benefits of Lube, Oil & Filter Change</h3>
<p>Over time, as oil becomes saturated with contaminants, excess particles are left behind in the engine, where they can form deposits and cause significant wear to the engine. Oversaturated oil loses its lubrication, which will eventually lead to an overworking engine, excess heat, and engine failure. Excessive heat can also lead to thermal breakdown in your engine oil, causing a change in the oil’s viscosity, and resulting in decreased oil flow. Similarly, dirty oil flows more slowly, causing the engine to work harder, leading to increased engine wear. Our service staff will inspect the oil filter during each oil change, and replace the oil filter in order to keep your oil clean from contaminants. Routine lube and oil changes will keep your engine running stronger and running longer. Contact us online or call us today regarding your next lube, oil, and filter change.</p>`;
		}

		}
	</script>


<?php
}
//Seven
else if ($_REQUEST['pg'] == 'Preventive-Maintenance') {
?>
<div class="container pb-5">
<div class="row">
	<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="afrh">1. Air Filter Replacement</h4>	
		<p id="afrp">An air filter allows outside air into an engine’s intake manifold, where the air mixes with fuel to power a vehicle...<br><span class="text-danger">Approx. Time: 15 Minutes</span>
		</p>
		<a href="Preventive-Maintenance.php?pg=Air-Filter-Replacement" class="ap btn btn-blue">View More</a>
		<a href="appoinment.php" class="btn btn-blue vm">Appoinment</a>
	</div>
	</div>
		<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="fih">2. Fuel Injection</h4>	
		<p id="fip">During a fuel injection, your vehicle’s fuel injectors are checked. Located in the intake manifold of the engine, fuel injectors use...<br><span class="text-danger">Approx. Time: 60 Minutes</span>
		</p>
		<a href="Preventive-Maintenance.php?pg=Fuel-Injection" class="btn btn-blue vm">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>
	</div>
	</div>

</div>
<div class="row">
	<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="ofch">3. Oil and Filter Change</h4>	
		<p id="ofcp">Oil is a lubricant that keeps your vehicle functioning properly. Oil plays an essential role in the engine of your vehicle...<br><span class="text-danger">Approx. Time: 30 Minutes</span>
		</p>
		<a href="Preventive-Maintenance.php?pg=Oil-and-Filter-Change" class="vm btn btn-blue">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>
	</div>
	</div>
		<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="sch">4. Spring Checkup</h4>	
		<p id="scp">A spring checkup helps prepare your vehicle for the hot months of summer. During a checkup, multiple components may be reviewed...<br><span class="text-danger">Approx. Time: 60 Minutes</span>
		</p>
		<a href="Preventive-Maintenance.php?pg=Spring-Checkup" class="btn vm btn-blue">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>
	</div>
	</div>

</div>
<div class="row">
	<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="wch">5. Winterization Checkup</h4>	
		<p id="wcp">When winter is near, many motorists begin winterizing their vehicles to prepare them for the cold, ice, and snow...<br><span class="text-danger">Approx. Time: 60 Minutes</span>
		</p>
		<a href="Preventive-Maintenance.php?pg=Winterization-Checkup" class="vm btn btn-blue">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>
	</div>
	</div>
		<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="wbrh">6. Wiper Blades Replacement</h4>	
		<p id="wbrp">Wiper blades are responsible for helping drivers travel safely in inclement weather. In bad weather conditions...<br><span class="text-danger">Approx. Time: 15 Minutes</span>
		</p>
		<a href="Preventive-Maintenance.php?pg=Wiper-Blades-Replacement" class="vm btn btn-blue">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>	</div>
	</div>

</div>
</div>

<script type="text/javascript">
		var ap = document.getElementsByClassName('ap');
		var vm = document.getElementsByClassName('vm');
		var cata = document.getElementById('cata');
		var ser = [document.getElementById('afrh'),document.getElementById('afrp'),document.getElementById('fih'),document.getElementById('fip'),document.getElementById('ofch'),document.getElementById('ofcp'),document.getElementById('sch'),document.getElementById('scp'),document.getElementById('wch'),document.getElementById('wcp'),document.getElementById('wbrh'),document.getElementById('wbrp'),]
		function lang_trans(){
		var lng = document.getElementById('lang').value;
		if (lng == 'fre') {
			for(let i = 0; i < ap.length; i++){
				ap[i].innerHTML = 'RENDEZ-VOUS';
				vm[i].innerHTML = 'AFFICHER PLUS';
			}

			ser[0].innerHTML = '1. Remplacement du filtre à air';
			ser[1].innerHTML = `Un filtre à air permet à l'air extérieur d'entrer dans le collecteur d'admission d'un moteur, où l'air se mélange au carburant pour alimenter un véhicule ...<br><span class="text-danger">Approx. Time: 15 Minutes</span>`;
			ser[2].innerHTML = '2. Injection de carburant';
			ser[3].innerHTML = `Lors d’une injection de carburant, les injecteurs de carburant de votre véhicule sont vérifiés. Situés dans la tubulure d'admission du moteur, les injecteurs de carburant utilisent ...<br><span class="text-danger">Approx. Time: 60 Minutes</span>`;
			ser[4].innerHTML = `3. Changement d'huile et de filtre`;
			ser[5].innerHTML = `L'huile est un lubrifiant qui maintient votre véhicule en état de fonctionner correctement. L'huile joue un rôle essentiel dans le moteur de votre véhicule ...<br><span class="text-danger">Approx. Time: 30 Minutes</span>`;
			ser[6].innerHTML = '4. Bilan de printemps';
			ser[7].innerHTML = `Un bilan de printemps permet de préparer votre véhicule pour les chauds mois d’été. Au cours d'un bilan, plusieurs composants peuvent être revus ...<br><span class="text-danger">Approx. Time: 60 Minutes</span>`;
			ser[8].innerHTML = `5. Bilan de préparation pour l'hiver`;
			ser[9].innerHTML = `À l'approche de l'hiver, de nombreux automobilistes commencent à hiverner leurs véhicules pour les préparer au froid, à la glace et à la neige ...<br><span class="text-danger">Approx. Time: 60 Minutes</span>`;
			ser[10].innerHTML = `6. Remplacement des balais d'essuie-glace`;
			ser[11].innerHTML = `Les balais d’essuie-glace aident les conducteurs à se déplacer en toute sécurité par mauvais temps. Par mauvais temps ...<br><span class="text-danger">Approx. Time: 15 Minutes</span>`;
		document.getElementById('head').innerHTML = 'Maintenance préventive';	
		 cata.innerHTML = `<h3 class='text-blue'>Description de la maintenance préventive</h3>
<p>L'entretien préventif consiste à entretenir et à protéger votre véhicule contre d'éventuelles réparations majeures. La négligence est le moyen le plus courant et le plus coûteux de gaspiller de l'argent pour des réparations qui auraient pu être facilement évitées grâce à des intervalles de maintenance réguliers. En fonction du fabricant de votre véhicule, éviter l’entretien préventif de certaines pièces et de certains composants risque d’annuler la garantie. Les intervalles d’entretien des voitures ont été conçus pour améliorer la fiabilité, la durabilité et la valeur de revente de votre véhicule. Selon vos conditions de conduite, ces intervalles de maintenance peuvent arriver plus tôt que prévu. Par exemple, des trajets courts peuvent blesser un véhicule car la plupart des moteurs prospèrent lors de longs trajets. Conduire dans de brefs déplacements, faire face à des embouteillages intermittents et transporter des marchandises lourdes sont tous des aspects de la conduite difficile. Toutefois, votre environnement peut également renforcer la conduite au volant. Le temps chaud ou froid, les routes montagneuses ou accidentées et les environnements poussiéreux ou salés peuvent tous affecter votre véhicule. En raison de ces innombrables facteurs, le respect d'un calendrier d'entretien rigoureux peut permettre à votre véhicule de fonctionner à son efficacité maximale pendant des années.</p>
<h3 class='text-blue'>Avantages de la maintenance préventive</h3><p>Les composants et les pièces du véhicule s'usent naturellement avec le temps et les dangers de la route peuvent avoir un impact négatif sur les composants critiques. En respectant le programme d’entretien préventif indiqué dans le manuel du propriétaire de votre véhicule, vous contribuerez à ce que votre véhicule fonctionne toujours dans des conditions optimales. Selon le kilométrage parcouru, notre personnel peut inspecter le fonctionnement des composants de la direction et de la suspension, des filtres à fluide, des courroies et des flexibles, des freins et des essieux, etc., afin d’assurer le bon fonctionnement de votre véhicule. Notre personnel peut examiner le niveau de fluides vitaux des véhicules. Nous sommes également en mesure d'examiner les feux extérieurs et intérieurs, d'examiner les balais d'essuie-glace, de vérifier les batteries, d'inspecter les charnières et les serrures, de déterminer le niveau d'usure des rotules, de vérifier les composants de la transmission, de réparer les composants du système d'échappement et de procéder au contrôle de l'usure et du gonflage des pneus. Il est important de planifier la maintenance préventive de ces composants et d’autres composants afin de s’assurer qu’ils continuent de fonctionner comme prévu. N'oubliez pas que les conditions environnementales peuvent affecter votre programme de maintenance préventive idéal. En fonction de votre environnement, vous devrez peut-être rechercher des inspections et des remplacements plus fréquents. Contactez-nous aujourd'hui pour en savoir plus sur les intervalles de maintenance recommandés pour votre véhicule.</p>`;
	}
		else if(lng == 'eng'){
			for(let i = 0; i < ap.length; i++){
				ap[i].innerHTML = 'Appointment';
				vm[i].innerHTML = 'View More';
			}
		document.getElementById('head').innerHTML = 'Preventive-Maintenance';
			ser[0].innerHTML = '1. Air Filter Replacement';
			ser[1].innerHTML = 'An air filter allows outside air into an engine’s intake manifold, where the air mixes with fuel to power a vehicle...<br><span class="text-danger">Approx. Time: 15 Minutes</span>';
			ser[2].innerHTML = '2. Fuel Injection';
			ser[3].innerHTML = 'During a fuel injection, your vehicle’s fuel injectors are checked. Located in the intake manifold of the engine, fuel injectors use...<br><span class="text-danger">Approx. Time: 60 Minutes</span>';
			ser[4].innerHTML = '3. Oil and Filter Change';
			ser[5].innerHTML = 'Oil is a lubricant that keeps your vehicle functioning properly. Oil plays an essential role in the engine of your vehicle...<br><span class="text-danger">Approx. Time: 30 Minutes</span>';
			ser[6].innerHTML = '4. Spring Checkup';
			ser[7].innerHTML = 'A spring checkup helps prepare your vehicle for the hot months of summer. During a checkup, multiple components may be reviewed...<br><span class="text-danger">Approx. Time: 60 Minutes</span>';
			ser[8].innerHTML = '5. Winterization Checkup';
			ser[9].innerHTML = 'When winter is near, many motorists begin winterizing their vehicles to prepare them for the cold, ice, and snow...<br><span class="text-danger">Approx. Time: 60 Minutes</span>';
			ser[10].innerHTML = '6. Wiper Blades Replacement';
			ser[11].innerHTML = 'Wiper blades are responsible for helping drivers travel safely in inclement weather. In bad weather conditions...<br><span class="text-danger">Approx. Time: 15 Minutes</span>';

		cata.innerHTML = `<h3 class="text-blue">Description of Preventive Maintenance</h3><p>Preventive maintenance is the care and protection of your vehicle against potential major auto repairs. Negligence is the most common and costly way to see money wasted on repairs that could have easily been prevented through regular service intervals. Depending on your vehicle’s manufacturer, avoiding preventive maintenance on certain parts and components has the potential to void warranty coverage. Car maintenance intervals have been designed to improve the reliability, durability, and resale value of your vehicle. Based upon your driving conditions, these service intervals may arrive sooner than you expect. For example, short commutes can actually hurt a vehicle because most engines thrive during long drives. Driving short commutes, experiencing stop-and-go traffic, and carrying heavy cargo are all aspects of severe driving. However, severe driving can also be reinforced by your environment. Hot or cold weather, mountainous or rough roads, and dusty or salty environments can all affect your vehicle. Because of these innumerable factors, adhering to a rigid service schedule can keep your vehicle operating at maximum efficiency for years to come.</p>
<h3 class="text-blue">Benefits of Preventive Maintenance</h3>
<p>Vehicle components and parts naturally wear out over time, and road hazards can negatively impact critical components. By adhering to the preventive maintenance schedule in your vehicle owner’s manual, you will help ensure that your vehicle always runs at optimal conditions. Depending upon the vehicle’s service interval mileage, our staff may inspect the function of your steering and suspension components, fluid filters, belts and hoses, brakes and axles, and more to help ensure that your vehicle functions efficiently. Our staff can look at the level of vital vehicle fluids. We are also able to review exterior and interior lights, examine windshield wiper blades, check batteries, inspect hinges and locks, determine level of ball joint wear, check transmission components, fix exhaust system components, and conduct both tire wear inspection and inflation checks. It is important to schedule preventive maintenance for these and other components to ensure they continue to work as intended. Remember that environmental conditions may affect your ideal preventive maintenance schedule. Depending upon your environment, you may need to seek more frequent inspections and replacements. Contact us today to learn more about recommended car maintenance service intervals for your vehicle.</p>`;
		}

		}
	</script>


<?php
}
else if ($_REQUEST['pg'] == 'Charging-and-Batteries') {
	?>
	<div class="container pb-5">
<div class="row">
	<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="arh">1. Alternator Replacement</h4>	
		<p id="arp">An alternator is part of a vehicle’s charging system and an essential component in keeping a vehicle operable...<br><span class="text-danger">Approx. Time: 120 Minutes</span>
		</p>
		<a href="Charging-and-Batteries.php?pg=Alternator-Replacement" class="vm btn btn-blue">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>
	</div>
	</div>
		<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="brh">2. Battery Replacement</h4>	
		<p id="brp">An automotive battery works with a vehicle’s voltage regulator and alternator to supply electricity to the vehicle...<br><span class="text-danger">Approx. Time: 15 Minutes</span>
		</p>
		<a href="Charging-and-Batteries.php?pg=Battery-Replacement" class="vm btn btn-blue">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>
	</div>
	</div>

</div>
<div class="row">
	<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="srh">3. Starter Replacement</h4>	
		<p id="srp">The starter is a motor that, when supplied with electricity from a vehicle’s battery, will engage the flywheel and crank the engine...<br><span class="text-danger">Approx. Time: 60 Minutes</span>
		</p>
		<a href="Charging-and-Batteries.php?pg=Starter-Replacement" class="btn btn-blue vm">View More</a>
		<a href="appoinment.php" class="ap btn btn-blue">Appoinment</a>
	</div>
	</div>
		<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="scsch">4. Starting & Charging System Check</h4>	
		<p id="scscp">The starting and charging system is responsible for starting and keeping the engine running. The starting and charging system is also...<br><span class="text-danger">Approx. Time: 15 Minutes</span>
		</p>
		<a href="Charging-and-Batteries.php?pg=Starting-Charging-System-Check" class="btn vm btn-blue">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>	</div>
	</div>

</div>
</div>

<script type="text/javascript">
		var ap = document.getElementsByClassName('ap');
		var vm = document.getElementsByClassName('vm');
		var cata = document.getElementById('cata');
		var ser = [document.getElementById('arh'),document.getElementById('arp'),document.getElementById('brh'),document.getElementById('brp'),document.getElementById('srh'),document.getElementById('srp'),document.getElementById('scsch'),document.getElementById('scscp'),]
		function lang_trans(){
		var lng = document.getElementById('lang').value;
		if (lng == 'fre') {
			for(let i = 0; i < ap.length; i++){
				ap[i].innerHTML = 'RENDEZ-VOUS';
				vm[i].innerHTML = 'AFFICHER PLUS';
			}

			ser[0].innerHTML = `1. Remplacement de l'alternateur`;
			ser[1].innerHTML = 'Un alternateur fait partie du système de charge du véhicule et constitue un élément essentiel pour que le véhicule reste utilisable ...<br><span class="text-danger">Approx. Time: 120 Minutes</span>';
			ser[2].innerHTML = '2. Remplacement de la batterie';
			ser[3].innerHTML = 'Une batterie automobile fonctionne avec un régulateur de tension et un alternateur pour alimenter le véhicule en électricité ...<br><span class="text-danger">Approx. Time: 15 Minutes</span>';
			ser[4].innerHTML = '3. Remplacement du démarreur';
			ser[5].innerHTML = 'Le démarreur est un moteur qui, alimenté en électricité par la batterie d’un véhicule, engage le volant et lance le moteur ...<br><span class="text-danger">Approx. Time: 60 Minutes</span>';
			ser[6].innerHTML = '4. Vérification du système de démarrage et de charge';
			ser[7].innerHTML = 'Le système de démarrage et de charge est responsable du démarrage et du maintien du moteur. Le système de démarrage et de charge est également ...<br><span class="text-danger">Approx. Time: 15 Minutes</span>';
		document.getElementById('head').innerHTML = 'Charge-et-batteries';	
		 cata.innerHTML = `<h3 class='text-blue'>Description du démarrage, de la charge et des batteries</h3>
<p>Le système de démarrage et de charge de votre véhicule participe à la régulation de plusieurs processus électriques pour démarrer et maintenir le moteur de votre véhicule. Le système de démarrage comprend la batterie, un démarreur et un solénoïde de démarreur chargé de démarrer le moteur, tandis que le système de charge comprend un alternateur et un régulateur de tension. Le système de charge est responsable de l’acheminement de l’énergie tout au long du processus électrique tout en maintenant la charge de la batterie. La batterie fournit l’énergie électrique nécessaire au démarrage du véhicule. Ce processus commence lorsque vous tournez le contact. Ensuite, le système de démarrage envoie le courant de la batterie au solénoïde du démarreur et au moteur du démarreur, qui fait tourner le moteur afin de commencer le processus de combustion interne. L'alternateur alimente les autres composants électriques de votre véhicule tandis que le régulateur contrôle la tension fournie à chaque composant. Le régulateur veille également à ce que l’alternateur maintienne la charge de la batterie afin que le cycle complet puisse continuer.</p>
<h3 class='text-blue'>Avantages du démarrage, de la charge et des batteries</h3><p>Les moteurs à démarrage lent et les phares tamisés peuvent parfois indiquer un problème avec le système de démarrage et de charge de votre véhicule. Étant donné que la batterie est nécessaire pour la charge électrique nécessaire au démarrage du reste du système électrique, une batterie faible ou morte peut également empêcher votre voiture de démarrer. Si un démarreur refuse de réactiver votre batterie et le système de démarrage, notre personnel devra peut-être examiner de plus près les autres composants du système de démarrage et de charge pour déterminer si vous avez besoin d'un remplacement de démarreur ou d'un alternateur. Tous les composants du système de démarrage et de charge de votre véhicule sont nécessaires pour assurer un bon fonctionnement, et un mauvais lien entre eux peut rendre tout le processus électrique inutile. Si vous rencontrez des problèmes lors du démarrage ou du maintien de l'alimentation de votre véhicule, même après une tentative de démarrage en secours, laissez notre personnel de maintenance procéder à la vérification du système de démarrage et de charge de votre véhicule dès aujourd'hui.</p>`;
}
		else if(lng == 'eng'){
			for(let i = 0; i < ap.length; i++){
				ap[i].innerHTML = 'Appointment';
				vm[i].innerHTML = 'View More';
			}
		document.getElementById('head').innerHTML = 'Charging-and-Batteries';
			ser[0].innerHTML = '1. Alternator Replacement';
			ser[1].innerHTML = 'An alternator is part of a vehicle’s charging system and an essential component in keeping a vehicle operable...<br><span class="text-danger">Approx. Time: 120 Minutes</span>';
			ser[2].innerHTML = '2. Battery Replacement';
			ser[3].innerHTML = 'An automotive battery works with a vehicle’s voltage regulator and alternator to supply electricity to the vehicle...<br><span class="text-danger">Approx. Time: 15 Minutes</span>';
			ser[4].innerHTML = '3. Starter Replacement';
			ser[5].innerHTML = 'The starter is a motor that, when supplied with electricity from a vehicle’s battery, will engage the flywheel and crank the engine...<br><span class="text-danger">Approx. Time: 60 Minutes</span>';
			ser[6].innerHTML = '4. Starting & Charging System Check';
			ser[7].innerHTML = 'The starting and charging system is responsible for starting and keeping the engine running. The starting and charging system is also...<br><span class="text-danger">Approx. Time: 15 Minutes</span>';
		cata.innerHTML = `<h3 class="text-blue">Description of Starting, Charging & Batteries</h3><p>Your vehicle’s starting and charging system is involved in regulating multiple electrical processes to start your vehicle's engine and keep it running. The starting system consists of the battery, a starter motor, and a starter solenoid responsible for starting the engine, while the charging system consists of an alternator and voltage regulator. The charging system is responsible for routing energy throughout the entire electrical process while sustaining the battery’s charge. The battery supplies the electric power necessary to start the vehicle. This process starts when you turn the ignition. Then, the starting system sends power from the battery to the starter solenoid to the starter motor, which turns the engine in order to begin the internal combustion process. The alternator powers the other electrical components in your vehicle while the regulator controls the voltage supplied to each component. The regulator also ensures that the alternator maintains the battery’s charge so that the entire cycle can continue.</p>
<h3 class="text-blue">Benefits of Starting, Charging & Batteries</h3>
<p>Slow cranking engines and dim headlights can sometimes point to a problem with your vehicle’s starting and charging system. Because the battery is required for the electrical charge needed to start the rest of the electrical system, a weak or dead battery can also prevent your car from starting. If a jump start refuses to revive your battery and the starting system, our staff may need to take a closer look at the other components of the starting and charging system to determine whether or not you need a starter replacement or an alternator replacement. All components within your vehicle’s starting and charging system are necessary to ensure proper working order, and one bad link between them can render the entire electrical process useless. If you experience problems with starting your vehicle or maintaining its power even after trying a jump start, then allow our service staff to perform a starting and charging system check on your vehicle today.</p>`;
		}

		}
	</script>

	<?php
}
else if ($_REQUEST['pg'] == 'Steering-and-Suspension-System') {
	?>
<div class="container pb-5">
<div class="row">
	<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="bjrh">1. Ball Joint Replacement</h4>	
		<p id="bjrp">The suspension system allows your tires to maintain constant contact with the road, especially on uneven surfaces like bumps and potholes. Ball joints...<br><span class="text-danger">Approx. Time: 120 Minutes</span>
		</p>
		<a href="Steering-and-Suspension-System.php?pg=Ball-Joint" class="vm btn btn-blue">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>
	</div>
	</div>
		<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="itrotrrh">2. Inner Tie Rod & Outer Tie Rod Replacement</h4>	
		<p id="itrotrrp">As an important part of your vehicle’s steering and suspension system, tie rods provide linkage between your vehicle’s steering system and...<br><span class="text-danger">Approx. Time: 60 Minutes</span>
		</p>
		<a href="Steering-and-Suspension-System.php?pg=Tie-Rod" class="vm btn btn-blue">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>
	</div>
	</div>

</div>
<div class="row">
	<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="srh">3. Shocks Replacement</h4>	
		<p id="srp">Shock absorbers are components in your vehicle’s suspension system that help your tires remain in constant contact with...<br><span class="text-danger">Approx. Time: 120 Minutes</span>
		</p>
		<a href="Steering-and-Suspension-System.php?pg=Shocks-Replacement" class="vm btn btn-blue">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>
	</div>
	</div>
		<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="srsh">4. Struts Replacement</h4>	
		<p id="srsp">While the function of shocks and struts is very similar, the biggest difference is in how they mount to your vehicle. Shocks function...<br><span class="text-danger">Approx. Time: 120 Minutes</span>
		</p>
		<a href="Steering-and-Suspension-System.php?pg=Struts-Replacement" class="btn btn-blue vm">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>
	</div>
	</div>

</div>
<div class="row">
	<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="sih">5. Suspension Inspection</h4>	
		<p id="sip">The primary function of your vehicle’s suspension system is to provide structural support while maintaining comfortable riding conditions...<br><span class="text-danger">Approx. Time: 30 Minutes</span>
		</p>
		<a href="Steering-and-Suspension-System.php?pg=Suspension-Inspection" class="btn vm btn-blue">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>
	</div>
	</div>
		<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue " id="sblrh">6. Sway Bar Link Replacement</h4>	
		<p id="sblrp">Attached to each wheel in your vehicle’s suspension system is a stabilizer bar called the sway bar. The sway bar is charged with...<br><span class="text-danger">Approx. Time: 30 Minutes</span>
		</p>
		<a href="Steering-and-Suspension-System.php?pg=Sway-Bar-Link" class="btn btn-blue vm">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>	</div>
	</div>

</div>
</div>



<script type="text/javascript">
		var ap = document.getElementsByClassName('ap');
		var vm = document.getElementsByClassName('vm');
		var cata = document.getElementById('cata');
		var ser = [document.getElementById('bjrh'),document.getElementById('bjrp'),document.getElementById('itrotrrh'),document.getElementById('itrotrrp'),document.getElementById('srh'),document.getElementById('srp'),document.getElementById('srsh'),document.getElementById('srsp'),document.getElementById('sih'),document.getElementById('sip'),document.getElementById('sblrh'),document.getElementById('sblrp'),]
		function lang_trans(){
		var lng = document.getElementById('lang').value;
		if (lng == 'fre') {
			for(let i = 0; i < ap.length; i++){
				ap[i].innerHTML = 'RENDEZ-VOUS';
				vm[i].innerHTML = 'AFFICHER PLUS';
			}

			ser[0].innerHTML = '1. Remplacement du joint à rotule';
			ser[1].innerHTML = `Le système de suspension permet à vos pneus de rester en contact permanent avec la route, en particulier sur les surfaces inégales telles que les bosses et les nids de poule. Joints à rotule ...<br><span class="text-danger">Approx. Time: 120 Minutes</span>`;
			ser[2].innerHTML = '2. Remplacement de la biellette intérieure et de la biellette extérieure';
			ser[3].innerHTML = `Composants essentiels du système de suspension et de direction de votre véhicule, les biellettes d’attelage assurent la liaison entre ...<br><span class="text-danger">Approx. Time: 60 Minutes</span>`;
			ser[4].innerHTML = `3. Remplacement des chocs`;
			ser[5].innerHTML = `Les amortisseurs sont des composants du système de suspension de votre véhicule qui permettent à vos pneus de rester en contact permanent avec ...<br><span class="text-danger">Approx. Time: 120 Minutes</span>`;
			ser[6].innerHTML = '4. Remplacement des jambes de force';
			ser[7].innerHTML = `Bien que la fonction des amortisseurs et des jambes de suspension soit très similaire, la plus grande différence réside dans la manière dont ils sont montés sur votre véhicule. Les chocs fonctionnent ...<br><span class="text-danger">Approx. Time: 120 Minutes</span>`;
			ser[8].innerHTML = `5. Inspection de suspension`;
			ser[9].innerHTML = `La fonction principale du système de suspension de votre véhicule est de fournir un soutien structurel tout en maintenant des conditions de conduite confortables ...<br><span class="text-danger">Approx. Time: 30 Minutes</span>`;
			ser[10].innerHTML = `6. Remplacement de la biellette de barre stabilisatrice`;
			ser[11].innerHTML = `Une barre stabilisatrice appelée barre stabilisatrice est fixée à chaque roue du système de suspension de votre véhicule. La barre stabilisatrice est chargée de ...<br><span class="text-danger">Approx. Time: 30 Minutes</span>`;
		document.getElementById('head').innerHTML = 'Système de direction et de suspension';	
		 cata.innerHTML = `<h3 class='text-blue'>Description du système de direction et de suspension</h3>
<p>Le système de direction et de suspension de votre véhicule est chargé de maintenir des conditions de conduite et des performances de conduite confortables. Le système de direction et de suspension aide également les conducteurs à garder le contrôle de leurs véhicules à tout moment. Le système de suspension convertit l'énergie directe créée par les bosses sur la route en énergie verticale qui monte dans le châssis du véhicule. Les composants du système de suspension, tels que les ressorts hélicoïdaux et les amortisseurs, aident à atténuer l'impact de cette force de roulement. Alors que les composants individuels constituant chaque système de suspension peuvent varier, tous les composants du système de suspension s'affaiblissent avec le temps en raison des contraintes appliquées dans des conditions de conduite normales. De même, la conduite hors route et une conduite erratique peuvent user les composants de la suspension plus rapidement. Quelles que soient vos préférences de conduite, nous disposons du matériel nécessaire pour identifier et corriger tout problème concernant votre système de direction et de suspension. Notre personnel est formé pour inspecter les composants de direction et de suspension afin de déterminer si votre service nécessitera un ajustement mineur ou un remplacement.</p>
<h3 class='text-blue'>Avantages du système de direction et de suspension</h3><p>Une direction fragile, instable, décentrée et raide permet de faire réparer un système de direction, tandis qu'un roulement ou un balancement excessif lors de bosses et un contrôle intermittent pendant la conduite et le freinage sont des raisons importantes pour l'inspection du système de suspension. Une usure inégale des pneus est également un signe potentiel d'un problème de suspension, bien que cela puisse aussi indiquer des problèmes d'alignement. Avez-vous frappé un nid de poule récemment? Les nids-de-poule peuvent endommager les composants de la direction et de la suspension. Les composants de suspension usés réduiront la stabilité du véhicule et le contrôle du conducteur. Étant donné que les composants du système de suspension se combinent en une unité de travail, les problèmes de suspension non traités risquent d'augmenter l'usure des autres composants de la suspension, ce qui peut entraîner des réparations plus importantes sur la route. Si vous ressentez l'un des symptômes ci-dessus, contactez-nous en ligne ou par téléphone dès aujourd'hui.</p>`;
	}
		else if(lng == 'eng'){
			for(let i = 0; i < ap.length; i++){
				ap[i].innerHTML = 'Appointment';
				vm[i].innerHTML = 'View More';
			}
		document.getElementById('head').innerHTML = 'Steering-and-Suspension-System';
			ser[0].innerHTML = '1. Ball Joint Replacement';
			ser[1].innerHTML = 'The suspension system allows your tires to maintain constant contact with the road, especially on uneven surfaces like bumps and potholes. Ball joints..<br><span class="text-danger">Approx. Time: 120 Minutes</span>';
			ser[2].innerHTML = '2. Inner Tie Rod & Outer Tie Rod Replacement';
			ser[3].innerHTML = 'As an important part of your vehicle’s steering and suspension system, tie rods provide linkage between your vehicle’s steering system and...<br><span class="text-danger">Approx. Time: 60 Minutes</span>';
			ser[4].innerHTML = '3. Shocks Replacement';
			ser[5].innerHTML = 'Shock absorbers are components in your vehicle’s suspension system that help your tires remain in constant contact with...<br><span class="text-danger">Approx. Time: 120 Minutes</span>';
			ser[6].innerHTML = '4. Struts Replacement';
			ser[7].innerHTML = 'While the function of shocks and struts is very similar, the biggest difference is in how they mount to your vehicle. Shocks function...<br><span class="text-danger">Approx. Time: 120 Minutes</span>';
			ser[8].innerHTML = '5. Suspension Inspection';
			ser[9].innerHTML = 'The primary function of your vehicle’s suspension system is to provide structural support while maintaining comfortable riding conditions..<br><span class="text-danger">Approx. Time: 30 Minutes</span>';
			ser[10].innerHTML = '6. Sway Bar Link Replacement';
			ser[11].innerHTML = 'Attached to each wheel in your vehicle’s suspension system is a stabilizer bar called the sway bar. The sway bar is charged with...<br><span class="text-danger">Approx. Time: 30 Minutes</span>';

		cata.innerHTML = `<h3 class="text-blue">Description of Steering and Suspension System</h3><p>The steering and suspension system on your vehicle is responsible for maintaining comfortable riding conditions and driving performance. The steering and suspension system also helps drivers remain in control of their vehicles at all times. The suspension system converts forward energy created by bumps in the road into vertical energy that travels up into the vehicle frame. Suspension system components, like coil springs and shock absorbers, help to dampen the impact of this road force. While the individual components comprising each suspension system may vary, all suspension system components will weaken over time through stress applied during normal driving conditions. Similarly, off-road driving and erratic driving can wear down suspension components more quickly. Regardless of your driving preferences, we have the necessary equipment to identify and correct any issue plaguing your steering and suspension system. Our staff is trained to inspect the steering and suspension components in order to determine whether your service will entail a minor adjustment or a replacement.</p>
<h3 class="text-blue">Benefits of Steering and Suspension System</h3>
<p>Shaky, unsteady, off-center, and stiff steering are all cause for getting a steering system repaired, while excessive bouncing or swaying during bumps and intermittent control while driving and braking are cause for a suspension system inspection. Uneven tire wear is also a potential sign of a suspension problem, though this may also point to alignment issues. Have you hit a pothole recently? Potholes can cause damage to steering and suspension components. Worn suspension components will reduce the stability of the vehicle and the control of the driver. Because suspension system components combine into one working unit, suspension issues that go untreated have the potential to increase the wear on other suspension components, which may result in more extensive repairs down the road. If you experience any of the above symptoms, contact us online or by phone today.</p>`;
		}

		}
	</script>

<?php
}
else if ($_REQUEST['pg'] == 'TPMS') {
?>
	<div class="container pb-5">
	<div class="row">
	<div class="col-md-6 p-2">
		<div class="p-4 ser" style="border: solid 2px #4290e0;">
		<h4 class="text-blue" id="tpmsh">TPMS Repair</h4>
		<p id="tpmsp">The Tire Pressure Monitoring System (TPMS) tracks the amount of pressure in a vehicle’s tires and alerts a driver when the pressure is at...<br><span class="text-danger">Approx. Time: 30 Minutes</span>
		</p>
		<a href="TPMS.php?pg=TPMS-Repair" class="vm btn btn-blue">View More</a>
		<a href="appoinment.php" class="btn btn-blue ap">Appoinment</a>
	</div>
	</div>
</div>
</div>

<script type="text/javascript">
		var ap = document.getElementsByClassName('ap');
		var vm = document.getElementsByClassName('vm');
		var cata = document.getElementById('cata');
		var ser = [document.getElementById('tpmsh'),document.getElementById('tpmsp')];
		function lang_trans(){
		var lng = document.getElementById('lang').value;
		if (lng == 'fre') {
			for(let i = 0; i < ap.length; i++){
				ap[i].innerHTML = 'RENDEZ-VOUS';
				vm[i].innerHTML = 'AFFICHER PLUS';
			}

			ser[0].innerHTML = `Réparation TPMS`;
			ser[1].innerHTML = `Le système de surveillance de la pression des pneus (TPMS) surveille la quantité de pression dans les pneus du véhicule et alerte le conducteur lorsque la pression est ...<br><span class="text-danger">Approx. Time: 30 Minutes</span>`;
		
		document.getElementById('head').innerHTML = 'TPMS';	
		 cata.innerHTML = `<h3 class='text-blue'>Description du système de surveillance de la pression des pneus</h3>
<p>Les pneus dont le fonctionnement est inférieur aux normes de gonflage compromettent les performances globales de votre véhicule et la sécurité de vos passagers. Le système de surveillance de la pression des pneus augmente votre sécurité sur la route en améliorant la maniabilité de votre véhicule, en réduisant l’usure de la bande de roulement de vos pneus, en réduisant la distance de freinage de votre véhicule et en améliorant sa consommation de carburant. Il existe aujourd'hui deux types de systèmes de surveillance de la pression des pneus: direct et indirect. Un système de surveillance directe de la pression des pneus utilise des capteurs situés à l’intérieur du pneu pour transmettre les informations de pression des pneus à l’ordinateur de votre véhicule. Un système de surveillance indirecte de la pression des pneus mesure la pression des pneus dans le système de freinage antiblocage (ABS) de votre véhicule en utilisant des capteurs de vitesse pour mesurer la vitesse de rotation de chaque roue. Tous les systèmes TPMS nécessitent un entretien régulier afin de respecter les normes de performances maximales, ce qui implique que tous les véhicules soient équipés d'un système de surveillance de la pression des pneus.</p>
<h3 class='text-blue'>Système de surveillance de la pression des pneus (TPMS)</h3><p>Le système de surveillance de la pression des pneus (TPMS) de votre véhicule surveille en permanence la pression de vos pneus. Lorsque la pression des pneus est faible ou inférieure à la pression recommandée par le fabricant, le système TPMS détectera et signalera la différence en allumant un témoin sur le tableau de bord de votre véhicule. Lorsque le témoin TPMS clignote sur le tableau de bord, vous devez vérifier la pression de vos pneus, gonfler le pneu concerné au niveau indiqué par le fabricant ou amener votre véhicule dans notre atelier afin que le problème puisse être résolu par notre personnel expert. Lors d'un service de maintenance du TPMS, notre personnel de service effectuera une série de tests pour s'assurer que le système fonctionne correctement et avec une efficacité maximale. Si nos techniciens découvrent des dommages au système et à ses composants, ils devront peut-être remplacer les corps de vanne, les écrous de vanne, les joints d'étanchéité, les rondelles d'étanchéité et les capuchons de vanne. Si vous avez besoin de services de réparation, de maintenance ou de remplacement du système TPMS, ou si vous avez besoin d'un service d'installation du système TPMS, contactez-nous dès aujourd'hui.</p>`;
	}
		else if(lng == 'eng'){
			for(let i = 0; i < ap.length; i++){
				ap[i].innerHTML = 'Appointment';
				vm[i].innerHTML = 'View More';
			}
		document.getElementById('head').innerHTML = 'TPMS';
			ser[0].innerHTML = 'TPMS Repair';
			ser[1].innerHTML = 'The Tire Pressure Monitoring System (TPMS) tracks the amount of pressure in a vehicle’s tires and alerts a driver when the pressure is at...<br><span class="text-danger">Approx. Time: 30 Minutes</span>';
		cata.innerHTML = `<h3 class="text-blue">Description of Tire Pressure Monitoring System (TPMS)
</h3><p>Tires operating below inflation standards put the overall performance of your vehicle and the safety of your passengers at risk. The Tire Pressure Monitoring System helps increase your safety on the road by improving your vehicle’s maneuverability, decreasing the tread wear of your tires, reducing your vehicle’s braking distance, and improving your vehicle’s fuel economy. There are two types of Tire Pressure Monitoring Systems in existence today—Direct and Indirect. A Direct Tire Pressure Monitoring System uses sensors on the inside tire assembly to transmit tire pressure information to your vehicle’s computer. An Indirect Tire Pressure Monitoring System gauges tire pressure through your vehicle’s Anti-lock Braking System (ABS) by using speed sensors to measure the rotational speed of each wheel (as tire pressure decreases, the rolling distance decreases, and the rotational speed increases). All TPMS systems require regular maintenance in order to meet maximum performance standards, which requires all vehicles to be equipped with a Tire Pressure Monitoring System</p>
<h3 class="text-blue">Tire Pressure Monitoring System (TPMS)</h3>
<p>Your vehicle’s Tire Pressure Monitoring System (TPMS) continuously monitors the air pressure in your tires. When there is an instance of low tire pressure, or if the tire pressure drops below the manufacturer’s recommended level of tire pressure, the TPMS will detect and report the discrepancy by illuminating an indicator light on the dashboard of your vehicle. When the TPMS light flashes on the dashboard, you should check your tire pressure, inflate the affected tire to the level indicated by the manufacturer, or bring your vehicle into our shop so that the issue can be remedied by our expert staff. During a TPMS maintenance service, our service staff will run a series of tests to ensure that the system is operating both correctly and at maximum efficiency. If our technicians uncover damage to the system or its accompanying components, they may need to replace valve cores, valve nuts, seals, seal washers, or valve caps. If you are in need of TPMS repairs, maintenance, or replacement services, or if you are in need of a TPMS installation service, then contact us today.</p>`;
		}

		}
	</script>

<?php
}
?>