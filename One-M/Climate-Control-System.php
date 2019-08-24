<?php 
#All Service of Climate Control Systems And Their Translation


$active = 'Climate Control System';
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
			<p class="lead"><a href="Services.php" class="text-muted">Our Services</a> / <a href="Our_services.php?pg=Climate-Control-Systems" class="text-muted">Climate-Control-System</a> / <a href="" ><?php echo ($_GET['pg']); ?></a></p>
			<div id="trans">
			<?php
	if ($_GET['pg'] == 'Air-Conditioning-System-Diagnostic') {
			?>
				<h3 class="text-blue">The Basics Behind Air Conditioning System Diagnostic Services</h3>
				<p>Your vehicle’s air conditioning system cools, purifies, and circulates air throughout the vehicle to promote a comfortable cabin environment and prevent driver fatigue. The air conditioning system operates in a continuous cycle, sending refrigerant through a sealed system to remove hot air from the cabin compartment. As the refrigerant flows through the air conditioning system, it is turned from a hot gas into a liquid, which is then cooled, turned into a gas again, and vaporized in order to absorb heat from the cabin. At the end of the cycle, the cool air is blown into the cabin. This process is made possible by the drive belt, which drives the compressor, the main component of the air conditioning system. The compressor works in concert with the condenser, evaporator, and other parts. If any of these components cease to operate efficiently, the functionality of the entire system is at risk. When the performance of your vehicle’s air conditioning diminishes, allow us to identify and solve the issue through an AC diagnostic.</p>
				<h3 class="text-blue">Why Should You Have Air Conditioning System Diagnostic Services Performed?</h3>
				<p>If your air conditioning system creates an unusual amount of noise while running, produces an abnormal odor, or blows stale air instead of cool air, then you may need the assistance of our service staff. During an AC diagnostic, we will inspect the belts for cracks, the compressor for leaks, the electrical components for connectivity, and the entire system for low pressure. Our service staff may also evacuate and recharge your system with refrigerant according to your manufacturer’s specifications. During an air conditioning system diagnostic, we will use professional leak detection tools to locate the problem plaguing your system. Watch for early symptoms for an air conditioning system in need of repair, and contact us online or call us when you are in need of service.<br><br><span class="text-danger">Approx. Time: 60 Minutes</span></p>
				<a href="appoinment.php" class="btn-blue btn">Appoinment</a>

								<script type="text/javascript">
					var eng = `<h3 class="text-blue">The Basics Behind Air Conditioning System Diagnostic Services</h3>
				<p>Your vehicle’s air conditioning system cools, purifies, and circulates air throughout the vehicle to promote a comfortable cabin environment and prevent driver fatigue. The air conditioning system operates in a continuous cycle, sending refrigerant through a sealed system to remove hot air from the cabin compartment. As the refrigerant flows through the air conditioning system, it is turned from a hot gas into a liquid, which is then cooled, turned into a gas again, and vaporized in order to absorb heat from the cabin. At the end of the cycle, the cool air is blown into the cabin. This process is made possible by the drive belt, which drives the compressor, the main component of the air conditioning system. The compressor works in concert with the condenser, evaporator, and other parts. If any of these components cease to operate efficiently, the functionality of the entire system is at risk. When the performance of your vehicle’s air conditioning diminishes, allow us to identify and solve the issue through an AC diagnostic.</p>
				<h3 class="text-blue">Why Should You Have Air Conditioning System Diagnostic Services Performed?</h3>
				<p>If your air conditioning system creates an unusual amount of noise while running, produces an abnormal odor, or blows stale air instead of cool air, then you may need the assistance of our service staff. During an AC diagnostic, we will inspect the belts for cracks, the compressor for leaks, the electrical components for connectivity, and the entire system for low pressure. Our service staff may also evacuate and recharge your system with refrigerant according to your manufacturer’s specifications. During an air conditioning system diagnostic, we will use professional leak detection tools to locate the problem plaguing your system. Watch for early symptoms for an air conditioning system in need of repair, and contact us online or call us when you are in need of service.<br><br><span class="text-danger">Approx. Time: 60 Minutes</span></p>
				<a href="appoinment.php" class="btn-blue btn">Appoinment</a>`;
					var head_e = 'Air-Conditioning-System-Diagnostic';
					var head_f = 'Diagnostic de système de climatisation';
					var fre = `<h3 class="text-blue">L'essentiel des services de diagnostic des systèmes de climatisation</h3><p>Le système de climatisation de votre véhicule refroidit, purifie et fait circuler l'air dans tout le véhicule afin de créer un environnement confortable dans la cabine et d'éviter la fatigue du conducteur. Le système de climatisation fonctionne dans un cycle continu, envoyant du réfrigérant à travers un système scellé pour éliminer l'air chaud du compartiment de la cabine. Lorsque le réfrigérant circule dans le système de climatisation, il passe d'un gaz chaud à un liquide, qui est ensuite refroidi, transformé en gaz et à nouveau vaporisé afin d'absorber la chaleur de la cabine. À la fin du cycle, l'air frais est soufflé dans la cabine. Ce processus est rendu possible par la courroie d'entraînement qui entraîne le compresseur, composant principal du système de climatisation. Le compresseur fonctionne de concert avec le condenseur, l'évaporateur et d'autres pièces. Si l'un de ces composants cesse de fonctionner efficacement, la fonctionnalité de l'ensemble du système est menacée. Lorsque les performances de la climatisation de votre véhicule diminuent, nous permet d’identifier et de résoudre le problème par le biais d’un diagnostic CA.</p><h3 class="text-blue">Pourquoi devriez-vous faire exécuter des services de diagnostic du système de climatisation?</h3><p>Si votre système de climatisation produit une quantité inhabituelle de bruit pendant le fonctionnement, produit une odeur anormale ou souffle de l'air vicié au lieu d'air froid, vous aurez peut-être besoin de l'aide de notre personnel de service. Lors d'un diagnostic CA, nous inspecterons les courroies pour détecter les fissures, les fuites, les composants électriques, pour la connectivité et l'ensemble du système, pour déterminer la basse pression. Notre personnel de service peut également évacuer et recharger votre système avec du réfrigérant conformément aux spécifications de votre fabricant. Lors du diagnostic du système de climatisation, nous utiliserons des outils professionnels de détection des fuites pour localiser le problème qui affecte votre système. Surveillez les premiers symptômes d’un système de climatisation nécessitant une réparation et contactez-nous en ligne ou appelez-nous lorsque vous avez besoin de service.<br><br><span class="text-danger">Approx. Time: 60 Minutes</span></p><a href="appoinment.php" class="btn-blue btn">RENDEZ-VOUS</a>`;

				</script>
<?php	}
else if ($_GET['pg'] == 'Air-Conditioning-System-Service') { ?>
				<h3 class="text-blue">The Basics Behind Air Conditioning System Services</h3>
				<p>Car air conditioning systems promote a comfortable cabin interior and help prevent driver fatigue. During normal vehicle operation, a substantial amount of heat is created by the engine and exterior contributors like the road and sun. Your vehicle’s AC system is responsible for cooling, purifying, and circulating air. Your air conditioning system works through a series of processes that involve refrigerant. In your vehicle, the refrigerant is responsible for removing heat from the cabin compartment. Refrigerant goes through a continuous cycle of air compression that is dependent on your compressor’s drive belt. The compressor pumps the refrigerant through the system where it is transformed from a hot gas into a liquid and then cooled. Through a number of other components, such as the condenser, compressor, and evaporator, the liquid is again processed into a gas, pressurized, and vaporized before being released into the cabin as cool air.</p>
				<h3 class="text-blue">Why Should You Have Air Conditioning System Services Performd?</h3>
				<p>Like most aspects of car maintenance, treating a problem with your vehicle’s air conditioning system early can help prevent major repairs. For example, an air conditioning system operating on low refrigerant due to a leak will eventually damage the compressor. Replacing or repairing the compressor can be more expensive than sealing the leak and refilling the refrigerant. Some symptoms to beware of regarding a faulty air conditioning system include an inoperative fan or blower, an unusual amount of noise during regular operation, and, of course, reduced cooling capability. Stale smelling air is another sign that something is wrong with your vehicle’s air conditioner. A clogged compressor, evaporator, condenser, or expansion valve can contribute to AC system failure. Routine maintenance now can help you avoid major AC repairs down the road.<br><br><span class="text-danger">Approx. Time: 60 Minutes</span></p>
				<a href="appoinment.php" class="btn-blue btn">Appoinment</a>
<script type="text/javascript">
					var eng = `<h3 class="text-blue">The Basics Behind Air Conditioning System Services</h3>
				<p>Car air conditioning systems promote a comfortable cabin interior and help prevent driver fatigue. During normal vehicle operation, a substantial amount of heat is created by the engine and exterior contributors like the road and sun. Your vehicle’s AC system is responsible for cooling, purifying, and circulating air. Your air conditioning system works through a series of processes that involve refrigerant. In your vehicle, the refrigerant is responsible for removing heat from the cabin compartment. Refrigerant goes through a continuous cycle of air compression that is dependent on your compressor’s drive belt. The compressor pumps the refrigerant through the system where it is transformed from a hot gas into a liquid and then cooled. Through a number of other components, such as the condenser, compressor, and evaporator, the liquid is again processed into a gas, pressurized, and vaporized before being released into the cabin as cool air.</p>
				<h3 class="text-blue">Why Should You Have Air Conditioning System Services Performd?</h3>
				<p>Like most aspects of car maintenance, treating a problem with your vehicle’s air conditioning system early can help prevent major repairs. For example, an air conditioning system operating on low refrigerant due to a leak will eventually damage the compressor. Replacing or repairing the compressor can be more expensive than sealing the leak and refilling the refrigerant. Some symptoms to beware of regarding a faulty air conditioning system include an inoperative fan or blower, an unusual amount of noise during regular operation, and, of course, reduced cooling capability. Stale smelling air is another sign that something is wrong with your vehicle’s air conditioner. A clogged compressor, evaporator, condenser, or expansion valve can contribute to AC system failure. Routine maintenance now can help you avoid major AC repairs down the road.<br><br><span class="text-danger">Approx. Time: 60 Minutes</span></p>
				<a href="appoinment.php" class="btn-blue btn">Appoinment</a>`;
					var head_e = 'Air-Conditioning-System-Service';
					var head_f = 'Système de climatisation';
					var fre = `<h3 class="text-blue">L'essentiel des services de climatisation</h3><p>Les systèmes de climatisation des voitures favorisent un habitacle confortable et évitent la fatigue du conducteur. Lors du fonctionnement normal du véhicule, le moteur et les éléments extérieurs comme la route et le soleil génèrent une quantité de chaleur importante. Le système de climatisation de votre véhicule est responsable du refroidissement, de la purification et de la circulation de l’air. Votre système de climatisation fonctionne selon une série de processus impliquant du réfrigérant. Dans votre véhicule, le fluide frigorigène est responsable de l'évacuation de la chaleur du compartiment de la cabine. Le réfrigérant subit un cycle continu de compression de l’air qui dépend de la courroie de transmission de votre compresseur. Le compresseur pompe le réfrigérant à travers le système où il est transformé en un liquide en gaz chaud, puis refroidi. À travers un certain nombre d'autres composants, tels que le condenseur, le compresseur et l'évaporateur, le liquide est à nouveau transformé en gaz, mis sous pression et vaporisé avant d'être rejeté dans la cabine sous forme d'air froid.</p><h3 class="text-blue">Pourquoi devriez-vous faire exécuter des services de climatisation?</h3><p>Comme pour la plupart des aspects de l’entretien des voitures, le fait de régler rapidement le problème du système de climatisation de votre véhicule peut aider à éviter des réparations majeures. Par exemple, un système de climatisation fonctionnant avec une faible quantité de réfrigérant en raison d’une fuite endommagera éventuellement le compresseur. Le remplacement ou la réparation du compresseur peut être plus coûteux que de sceller la fuite et de remplir le réfrigérant. Certains symptômes à prendre en compte concernant un système de climatisation défectueux incluent un ventilateur ou un ventilateur en panne, un bruit inhabituel pendant le fonctionnement normal et, bien sûr, une capacité de refroidissement réduite. Une odeur d’air vicié est un autre signe que quelque chose ne va pas avec le climatiseur de votre véhicule. Un compresseur, un évaporateur, un condenseur ou un détendeur encrassé peut contribuer à la défaillance du système de climatisation. Un entretien régulier maintenant peut vous aider à éviter des réparations majeures du climatiseur sur la route.<br><br><span class="text-danger">Approx. Time: 60 Minutes</span></p><a href="appoinment.php" class="btn-blue btn">RENDEZ-VOUS</a>`;

				</script>
<?php	}
else if ($_GET['pg'] == 'Heating-System-Diagnostic') { ?>
				<h3 class="text-blue">The Basics Behind Heating System Diagnostic Services</h3>
				<p>Your vehicle’s heating system absorbs excess engine heat through a mixture of water and antifreeze called coolant. Hoses carry the coolant from the engine to the radiator, where heat is expelled outside. The heating system circulates the heated coolant to the heater core in the dashboard, which directs the warm air into your vehicle’s interior compartment. This cycle depends on the heater hoses carrying the coolant from the engine to the heater core, where the heat can finally warm the inside of your vehicle. Heating system components include the heater fan, water pump, thermostat, heater hoses, and heater core. These components regulate the internal temperatures of the engine and vehicle cabin. The water pump pushes coolant to the engine block. Coolant flows from the cylinder heads to the heater core, where the heater fan directs the warm air outflow into the vehicle’s cabin. Once the heat is transferred from the coolant into the vehicle, the coolant returns to the water pump where it continues to circulate through the system. During a heating system service, our service staff will examine all working components to diagnosis and identify the problem.</p>
				<h3 class="text-blue">Why Should You Have Heating System Diagnostic Services Performed?</h3>
				<p>Heating system repairs may stem from mechanical and electrical issues. Stains under the passenger side of the dashboard are indicators of coolant leaks, which may be the result of a corroded heater core or cracks in the heater hoses. Sometimes the culprit of heater system problems is hard to pinpoint, which is why a heating system diagnostic may be necessary. During our heating system diagnostic, our service staff may inspect the heater core, blower motor, heater control valve, water pump, thermostat, and other components. We may also check your coolant levels, inspect your heater control valves, or troubleshoot your blower motor. By the end of a heating system diagnostic, our service staff will have isolated the heating system issue, repaired the component, and restored full functionality to the heating system. The next time your heating system breaks, just give us a call or contact us.<br><br><span class="text-danger">Approx. Time: 60 Minutes</span></p>
				<a href="appoinment.php" class="btn-blue btn">Appoinment</a>
				<script type="text/javascript">
					var eng = `<h3 class="text-blue">The Basics Behind Heating System Diagnostic Services</h3>
				<p>Your vehicle’s heating system absorbs excess engine heat through a mixture of water and antifreeze called coolant. Hoses carry the coolant from the engine to the radiator, where heat is expelled outside. The heating system circulates the heated coolant to the heater core in the dashboard, which directs the warm air into your vehicle’s interior compartment. This cycle depends on the heater hoses carrying the coolant from the engine to the heater core, where the heat can finally warm the inside of your vehicle. Heating system components include the heater fan, water pump, thermostat, heater hoses, and heater core. These components regulate the internal temperatures of the engine and vehicle cabin. The water pump pushes coolant to the engine block. Coolant flows from the cylinder heads to the heater core, where the heater fan directs the warm air outflow into the vehicle’s cabin. Once the heat is transferred from the coolant into the vehicle, the coolant returns to the water pump where it continues to circulate through the system. During a heating system service, our service staff will examine all working components to diagnosis and identify the problem.</p>
				<h3 class="text-blue">Why Should You Have Heating System Diagnostic Services Performed?</h3>
				<p>Heating system repairs may stem from mechanical and electrical issues. Stains under the passenger side of the dashboard are indicators of coolant leaks, which may be the result of a corroded heater core or cracks in the heater hoses. Sometimes the culprit of heater system problems is hard to pinpoint, which is why a heating system diagnostic may be necessary. During our heating system diagnostic, our service staff may inspect the heater core, blower motor, heater control valve, water pump, thermostat, and other components. We may also check your coolant levels, inspect your heater control valves, or troubleshoot your blower motor. By the end of a heating system diagnostic, our service staff will have isolated the heating system issue, repaired the component, and restored full functionality to the heating system. The next time your heating system breaks, just give us a call or contact us.<br><br><span class="text-danger">Approx. Time: 60 Minutes</span></p>
				<a href="appoinment.php" class="btn-blue btn">Appoinment</a>`;
					var head_e = 'Heating-System-Diagnostic';
					var head_f = 'Système de chauffage diagnostique';
					var fre = `<h3 class="text-blue">L'essentiel des services de diagnostic des systèmes de chauffage</h3><p>Le système de chauffage de votre véhicule absorbe la chaleur excessive du moteur grâce à un mélange d’eau et d’antigel appelé liquide de refroidissement. Les flexibles transportent le liquide de refroidissement du moteur au radiateur, où la chaleur est expulsée à l'extérieur. Le système de chauffage fait circuler le liquide de refroidissement chauffé vers le cœur du chauffage dans le tableau de bord, qui dirige l’air chaud dans le compartiment intérieur de votre véhicule. Ce cycle dépend du fait que les tuyaux de chauffage acheminent le liquide de refroidissement du moteur au noyau de chauffage, où la chaleur peut enfin réchauffer l’intérieur de votre véhicule. Les composants du système de chauffage comprennent le ventilateur de chauffage, la pompe à eau, le thermostat, les tuyaux de chauffage et le noyau du chauffage. Ces composants régulent les températures internes du moteur et de la cabine du véhicule. La pompe à eau pousse le liquide de refroidissement dans le bloc moteur. Le liquide de refroidissement s'écoule des culasses jusqu'au cœur du chauffage, où le ventilateur chauffe le flux d'air chaud dans l'habitacle du véhicule. Une fois que la chaleur est transférée du liquide de refroidissement dans le véhicule, le liquide de refroidissement retourne à la pompe à eau où il continue de circuler dans le système. Au cours d’un entretien du système de chauffage, notre personnel de service examinera tous les composants opérationnels pour diagnostiquer et identifier le problème.</p><h3 class="text-blue">Pourquoi devriez-vous faire exécuter des services de diagnostic du système de chauffage?</h3><p>Les réparations du système de chauffage peuvent découler de problèmes mécaniques et électriques. Les taches sous le côté passager du tableau de bord sont des indicateurs de fuites de liquide de refroidissement, pouvant être la conséquence d'un noyau de chauffage corrodé ou de fissures des tuyaux de chauffage. Parfois, le problème des systèmes de chauffage est difficile à cerner, d'où la nécessité d'un diagnostic du système de chauffage. Lors du diagnostic de notre système de chauffage, notre personnel de service peut inspecter le cœur du chauffage, le moteur du ventilateur, la vanne de régulation du chauffage, la pompe à eau, le thermostat et d'autres composants. Nous pouvons également vérifier vos niveaux de liquide de refroidissement, inspecter les vannes de régulation de votre chauffage ou dépanner votre moteur de soufflante. À la fin du diagnostic du système de chauffage, notre personnel de service aura isolé le problème du système de chauffage, réparé le composant et restauré toutes les fonctionnalités du système de chauffage. La prochaine fois que votre système de chauffage tombera en panne, appelez-nous ou contactez-nous.<br><br><span class="text-danger">Approx. Time: 60 Minutes</span></p><a href="appoinment.php" class="btn-blue btn">RENDEZ-VOUS</a>`;

				</script>
<?php	}
else if ($_GET['pg'] == 'Heating-System-Service') { ?>
				<h3 class="text-blue">The Basics Behind Heating System Services</h3>
				<p>TIn contrast to the cooling system, which removes heat from the engine, the heating system transfers the engine’s heat to the vehicle’s interior. Excess engine heat is absorbed by coolant, a mixture of water and antifreeze. Coolant is carried by the heater hoses from the engine to the radiator, which expels some of the heat into the atmosphere. The water pump pushes the coolant through the engine, cooling system, and heating system. The coolant travels to the heater core, located in your vehicle’s dashboard. There, the heater fan directs the rest of the warm air into the vehicle’s cabin. Once the coolant transfers heat into the vehicle, the coolant returns to the water pump where it continues to circulate through the system. The heating and cooling systems share a number of components, including the radiator, thermostat, and water pump. Other heating system components include the blower motor, heater control valve, heater core, heater fan, and heater hoses. These components work together to regulate temperatures in the engine and cabin compartment.</p>
				<h3 class="text-blue">Why Should You Have Heating System Services Performed?</h3>
				<p>Because the heating and cooling systems work in tandem, problems with the cooling system will affect the heating system. Low coolant levels, for example, can affect the heating system’s ability to warm your vehicle’s interior. Leaking coolant can be attributed to a damaged heater core, radiator, heater hose, or cooling system. Sweet smells coming from the air vents are a sign of a coolant leak. Other common issues that plague heating system components include a vacuum leak, heater valve failure, fan motor failure, heater core failure, or stuck thermostat. One of the most common causes of breakdowns is overheating, but heating system maintenance can help prevent this from happening. Consult your owner’s manual for recommended inspection intervals for the various heating system components, and be sure to seek out heating system repairs when necessary.<br><br><span class="text-danger">Approx. Time: 60 Minutes</span></p>
				<a href="appoinment.php" class="btn-blue btn">Appoinment</a>
				<script type="text/javascript">
					var eng = `<h3 class="text-blue">The Basics Behind Heating System Services</h3>
				<p>TIn contrast to the cooling system, which removes heat from the engine, the heating system transfers the engine’s heat to the vehicle’s interior. Excess engine heat is absorbed by coolant, a mixture of water and antifreeze. Coolant is carried by the heater hoses from the engine to the radiator, which expels some of the heat into the atmosphere. The water pump pushes the coolant through the engine, cooling system, and heating system. The coolant travels to the heater core, located in your vehicle’s dashboard. There, the heater fan directs the rest of the warm air into the vehicle’s cabin. Once the coolant transfers heat into the vehicle, the coolant returns to the water pump where it continues to circulate through the system. The heating and cooling systems share a number of components, including the radiator, thermostat, and water pump. Other heating system components include the blower motor, heater control valve, heater core, heater fan, and heater hoses. These components work together to regulate temperatures in the engine and cabin compartment.</p>
				<h3 class="text-blue">Why Should You Have Heating System Services Performed?</h3>
				<p>Because the heating and cooling systems work in tandem, problems with the cooling system will affect the heating system. Low coolant levels, for example, can affect the heating system’s ability to warm your vehicle’s interior. Leaking coolant can be attributed to a damaged heater core, radiator, heater hose, or cooling system. Sweet smells coming from the air vents are a sign of a coolant leak. Other common issues that plague heating system components include a vacuum leak, heater valve failure, fan motor failure, heater core failure, or stuck thermostat. One of the most common causes of breakdowns is overheating, but heating system maintenance can help prevent this from happening. Consult your owner’s manual for recommended inspection intervals for the various heating system components, and be sure to seek out heating system repairs when necessary.<br><br><span class="text-danger">Approx. Time: 60 Minutes</span></p>
				<a href="appoinment.php" class="btn-blue btn">Appoinment</a>`;
					var head_e = 'Heating-System-Service';
					var head_f = 'Système de chauffage';
					var fre = `<h3 class="text-blue">L'essentiel des services de chauffage</h3><p>Contrairement au système de refroidissement, qui dissipe la chaleur du moteur, le système de chauffage transfère la chaleur du moteur à l’intérieur du véhicule. L’excès de chaleur du moteur est absorbé par le liquide de refroidissement, un mélange d’eau et d’antigel. Le liquide de refroidissement est transporté par les tuyaux de chauffage du moteur au radiateur, ce qui expulse une partie de la chaleur dans l'atmosphère. La pompe à eau envoie le liquide de refroidissement à travers le moteur, le système de refroidissement et le système de chauffage. Le liquide de refroidissement se rend au cœur du chauffage, situé dans le tableau de bord de votre véhicule. Là, le ventilateur de chauffage dirige le reste de l’air chaud dans la cabine du véhicule. Une fois que le liquide de refroidissement a transféré la chaleur dans le véhicule, le liquide de refroidissement retourne à la pompe à eau où il continue de circuler dans le système. Les systèmes de chauffage et de refroidissement partagent un certain nombre de composants, notamment le radiateur, le thermostat et la pompe à eau. Parmi les autres composants du système de chauffage, citons le moteur du ventilateur, la vanne de régulation du chauffage, le noyau du chauffage, le ventilateur du chauffage et les tuyaux de chauffage. Ces composants fonctionnent ensemble pour réguler les températures dans le compartiment moteur et dans la cabine.</p><h3 class="text-blue">Pourquoi devriez-vous faire exécuter des services de système de chauffage?</h3><p>Parce que les systèmes de chauffage et de refroidissement fonctionnent en tandem, des problèmes avec le système de refroidissement affecteront le système de chauffage. Les faibles niveaux de liquide de refroidissement, par exemple, peuvent affecter la capacité du système de chauffage à réchauffer l’intérieur de votre véhicule. Une fuite de liquide de refroidissement peut être attribuée à un faisceau de chauffage, un radiateur, un tuyau de chauffage ou un système de refroidissement endommagés. Les douces odeurs provenant des bouches d'aération sont le signe d'une fuite de liquide de refroidissement. Parmi les autres problèmes courants qui affectent les composants du système de chauffage, on peut citer une fuite de vide, une défaillance de la vanne de chauffage, une défaillance du moteur du ventilateur, une défaillance du cœur de la résistance ou un thermostat bloqué. La surchauffe est l’une des causes les plus courantes de pannes, mais l’entretien du système de chauffage peut aider à prévenir ce problème. Consultez le manuel du propriétaire pour connaître les intervalles d’inspection recommandés pour les différents composants du système de chauffage et veillez à faire réparer le système de chauffage si nécessaire.<br><br><span class="text-danger">Approx. Time: 60 Minutes</span></p><a href="appoinment.php" class="btn-blue btn">RENDEZ-VOUS</a>`;

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