<?php 
$active = 'Services';
$container = '.container-fuid{overflow: hidden;background: url(imgs/mc.jpg); background-position: center !important;background-size: cover !important;transition: .5s;} 
    	.bg-rgba{background: rgba(0,0,0,0.8); height: 350px;} 
@media (max-width:992px){
	.bg-rgba{height: 250px;}
}@media (max-width:592px){
	.bg-rgba{height: 300px;}
}    	';
require 'header.php'; 
    	?>

	<h3 class="pt-5 display-4 text-light ani1 text-center" style="font-size: 40px !important;" id="head"><?php if (isset($_GET['pg'])) { echo($_GET['pg']); } ?> </h3>
			</div>
</div>
</div>
    	<?php
if (isset($_GET['pg'])) 
{
	?><div class="container p-5 ">
		<div class="seer">
			<p class="lead"><a href="Services.php" class="text-muted">Our Services</a> / <a href="" ><?php echo ($_GET['pg']); ?></a></p>
		<?php
	if($_GET['pg'] == 'Belt-and-Hoes'){
	?>

			<div id="cata">
		<h3 class="text-blue">Description Belt & Hoes</h3>
<p>Your vehicle’s belts and hoses are involved in processes within the cooling system, air conditioning system, charging system, and engine. These belts and hoses play crucial roles in functional operations inside your vehicle. The heater hose and radiator hose carry liquid coolant to and from the engine, radiator, and heater core. The timing belt is responsible for maintaining engine precision by synchronizing the rotation of the crankshaft and camshaft, which move the engine’s valves and pistons. However, not all vehicles contain timing belts. In place of timing belts, some vehicles use timing chains. On the outside of the engine, the serpentine belt transmits power from the front of the engine to other systems in the vehicle, like the air conditioning system and charging system. Some factors that contribute to wear and tear on your belts and hoses include vehicle age, mileage, belt tension, hose clamp failure, electrochemical degradation, and oil contamination. In the long run, routine maintenance and replacements of your vehicle’s belts and hoses will prevent breakdowns and costly repairs.</p>
<h3 class="text-blue">Benefits of Belts & Hoses</h3>
<p>When compared to other components in your car, belts and hoses have one of the shortest life spans. These items are constantly exposed to engine heat, vehicle vibrations, and harmful chemicals, which all have the potential to cause cracks and leaks. Some symptoms to be aware of for belts and hoses nearing failure include squeaking, screeching, or grinding noises that begin when starting your engine or appear during vehicle operation. It's worth noting that grinding sounds near belts are usually associated with a bad pulley bearing rather than the belt itself, as the pulley bearing may freeze up and ultimately lead to a belt replacement. Other symptoms of a bad belt or hose include loss of power, leaking coolant or other fluids, illuminated dashboard lights, rising steam from the engine, and air conditioning failure. While routine maintenance of belts and hoses is always important, summertime is an especially important season to keep an eye under the hood due to increased temperatures, which will accelerate deterioration of the rubber components. Since belts and hoses can be difficult to inspect visually, be sure to follow your manufacturer’s recommendations for scheduled maintenance.</p>
</div>
	<?php
		require 'sub_services.php';
		}
	else if($_GET['pg'] == 'Brake-Repair'){
	?>
<div id="cata">
		<h3 class="text-blue">Description of Brake Repair</h3>
<p>A fully functioning brake system is crucial to your safety, the safety of your passengers, and the safety of other drivers on the road. Your vehicle’s brake system involves highly engineered parts and precise movements that stop your vehicle by converting kinetic energy into thermal energy. When you press down on the brake pedal, the master cylinder pressurizes a system of hydraulic brake lines leading to each of the vehicle’s wheels, where brake pads or shoes press against a disc or drum and create the necessary friction needed to slow the vehicle to a complete stop. Over time, this friction and heat has the potential to wear down the brake shoes, brake pads, calipers, brake rotors, and other braking components. While the components comprising each brake system may vary, the warning signs for impending brake repairs are the same.</p>
<h3 class="text-blue">Benefits of Brake Repair</h3>
<p>Bad brakes display warning signs for impending brake maintenance. For example, if your brakes squeal or grind when in use, then your brake pads may be worn and require replacements. If your vehicle pulls to one side when braking, then this may point to worn brakes, a malfunctioning caliper, or low brake fluid in the brake lines. If your brake pedal presses down too easily—also known as “spongy” brakes—then this may be an indication of too much air in the hydraulic brake lines. Sometimes, your vehicle’s electronic diagnostic system will alert you to a potential brake issue by a service indicator light on the dashboard. While these are only some of the most common signs of potential problems with your vehicle’s brake system, noticing these signs of faulty brakes and seeking out a brake service can save you money down the line. Our staff is trained in maintaining and servicing front and rear brake systems and all accompanying brake system components like brake pads, brake shoes, parking brakes, rotors, drums, and hydraulic systems. If you experience any of the above signs or symptoms of bad brakes, like unusual squealing or grinding noises, then contact us online or call us today to have your brakes inspected immediately.</p>
</div>
	<?php
		require 'sub_services.php';
		}
	else if($_GET['pg'] == 'Climate-Control-Systems'){
	?>

<div id="cata">
		<h3 class="text-blue">Description of Climate Control Systems</h3>
<p>A climate control system is a complex system that requires routine maintenance for increased seasonal performance and operation. A vehicle’s climate control system is comprised of multiple, smaller systems that work together to maintain a comfortable cabin environment. The climate control system is able to affect and regulate the internal temperature of a vehicle through a cycle of processes. Although the climate control system is primarily used to improve the comfort levels of both drivers and passengers, there are times over the course of the year when maintaining the ideal internal temperature becomes more than a matter of comfort. In severe weather conditions, maintaining the proper internal climate can actually factor into automotive safety. This is why it is important for you to seek climate control repairs at the first sign of trouble.</p>
<h3 class="text-blue">Benefits of Climate Control Systems</h3>
<p>When your vehicle’s climate control system malfunctions or stops working, it is important to schedule a climate control repair service. In addition to regaining the comfortable cabin environment you enjoyed prior to your system’s problems, you can help ensure your safety as a driver. If you pay attention to the warning signs of an impending climate control system service, you may be able to prevent a broken system and subsequent safety concerns. In addition, your owner’s manual should provide recommended regular service intervals for climate control systems. Catching early warning signs and replacing or repairing climate control system components as necessary will help ensure your ability to control air outflow at all times.</p>
</div>
	<?php
		require 'sub_services.php';
		}
	else if($_GET['pg'] == 'Cooling-System-Repair'){
	?>

<div id="cata">
		<h3 class="text-blue">Description of Cooling System Repair</h3>
<p>The cooling system consists of a cooling fan, water pump, thermostat, radiator, heater core, heater valve, and various other parts that primarily work together to dissipate and remove heat from a vehicle’s engine. Your vehicle’s cooling system is responsible for reducing the temperature inside your engine and preventing possible overheating. Excess heat can build in a variety of places in your vehicle’s engine. When the engine reaches maximum operating temperatures, the thermostat opens and releases antifreeze from the engine to the radiator, which initiates the circulatory flow to absorb excess heat. The antifreeze is also responsible for keeping other engine fluids from boiling or freezing. After the antifreeze flows through the engine, it cycles back to the radiator, where the excess heat escapes through the radiator’s walls. The antifreeze is cooled by the cooling fan and readied to be re-released into the engine to dissipate additional heat.</p>
<h3 class="text-blue">Benefits of Cooling System Repair</h3>
<p>Over time, antifreeze breaks down and loses its efficiency. If not drained and replaced, old antifreeze can lead to corrosion. During a cooling system flush and fill, our staff will drain the antifreeze from the radiator, flush the cooling system, and fill the radiator with new antifreeze. The cooling system’s cooling fan circulates air through the radiator and passes excess heat out of the engine. If the cooling fan malfunctions, your vehicle’s engine will overheat. During an inspection of the cooling system service, our experts will check the cooling fan for damage and the fan belt for cracks. Because the radiator is responsible for cooling the antifreeze as it circulates throughout the cooling system, a leak or a broken radiator hose can lead to major engine failure. A radiator pressure test is one way we can check for potential leaks or radiator damage. Ultimately, neglecting basic cooling system and radiator maintenance can lead to a potential radiator replacement and major engine or radiator repairs down the road.</p>
	</div>
	<?php
		require 'sub_services.php';
		}
	else if($_GET['pg'] == 'Gearbox-Maintenance'){
	?>
			<div id="cata">
		<h3 class="text-blue">Why the operation of a drain on a gearbox is an important thing:</h3>
<p>Why the operation of a drain on a gearbox is an important thing:
The emptying of an automatic gearbox and as important as the engine drain of your vehicle.
Indeed, the oil undergoes mechanical stress, including corrosion due mainly to the friction of the
discs inside the box, which generates particles that we find in the oil. It must be changed regularly,
we advise you to do a total oil change every 50,000 to 80,000 km, which will extend the life of your
automatic gearbox.<br>
<b class="text-warning">WARNING !</b> Drain half is not enough, the old oil will then mix with the new one.
ONE M is equipped with a machine that ensures 100% oil change in your gearbox. We also replace
the filter with the original part.</p>
<h3 class="text-blue">When to change the oil of the automatic transmission?</h3>
<p>How to check the ATF of the automatic transmission<br>The operation of controlling the ATF level of an automatic vehicle is similar to that of checking the
engine oil level. The only difference to check the level of the gearbox oil and that the engine must be
running.When we check the ATF, we have to check the level and the quality. Although these two criteria are
important, too low a level of ATF can cause more serious failures than if the quality of the ATF is
poor.
Anyway, if we find that the transmission fluid is burnt or brown, we need to replace it urgently.
When to change the automatic transmission oil?
The oil in an automatic transmission deteriorates over time. Some factors accelerate this
deterioration, such as:
Traffic in urban areas requires frequent stops due to traffic.
The transport of heavy loads.
Trailer hitch.
The reason why ATF deteriorates is that the temperature of the transmission increases as it rotates.
The hotter the fluid, the greater the wear of the transmission, which forces the gears to work harder.
The recommendations for transmission oil change cycles vary depending on the manufacturer and
the type of transmission. In general, ONE M recommends draining the oil with a DIDIED AND SPECIAL
MACHINE every:
- 60,000 km for DCT and CVT transmissions
- 80 000 km for the rest of the automatic transmissions, while respecting the manufacturer&#39;s manual.
<br><br>
ONE M uses this machine to guarantee the customer a 100% emptying, unlike manual emptying, the
latter only 40% to 60% of the emptying. The customer will receive a rinse with special products,
contrary to the manual operation, ensuring a VERY COMPETITIVE PRICE....</p>
</div>
	<?php
		require 'sub_services.php';
		}
	else if($_GET['pg'] == 'Lube-Oil-Filter'){
	?>

<div id="cata">
		<h3 class="text-blue">Description of Lube, Oil & Filter Change</h3>
<p>An oil change and filter replacement is one of many preventative maintenance services that help promote maximum vehicle performance while extending the life of your vehicle. Oil is responsible for lubricating the working components inside your vehicle’s engine while reducing the amount of friction between them. Because the engine generates a substantial amount of heat, oil acts as a cooling agent as it circulates through the engine. Oil also absorbs other harmful particles created during the combustion process and directs them to the oil filter, which filters out the debris and contaminants for clean, free-flowing oil. Together, the oil and oil filter keep your vehicle’s engine operating at optimal levels of performance. During an oil change, we will replace your engine’s old oil with new oil and replace the oil filter. We will also lubricate the chassis components of the vehicle according to the standards of the manufacturer. At the end of every lube, oil and filter change, our staff will have ensured that your engine oil is clean and the working parts of your engine are properly lubricated.</p>
<h3 class="text-blue">Benefits of Lube, Oil & Filter Change</h3>
<p>Over time, as oil becomes saturated with contaminants, excess particles are left behind in the engine, where they can form deposits and cause significant wear to the engine. Oversaturated oil loses its lubrication, which will eventually lead to an overworking engine, excess heat, and engine failure. Excessive heat can also lead to thermal breakdown in your engine oil, causing a change in the oil’s viscosity, and resulting in decreased oil flow. Similarly, dirty oil flows more slowly, causing the engine to work harder, leading to increased engine wear. Our service staff will inspect the oil filter during each oil change, and replace the oil filter in order to keep your oil clean from contaminants. Routine lube and oil changes will keep your engine running stronger and running longer. Contact us online or call us today regarding your next lube, oil, and filter change.</p>
</div>
	<?php
		require 'sub_services.php';
		}

	else if($_GET['pg'] == 'Preventive-Maintenance'){
	?>

<div id="cata">
		<h3 class="text-blue">Description of Preventive Maintenance</h3>
<p>Preventive maintenance is the care and protection of your vehicle against potential major auto repairs. Negligence is the most common and costly way to see money wasted on repairs that could have easily been prevented through regular service intervals. Depending on your vehicle’s manufacturer, avoiding preventive maintenance on certain parts and components has the potential to void warranty coverage. Car maintenance intervals have been designed to improve the reliability, durability, and resale value of your vehicle. Based upon your driving conditions, these service intervals may arrive sooner than you expect. For example, short commutes can actually hurt a vehicle because most engines thrive during long drives. Driving short commutes, experiencing stop-and-go traffic, and carrying heavy cargo are all aspects of severe driving. However, severe driving can also be reinforced by your environment. Hot or cold weather, mountainous or rough roads, and dusty or salty environments can all affect your vehicle. Because of these innumerable factors, adhering to a rigid service schedule can keep your vehicle operating at maximum efficiency for years to come.</p>
<h3 class="text-blue">Benefits of Preventive Maintenance</h3>
<p>Vehicle components and parts naturally wear out over time, and road hazards can negatively impact critical components. By adhering to the preventive maintenance schedule in your vehicle owner’s manual, you will help ensure that your vehicle always runs at optimal conditions. Depending upon the vehicle’s service interval mileage, our staff may inspect the function of your steering and suspension components, fluid filters, belts and hoses, brakes and axles, and more to help ensure that your vehicle functions efficiently. Our staff can look at the level of vital vehicle fluids. We are also able to review exterior and interior lights, examine windshield wiper blades, check batteries, inspect hinges and locks, determine level of ball joint wear, check transmission components, fix exhaust system components, and conduct both tire wear inspection and inflation checks. It is important to schedule preventive maintenance for these and other components to ensure they continue to work as intended. Remember that environmental conditions may affect your ideal preventive maintenance schedule. Depending upon your environment, you may need to seek more frequent inspections and replacements. Contact us today to learn more about recommended car maintenance service intervals for your vehicle.</p>
</div>
	<?php
		require 'sub_services.php';
		}

	else if($_GET['pg'] == 'Charging-and-Batteries'){
	?>

<div id="cata">
		<h3 class="text-blue">Description of Starting, Charging & Batteries</h3>
<p>Your vehicle’s starting and charging system is involved in regulating multiple electrical processes to start your vehicle's engine and keep it running. The starting system consists of the battery, a starter motor, and a starter solenoid responsible for starting the engine, while the charging system consists of an alternator and voltage regulator. The charging system is responsible for routing energy throughout the entire electrical process while sustaining the battery’s charge. The battery supplies the electric power necessary to start the vehicle. This process starts when you turn the ignition. Then, the starting system sends power from the battery to the starter solenoid to the starter motor, which turns the engine in order to begin the internal combustion process. The alternator powers the other electrical components in your vehicle while the regulator controls the voltage supplied to each component. The regulator also ensures that the alternator maintains the battery’s charge so that the entire cycle can continue.
</p>
<h3 class="text-blue">Benefits of Starting, Charging & Batteries</h3>
<p>Slow cranking engines and dim headlights can sometimes point to a problem with your vehicle’s starting and charging system. Because the battery is required for the electrical charge needed to start the rest of the electrical system, a weak or dead battery can also prevent your car from starting. If a jump start refuses to revive your battery and the starting system, our staff may need to take a closer look at the other components of the starting and charging system to determine whether or not you need a starter replacement or an alternator replacement. All components within your vehicle’s starting and charging system are necessary to ensure proper working order, and one bad link between them can render the entire electrical process useless. If you experience problems with starting your vehicle or maintaining its power even after trying a jump start, then allow our service staff to perform a starting and charging system check on your vehicle today.</p>
</div>
	<?php
		require 'sub_services.php';
		}

	else if($_GET['pg'] == 'Steering-and-Suspension-System'){
	?>

	
<div id="cata">	<h3 class="text-blue">Description of Steering and Suspension System</h3>
<p>The steering and suspension system on your vehicle is responsible for maintaining comfortable riding conditions and driving performance. The steering and suspension system also helps drivers remain in control of their vehicles at all times. The suspension system converts forward energy created by bumps in the road into vertical energy that travels up into the vehicle frame. Suspension system components, like coil springs and shock absorbers, help to dampen the impact of this road force. While the individual components comprising each suspension system may vary, all suspension system components will weaken over time through stress applied during normal driving conditions. Similarly, off-road driving and erratic driving can wear down suspension components more quickly. Regardless of your driving preferences, we have the necessary equipment to identify and correct any issue plaguing your steering and suspension system. Our staff is trained to inspect the steering and suspension components in order to determine whether your service will entail a minor adjustment or a replacement.
</p>
<h3 class="text-blue">Benefits of Steering and Suspension System</h3>
<p>Shaky, unsteady, off-center, and stiff steering are all cause for getting a steering system repaired, while excessive bouncing or swaying during bumps and intermittent control while driving and braking are cause for a suspension system inspection. Uneven tire wear is also a potential sign of a suspension problem, though this may also point to alignment issues. Have you hit a pothole recently? Potholes can cause damage to steering and suspension components. Worn suspension components will reduce the stability of the vehicle and the control of the driver. Because suspension system components combine into one working unit, suspension issues that go untreated have the potential to increase the wear on other suspension components, which may result in more extensive repairs down the road. If you experience any of the above symptoms, contact us online or by phone today.

</p>
</div>
	<?php
			require 'sub_services.php';

		}

	else if($_GET['pg'] == 'TPMS'){
	?>

<div id="cata">
		<h3 class="text-blue">Description of Tire Pressure Monitoring System (TPMS)</h3>
<p>Tires operating below inflation standards put the overall performance of your vehicle and the safety of your passengers at risk. The Tire Pressure Monitoring System helps increase your safety on the road by improving your vehicle’s maneuverability, decreasing the tread wear of your tires, reducing your vehicle’s braking distance, and improving your vehicle’s fuel economy. There are two types of Tire Pressure Monitoring Systems in existence today—Direct and Indirect. A Direct Tire Pressure Monitoring System uses sensors on the inside tire assembly to transmit tire pressure information to your vehicle’s computer. An Indirect Tire Pressure Monitoring System gauges tire pressure through your vehicle’s Anti-lock Braking System (ABS) by using speed sensors to measure the rotational speed of each wheel (as tire pressure decreases, the rolling distance decreases, and the rotational speed increases). All TPMS systems require regular maintenance in order to meet maximum performance standards, which requires all vehicles to be equipped with a Tire Pressure Monitoring System.

</p>
<h3 class="text-blue">Tire Pressure Monitoring System (TPMS)</h3>
<p>Your vehicle’s Tire Pressure Monitoring System (TPMS) continuously monitors the air pressure in your tires. When there is an instance of low tire pressure, or if the tire pressure drops below the manufacturer’s recommended level of tire pressure, the TPMS will detect and report the discrepancy by illuminating an indicator light on the dashboard of your vehicle. When the TPMS light flashes on the dashboard, you should check your tire pressure, inflate the affected tire to the level indicated by the manufacturer, or bring your vehicle into our shop so that the issue can be remedied by our expert staff. During a TPMS maintenance service, our service staff will run a series of tests to ensure that the system is operating both correctly and at maximum efficiency. If our technicians uncover damage to the system or its accompanying components, they may need to replace valve cores, valve nuts, seals, seal washers, or valve caps. If you are in need of TPMS repairs, maintenance, or replacement services, or if you are in need of a TPMS installation service, then contact us today.
</p>
</div>
	<?php
		require 'sub_services.php';
		}
	else{
			echo "<h3 class='display-3 text-center mt-5 pt-5'>404 NOT FOUND</h3>";

		}
		?>
</div>
</div>
<?php
}
else 
{
echo "<h3 class='display-3 text-center mt-5 pt-5'>404 NOT FOUND</h3>";
}
		require 'cn_map.php';
		require 'footer.php';

?>
