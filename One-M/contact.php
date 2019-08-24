<?php 
$active = 'Contact Us';
$container = '.container-fuid{overflow: hidden;background: url(imgs/mo.jpg); background-position: center !important;background-size: cover !important;transition: .5s;} 
    	.bg-rgba{background: rgba(0,0,0,0.8); height: 350px;} 
@media (max-width:992px){
	.bg-rgba{height: 250px;}
}';
require 'header.php'; ?>
<h3 class="pt-5 display-4 text-light ani1 text-center" id="head">Contact <span class="text-blue">Us</span></h3>
</div>
</div>
</div>
<div class="container-fluid">
	<div class="col-md-8 mx-auto d-block p-5">
		<h3 class="text-center text-capitalize display-4" id="sub_head" style="font-size: 40px !important;">feel free to <span class="text-blue">contact us.</span></h3>
			<b class="text-danger pl-2" id="ins">*All fields are required</b>
			<div class="row">
				<div class=" pb-2 col-md-6">
					<input type="text" id="name" id="name" placeholder="Full Name" class="form-control">
				</div>

				<div class=" pb-2 col-md-6">
					<input type="tel" id="num" placeholder="Contact Number" class="form-control">
				</div>
			</div>

			<div class="row pb-2">
				<div class="col-md-12 ">
					<input type="email" id="email" placeholder="email" class="form-control">
				</div>
			</div>

			<div class="row pb-2">
				<div class="col-md-12 ">
					<input type="text" id="subject" placeholder="Subject" class="form-control">
				</div>
			</div>

			<div class="row pb-2">
				<div class="col-md-12 ">
					<textarea rows="7" id="msg" class="form-control" placeholder="Message"></textarea>
				</div>
			</div>

			<div class="row">
				<div class="col-md-10 mx-auto d-block pb-4">
					<input type="button" id="btn" class="btn form-control btn-primary" value='SEND'>
				</div>
			</div>
	</div>
</div>
<script type="text/javascript">

 var elements = [document.getElementById('head'),document.getElementById('sub_head'),document.getElementById('ins')];
 var eng = ['Contact <span class="text-blue">Us</span>',`feel free to <span class="text-blue">contact us.</span>`,'*All fields are required'];
 var fre = ['Contactez <span class="text-blue">nous.', `N'hésitez pas à nous contacter.`,`*Tous les champs sont requis`];
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
	$('#btn').click(function(){
			var name = document.querySelector('#name').value;
			var email = document.querySelector('#email').value;
			var num = document.querySelector('#num').value;
			var subject = document.querySelector('#subject').value;
			var msg = document.querySelector('#msg').value;

			if (name == '' || email == '' || num == '' || subject == '' || msg == '' ) { alert('All Fields Are Required'); }
			else if(name.length < 5){ alert('Your Name Is Too Short, PLease Enter Full Name'); }
			else if(num.length < 10 || num.length  > 14 ){ alert('Enter Valid Number');}
			else if(!validateEmail(email)){ alert('Enter Valid Email');	}
			else if(msg.length < 10){ alert('Message is too short');	}
			else{
				alert('working');
			}
	});
</script>
<?php 
require 'cn_map.php';
require 'footer.php' 
?>