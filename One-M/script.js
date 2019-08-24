
	//Reload page for better response
	const window_width = window.innerWidth;
	$(window).resize(function(){
		if (window_width < 993 && window.innerWidth >= 993 || window_width >= 993 && window.innerWidth < 993) {
			location.reload(true);
		}
	});

	//Responsive Navbar 
	if (window.innerWidth <= 992) {
		$('.navbar-toggler').fadeIn('slow');
		$('#myNav').removeClass('navbar-expand-md');
		$('#dot').slideDown('fast');
	}
	else{	
		$('.navbar-toggler').fadeOut('slow');
		$('#myNav').addClass('navbar-expand-md');
	}
	//Navbar Toogler Button
	function tg_nav() {
		$('#myNav').fadeToggle('fast');
		$('#myNav').addClass('fixed-top');
		$('#myNav').css('top' , '120px');
	}

	$(document).ready(function(){
		$(document).scroll(function(){
			if ($(document).scrollTop() > 1500) {
				$('.car').addClass('ani-car');
			}
		})
	});

	//Navbar position-fixed
	$(document).scroll(function(){
		if (window.innerWidth > 992) {
			 if ($(this).scrollTop() > 200) {
				$('.navbar').slideDown('slow');
				$('.navbar').addClass('fixed-top');
			}
			else if ($(document).scrollTop() < 100) {
			$('.navbar').removeClass('fixed-top');	
			}
		}
	});