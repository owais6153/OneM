<?php 
$active = 'About Us';
$container = '.container-fuid{overflow: hidden;background: url(imgs/mo.jpg); background-position: center !important;background-size: cover !important;transition: .5s; background-attachment: fixed;} 
    	.bg-rgba{background: rgba(0,0,0,0.8); height: 350px;} 
@media (max-width:992px){
	.bg-rgba{height: 250px;}
}    	';
require 'header.php'; ?>
<h3 id="abt_h" class="pt-5 display-4 text-light ani1 text-center">About <span class="text-blue">Us</span></h3>

			</div>
</div>
</div>
<!--About Us-->
<p id="abt_us" class="text-center p-5">One M is a love story between the human and his car, his bike or any other kind of automotive.
One M is the result from this story, for you to give, to report and to prescribe the upscale VIP the
best thing your vehicle.
One M is a self-employed specialized in different vehicle maintenance services.
One M uses only premium products as well as premium equipment for a premium service.
Under the professionalism ethics and competence of its team One M, is committed to providing the
best of the best service while ensuring complete customer satisfaction.
100% satisfied, we won the trust of the customer.<br>
At One M, the welcome is very warm and professional; do not hesitate to visit us
ONE M ... AUTO SERVICE CENTER...
</p>

<script>
	function lang_trans() {
		const eng_text = ['About <span class="text-blue">Us</span>','One M is a love story between the human and his car, his bike or any other kind of automotive. One M is the result from this story, for you to give, to report and to prescribe the upscale VIP the best thing your vehicle. One M is a self-employed specialized in different vehicle maintenance services. One M uses only premium products as well as premium equipment for a premium service. Under the professionalism ethics and competence of its team One M, is committed to providing the best of the best service while ensuring complete customer satisfaction. 100% satisfied, we won the trust of the customer. At One M, the welcome is very warm and professional; do not hesitate to visit us ONE M ... AUTO SERVICE CENTER...'];
		const fre_text = ['A <span class="text-blue">Propos</span>','One M c’est toute une histoire d’amour entre l’humain et sa voiture, sa moto ou tout autre genre d’automotive. One M c’est le résultat émanant de cette histoire, pour vous permettre de donner, de rapporter et de prescrire le haut de gamme le VIP la meilleure chose a ton véhicule. One M est un entre indépendant spécialisé aux différents services de maintenance des véhicules. One M utilise que des produits, ainsi, qu’un équipement premium, pour un service premium. En vertu du professionnalisme, l’étique et la compétence de son équipe, One M, s’engage à donner le meilleure du meilleur service tout en garantissant l’entière satisfaction des clients. 100% satisfait !, nous gagnions la confiance du client. Chez One M, l’accueil est très chaleureux et professionnel, n’hésitez pas a nous rendre visite ONE M…AUTO SERVICE CENTER…'];
		var abt_h =document.getElementById('abt_h');
		var abt_us = document.getElementById('abt_us');
		var lng = document.getElementById('lang').value;
		if (lng == 'fre') {
			abt_h.innerHTML = fre_text[0];
			abt_us.innerHTML = fre_text[1];
		}
		else if(lng == 'eng'){
			abt_h.innerHTML = eng_text[0];
			abt_us.innerHTML = eng_text[1];	
		}
	}
</script>
<?php 
require 'cn_map.php';
require'footer.php' ?>