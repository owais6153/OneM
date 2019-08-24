<?php 
$active = 'Appointment';
$container = '.container-fuid{overflow: hidden;background: url(imgs/mc.jpg); background-position: center !important;background-size: cover !important;transition: .5s;} 
    	.bg-rgba{background: rgba(0,0,0,0.8); height: 350px;} 
@media (max-width:992px){
	.bg-rgba{height: 250px;}
}@media (max-width:592px){
	.bg-rgba{height: 300px;}
}
.bd{border:solid 1px #353535;}    	';
require 'header.php'; 
function day_name($day)
{
	$wr;
	if ($day == 1) {
		$wr = 'Monday';
	}
	else if ($day == 2) {
		$wr = 'Tuesday';
	}
	else if ($day == 3) {
		$wr = 'Wednesday';
	}
	else if ($day == 4) {
		$wr = 'Thursday';
	}
	else if ($day == 5) {
		$wr = 'Friday - <span id="off" class="text-dark">Closed</span>';
	}
	else if ($day == 6) {
		$wr = 'Saturday';
	}
	else if ($day == 7) {
		$wr = 'Sunday';
	}
	return($wr);
}
?>

	<h3 class="pt-5 display-4 text-light ani1 text-center ap">Appointment</h3>
			</div>
</div>
</div>
<div class="container mb-3 p-3 mt-2 ">
	<div class="seer">
		<div class="col-md-12 mx-auto">
			<div class="alert alert-danger" id="alert" style="display: none;">
		  		<strong id="eror-success"></strong>
			</div>
		</div>
		<div class="col-md-12 mx-auto p-3 " style="background: #252525; box-shadow: 5px 5px 7px #999; border-radius: 10px;">
				<div>
		<div class="raw row p-0" style="border-top-right-radius: 10px;">
				<p class="lead text-center ml-auto hid text-blue"><b id="Head-text">Choose Any Service Below</b></p>
				<div class="slanted bg-blue" style="border-top-right-radius: 10px;"><p class=" ml-3"><i class="far fa-arrow-alt-circle-right mr-2"></i><span class="ap">Appointment</span></p></div>
			</div>
		</div>
			<div style="margin-top: 51px; height: 400px; overflow-y: scroll;" id="sc">
				
	
				<div id="chng" style="">
								
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Heater-Hoes-Replacement">Heater Hose Replacement
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Radiator Hose Replacement">Radiator Hose Replacement
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Serpentine Belt Replacement">Serpentine Belt Replacement
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Timing Belt Replacement">Timing Belt Replacement
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Brake Inspection">Brake Inspection
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Brake Rotor Replacement">Brake Rotor Replacement
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Front Disc Brake Repair">Front Disc Brake Repair
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Parking Brake Adjustment">Parking Brake Adjustment
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Rear Disc Brake Repair">Rear Disc Brake Repair
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Rear Drum Brake Repair">Rear Drum Brake Repair
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Air Conditioning System Diagnostic">Air Conditioning System Diagnostic
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Air Conditioning System Service">Air Conditioning System Service
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Heating System Diagnostic">Heating System Diagnostic
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Heating System Service">Heating System Service
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Cooling System Flush & Fill">Cooling System Flush & Fill
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Cooling System Pressure Test">Cooling System Pressure Test
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Replace Radiator">Replace Radiator
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Gearbox-Maintenance">Gearbox-Maintenance
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Lube and Oil Change">Lube and Oil Change
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Air Filter Replacement">Air Filter Replacement
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Fuel Injection">Fuel Injection
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Oil and Filter Change">Oil and Filter Change
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Spring Checkup">Spring Checkup
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Winterization Checkup">Winterization Checkup
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Wiper Blades Replacement">Wiper Blades Replacement
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Alternator Replacement">Alternator Replacement
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Battery Replacement">Battery Replacement
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Starter Replacement">Starter Replacement
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Starting & Charging System Check">Starting & Charging System Check
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Ball Joint Replacement">Ball Joint Replacement
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Inner Tie Rod & Outer Tie Rod Replacement">Inner Tie Rod & Outer Tie Rod Replacement
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Shocks Replacement">Shocks Replacement
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Struts Replacement">Struts Replacement
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Suspension Inspection">Suspension Inspection
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="Sway Bar Link Replacement">Sway Bar Link Replacement
			</div>
			<div class="p-3 bg-light bd">
				<input type="checkbox" style="width: 50px;" name="service" value="TPMS Repair">TPMS Repair
			</div>
		</div>
		<div id="non" class="text-light" style="display: none !important;" class="mx-auto d-block">
						<table class="table table-bordered text-light" id="myTable">
							<tr class="bg-blue">
								<th><?php echo (date('d, F') . '<br>' . day_name(date("N")));?></th>
								<th><?php echo (date('d, F', strtotime("+1 day")) . '<br>' . day_name(date('N', strtotime("+1 day"))));?></th>
								<th><?php echo (date('d, F', strtotime("+2 day")) . '<br>' . day_name(date('N', strtotime("+2 day"))));?></th>
								<th><?php echo (date('d, F', strtotime("+3 day")) . '<br>' . day_name(date('N', strtotime("+3 day"))));?></th>
								<th><?php echo (date('d, F', strtotime("+4 day")) . '<br>' . day_name(date('N', strtotime("+4 day"))));?></th>
								<th><?php echo (date('d, F', strtotime("+5 day")) . '<br>' . day_name(date('N', strtotime("+5 day"))));?></th>
								<th><?php echo (date('d, F', strtotime("+6 day")) . '<br>' . day_name(date('N', strtotime("+6 day"))));?></th>
							</tr>
							<tr>
								<td>7.30am<input type='checkbox' name="time" value="1-0"></td>
								<td>7.30am<input type='checkbox' name="time" value="1-1"></td>
								<td>7.30am<input type='checkbox' name="time" value="1-2"></td>
								<td>7.30am<input type='checkbox' name="time" value="1-3"></td>
								<td>7.30am<input type='checkbox' name="time" value="1-4"></td>
								<td>7.30am<input type='checkbox' name="time" value="1-5"></td>
								<td>7.30am<input type='checkbox' name="time" value="1-6"></td>
							</tr>
							<tr>
								<td>9.00am<input type='checkbox' name="time" value="2-0"></td>
								<td>9.00am<input type='checkbox' name="time" value="2-1"></td>
								<td>9.00am<input type='checkbox' name="time" value="2-2"></td>
								<td>9.00am<input type='checkbox' name="time" value="2-3"></td>
								<td>9.00am<input type='checkbox' name="time" value="2-4"></td>
								<td>9.00am<input type='checkbox' name="time" value="2-5"></td>
								<td>9.00am<input type='checkbox' name="time" value="2-6"></td>
							</tr>
							<tr>
								<td>10.00am<input type='checkbox' name="time" value="3-0"></td>
								<td>10.00am<input type='checkbox' name="time" value="3-1"></td>
								<td>10.00am<input type='checkbox' name="time" value="3-2"></td>
								<td>10.00am<input type='checkbox' name="time" value="3-3"></td>
								<td>10.00am<input type='checkbox' name="time" value="3-4"></td>
								<td>10.00am<input type='checkbox' name="time" value="3-5"></td>
								<td>10.00am<input type='checkbox' name="time" value="3-6"></td>
							</tr>
							<tr>
								<td>11.00am<input type='checkbox' name="time" value="4-0"></td>
								<td>11.00am<input type='checkbox' name="time" value="4-1"></td>
								<td>11.00am<input type='checkbox' name="time" value="4-2"></td>
								<td>11.00am<input type='checkbox' name="time" value="4-3"></td>
								<td>11.00am<input type='checkbox' name="time" value="4-4"></td>
								<td>11.00am<input type='checkbox' name="time" value="4-5"></td>
								<td>11.00am<input type='checkbox' name="time" value="4-6"></td>
							</tr>

							<tr>
								<td><span class="text-muted">Lunch Break</span></td>
								<td><span class="text-muted">Lunch Break</span></td>
								<td><span class="text-muted">Lunch Break</span></td>
								<td><span class="text-muted">Lunch Break</span></td>
								<td><span class="text-muted">Lunch Break</span></td>
								<td><span class="text-muted">Lunch Break</span></td>
								<td><span class="text-muted">Lunch Break</span></td>
							</tr>
							<tr>
								<td>1.00pm<input type='checkbox' name="time" value="6-0"></td>
								<td>1.00pm<input type='checkbox' name="time" value="6-1"></td>
								<td>1.00pm<input type='checkbox' name="time" value="6-2"></td>
								<td>1.00pm<input type='checkbox' name="time" value="6-3"></td>
								<td>1.00pm<input type='checkbox' name="time" value="6-4"></td>
								<td>1.00pm<input type='checkbox' name="time" value="6-5"></td>
								<td>1.00pm<input type='checkbox' name="time" value="6-6"></td>
							</tr>
							<tr>
								<td>2.00pm<input type='checkbox' name="time" value="7-0"></td>
								<td>2.00pm<input type='checkbox' name="time" value="7-1"></td>
								<td>2.00pm<input type='checkbox' name="time" value="7-2"></td>
								<td>2.00pm<input type='checkbox' name="time" value="7-3"></td>
								<td>2.00pm<input type='checkbox' name="time" value="7-4"></td>
								<td>2.00pm<input type='checkbox' name="time" value="7-5"></td>
								<td>2.00pm<input type='checkbox' name="time" value="7-6"></td>
							</tr>
							<tr>
								<td>3.00pm<input type='checkbox' name="time" value="8-0"></td>
								<td>3.00pm<input type='checkbox' name="time" value="8-1"></td>
								<td>3.00pm<input type='checkbox' name="time" value="8-2"></td>
								<td>3.00pm<input type='checkbox' name="time" value="8-3"></td>
								<td>3.00pm<input type='checkbox' name="time" value="8-4"></td>
								<td>3.00pm<input type='checkbox' name="time" value="8-5"></td>
								<td>3.00pm<input type='checkbox' name="time" value="8-6"></td>
							</tr>
							<tr>
								<td>4.00pm<input type='checkbox' name="time" value="9-0"></td>
								<td>4.00pm<input type='checkbox' name="time" value="9-1"></td>
								<td>4.00pm<input type='checkbox' name="time" value="9-2"></td>
								<td>4.00pm<input type='checkbox' name="time" value="9-3"></td>
								<td>4.00pm<input type='checkbox' name="time" value="9-4"></td>
								<td>4.00pm<input type='checkbox' name="time" value="9-5"></td>
								<td>4.00pm<input type='checkbox' name="time" value="9-6"></td>
							</tr>
							<tr>
								<td>5.00pm<input type='checkbox' name="time" value="10-0"></td>
								<td>5.00pm<input type='checkbox' name="time" value="10-1"></td>
								<td>5.00pm<input type='checkbox' name="time" value="10-2"></td>
								<td>5.00pm<input type='checkbox' name="time" value="10-3"></td>
								<td>5.00pm<input type='checkbox' name="time" value="10-4"></td>
								<td>5.00pm<input type='checkbox' name="time" value="10-5"></td>
								<td>5.00pm<input type='checkbox' name="time" value="10-6"></td>
							</tr>
						</table>

		</div>
		<div id="third" style="display: none !important;">
<div class="col-md-6 mx-auto d-block text-light">
	<label>First Name</label><br>
	<input type="text" id="f-name" class="form-control"><br>
	<label>Last Name</label><br>
	<input type="text" id="l-name" class="form-control"><br>
	<label>Car</label><br>
	<input type="text" id="car" class="form-control"><br>
	<label>Model</label><br>
	<input type="text" id="model" class="form-control"><br>
	<label>Email</label><br>
	<input type="email" id="email" class="form-control"><br>
	<label>Number</label><br>
	<input type="tel" id="Number" class="form-control"><br>
</div>
		</div>
	</div>

		<div class="text-right mt-3 mr-3">
			<button class="btn btn-blue" id="one" onclick="next(1)" style="padding: 0 60px !important; " id="next"><b class="tex-light">Next</b></button>			
			<button class="btn btn-blue" id="two" onclick="next(2)" style="padding: 0 60px !important; display: none !important; " id="next"><b class="tex-light">Next</b></button>
			<button class="btn btn-blue" id="tho" onclick="next(3)" style="padding: 0 60px !important; display: none !important; " id="next"><b class="tex-light">Confirm</b></button>
		</div>
</div>
	</div>
</div>
<?php 
#Getting data from database to disbale dates and times which are already booked
$day = [date('d, F'),date('d, F', strtotime("+1 day")),date('d, F', strtotime("+2 day")),date('d, F', strtotime("+3 day")),date('d, F', strtotime("+4 day"))];
require 'db_con.php';
$sql = "SELECT * FROM `booked` WHERE `Dat` = '$day[0]' OR `Dat` = '$day[1]' OR `Dat` = '$day[2]' OR `Dat` = '$day[3]' OR `Dat` = '$day[4]'";
$run = mysqli_query($con, $sql);
if ($run) { #if query works
	if (mysqli_num_rows($run) > 0) { #if found something
		while($result = mysqli_fetch_assoc($run)){ 
			$idat = $result['Dat'];
			$itme = $result['Tim'];
						#Puttig Data into input fields for javascript
						?>
						<input type="text" hidden="true" class="datt" value="<?php echo$idat;?>" name="">
						<input type="text" hidden="true" class="tmee" value="<?php echo$itme;?>" name="">

			<?php
		}
	}
}
?>
<script type="text/javascript">

var elem = document.getElementsByClassName('ap');
function lang_trans(){
	var lng = document.getElementById('lang').value;
		if (lng == 'eng') {
			for(let app = 0; app < elem.length; app++){
				elem[app].innerHTML = 'Appointment';
			}
		}
		else if (lng == 'fre') {
			for(let app = 0; app < elem.length; app++){
				elem[app].innerHTML = 'Rendez-Vous';
			}
		} 
}





//disable checkbox of friday.
var myTable = document.getElementById("myTable");
var find_day = '';
var all = document.getElementsByTagName('th');
for (var i = 0; i < all.length ; i++) {
	if(all[i].childNodes.length == 4){
		find_day = i;
		var tr = document.getElementsByTagName('tr');
		for (var i = 1; i < tr.length ; i++) {
		myTable.rows[i].cells[find_day].innerHTML = '<span class="text-danger">Closed</span>';
		}

	} //disable Thursday
	else if (all[i].childNodes.length == 3) {
	if(all[i].lastChild.nodeValue == "Thursday"){
for (var c = 7 ; c < 11 ; c++) {
	document.getElementById("myTable").rows[c].cells[i].innerHTML = '<span class="text-danger">Closed</span>';	
}
	}
	}
}
var d = document.getElementsByClassName('datt');
var t = document.getElementsByClassName('tmee');
/* If Database Have Booked Appointment*/
var tom = [['7.30am',1],['9.00am', 2],['10.00am', 3],['11.00am', 4],['1.00pm', 6],['2.00pm', 7],['3.00pm', 8],['4.00pm', 9],['5.00pm', 10]];
var coll = [];
var roww = []; 
var dbd = [];
var dbt = [];
$.each($('.datt'), function(){
	dbd.push($(this).val());
});

$.each($('.tmee'), function(){
	dbt.push($(this).val());
});
//Finding Rows
for (var i = 0; i < 5; i++) {
	for(let db = 0; db < dbd.length; db++){
		if (myTable.rows[0].cells[i].firstChild.nodeValue == dbd[db])	{
		  coll[db] = i;
		}
	}
}
//Finding Coloums
for(let cc = 0 ; cc < tom.length; cc++){
	for(let oo = 0; oo < dbt.length; oo++){
		if (dbt[oo] == tom[cc][0]) {
			roww[oo] = tom[cc][1];
		}
	}
}
//Disable all booked
for(var i = 0; i < dbd.length; i++){
myTable.rows[roww[i]].cells[coll[i]].innerHTML = '<span class="text-danger">Not Available</span>';
}

function validateEmail(email) 
{
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}


var datee , tme,fname, lname, email, num, timee;        				
var ser, da;

//Getting Data From The Interface
        function next(step){
            const error = ["You Did'nt Select Any Service.","You May Have Select More Then One","You Did'nt Select Any Time","All Fields Are Requird.","You can not choose more then 1 services"];
        	if (step == 1) {
        	ser = [];
            $.each($("input[name='service']:checked"), function(){            
                ser.push($(this).val());
            });
            if (ser.length > 0 && ser.length < 2) {
            	$('#non').fadeIn('fast');
            	$('#chng').fadeOut('fast');
            	$('#one').fadeOut('fast');
            	$('#two').fadeIn('fast');
            	document.getElementById('Head-text').innerHTML = 'Please Choose Date And Time';
            }
            else if (!ser.length){
            	document.getElementById('eror-success').innerHTML = error[0];
            	$('#alert').fadeIn('fast');
            }
            else if (ser.length > 1){
            	document.getElementById('eror-success').innerHTML = error[4];
            	$('#alert').fadeIn('fast');
            }
        }
        else if (step == 2) {
            da = [];
        	$.each($("input[name='time']:checked"), function(){            
                da.push($(this).val());
            });
            if (da.length == 1) { //Getting Time And Date
            timee = da[0].split('-');
            tme	= myTable.rows[timee[0]].cells[timee[1]].firstChild.nodeValue;
            datee = myTable.rows[0].cells[timee[1]].firstChild.nodeValue;
            $('#third').fadeIn('fast');
            $('#two').fadeOut('fast');
            $('#tho').fadeIn('fast');
            $('#non').fadeOut('fast');
          	document.getElementById('Head-text').innerHTML = 'Tell Us About Yourself';
            	}
            else if (da.length > 1) {
            	document.getElementById('eror-success').innerHTML = error[1];
            	$('#alert').fadeIn('fast');
            }
            else if (!da.length) {
            	document.getElementById('eror-success').innerHTML = error[2];
            	$('#alert').fadeIn('fast');
            }
        }
        else if(step == 3){
        	fname = document.getElementById('f-name').value;
        	lname = document.getElementById('l-name').value;
        	email = document.getElementById('email').value;
        	num = document.getElementById('Number').value;
        	car = document.getElementById('car').value;
        	model = document.getElementById('model').value;
        	if (fname == '' ||lname == '' || email == '' || num == '' || car == '' || model == '') {
            	document.getElementById('eror-success').innerHTML = error[3];
            	$('#alert').fadeIn('fast');
        	}
        	else{
        		if (num.length < 10 || num.length  > 14 ) {
	        		document.getElementById('eror-success').innerHTML = 'Enter Valid Number';
	            	$('#alert').fadeIn('fast');
	        	}
	        	else if(fname.length < 3 || lname.length < 3){
	          		document.getElementById('eror-success').innerHTML = 'Name Is Too Short';
	            	$('#alert').fadeIn('fast');
	        	}
        		else if (validateEmail(email)) {
        			//Sending to add.php
        			$.post("add.php",
				  {
				    name: `${fname} ${lname}`,
				    email: email,
				    num: num,
				    service: ser[0],
				    date: datee,
				    time: tme,
				    car: car,
				    model: model
				  },
				  function(data, status){
				  	if (status == 'success') {
				  		if(data == 'success'){
							$('#alert').removeClass('alert-danger');
							 $('#alert').addClass('alert-success');
			            	document.getElementById('eror-success').innerHTML = 'Appoinment Successful';
			            	$('#alert').fadeIn('fast');
   			  			}
   			  			else{
   			  				alert(data);
   			  			}
				  	}
				  });
        	}
        	else{
        		document.getElementById('eror-success').innerHTML = 'Enter Valid Email';
            	$('#alert').fadeIn('fast');
        	}
        	}
    }
        }
</script>

<?php 
#footer
require 'cn_map.php';
require 'footer.php';
?>