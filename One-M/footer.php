<!--Footer-->
<footer class="text-center" style="background: #131313;">
	<p class=" p-3 text-light">&copy; 2019 One M Auto Service Center, All Rights Reserved <br><span style="font-size: 12px;">Created By: <img src="imgs/logo.png" alt="creater-logo" class="ml-2" style="cursor: pointer; filter: grayscale(50%);" width="80" onclick="window.open('https://letsdezignit.com/')"></span></p>
</footer>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript">
	<?php
	#Check if user already clicked on translated button 
	if (isset($_SESSION['lan'])) {
		if ($_SESSION['lan'] == 'eng') {
			?>
	document.querySelector('#lang').selectedIndex = 0;
		head_tran();				
<?php		}
		else if ($_SESSION['lan'] == 'fre') {
			?>
	document.querySelector('#lang').selectedIndex = 1;
		head_tran();				
<?php		}
	}
?>
</script>
</body>
</html>