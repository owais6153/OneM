<?php 
$active = 'My Vehicle';
$container = '.container-fuid{overflow: hidden;background: url(imgs/jp.jpg); background-position: center !important;background-size: cover !important;transition: .5s;} 
    	.bg-rgba{background: rgba(0,0,0,0.8); height: 350px;} 
@media (max-width:992px){
	.bg-rgba{height: 250px;}
}
.bb{
	box-sizing: border-box;
	display:inline-block;
}    	';
require 'header.php'; ?>
<h3 id="abt_h" class="pt-5 display-4 text-light ani1 text-center" >My<span class="text-blue"> Vehicle</span></h3>
			</div>
</div>
</div>
<div class="container p-5">
	<div class="seer">
		<div id="data">
			<h3 class="display-4 text-center" id="head_two"><i class="fas fa-history text-blue"></i> Check Your Service History</h3>

	<div class="row">
		<div class="col-md-4 pt-5">
			<h3 class="display-3 text-center text-blue"><i class="fas fa-tools"></i></h3>
		<h3 class="display- text-blue text-center" id="sh">Service History</h3>

			<p class="text-center lead text-capitalize" id="shp">We Care About You, That's Why We Save All the records and history of your vechile, just enter your email and number to find!</p>
		</div>
		<div class="col-md-8 p-5">
			<label class="mt-5">Email</label>
			<input type="email" class="form-control" id="mil" >
			<label>Number</label>
			<input type="Tel" id="num" class="form-control">
			<button class="form-control btn btn-primary mt-4" onclick="get_history()">Submit</button>
		</div>
	</div>
</div>
</div>
</div>
<script type="text/javascript">

 var elements = [document.getElementById('abt_h'),document.getElementById('head_two'),document.getElementById('sh'),document.getElementById('shp')];
 var eng = ['My<span class="text-blue"> Vehicle</span>','<i class="fas fa-history text-blue"></i> Check Your Service History','Service History',`We Care About You, That's Why We Save All the records and history of your vechile, just enter your email and number to find!`];
 var fre = ['Mon<span class="text-blue"> Véhicule</span>',`<i class="fas fa-history text-blue"></i> Vérifiez votre historique de service`, 'Histoire du service','Nous nous soucions de vous, c’est pourquoi nous sauvegardons tous les documents et l’historique de votre Vechile, il vous suffit de saisir votre adresse e-mail et votre numéro à rechercher!'];
function lang_trans(){
	var lng = document.getElementById('lang').value;
		if (lng == 'eng') {
			for(let i = 0; i < elements.length; i++){
				elements[i].innerHTML = eng[i];
			}
		}
		else if (lng == 'fre') {
			for(let i = 0; i < elements.length; i++){
				elements[i].innerHTML = fre[i];
			}
		} 
}
function validateEmail(email) 
{
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

	var data = document.getElementById('data');
	function get_history() {
	var email = document.getElementById('mil').value;
	var num = document.getElementById('num').value;
if (validateEmail(email)) {
	var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            data.innerHTML = this.responseText;
       }
    };
    xhttp.open("GET", `history.php?em=${email}&num=${num}`, true);
    xhttp.send();	
	}
else{
	alert('Enter Valid Email');
}
}
</script>

<?php 
require 'cn_map.php';
require 'footer.php';
?>