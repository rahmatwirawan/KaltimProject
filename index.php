<?php
	include("koneksi.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>BPMP2T</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Le styles -->

<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<link href="assets/css/flexslider.css" rel="stylesheet">
<link href="assets/css/switcher.css" rel="stylesheet">
<link href="assets/css/parallax_slider/style.css" rel="stylesheet">
<noscript>
	<link rel="stylesheet" type="text/css" href="css/parallax_slider/nojs.html" />
</noscript>
<link href="assets/css/font-awesome.min.css" rel="stylesheet"> 
<link href="assets/css/social.css" rel="stylesheet"> 
<link href="assets/css/style.css" rel="stylesheet" id="colors">


<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="images/Balikpapan.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
<!--START MAIN-WRAPPER--> 
<div class="main-wrapper">
	<div class="headertop needhead">
		<div class="action-banner-bg"></div>
		<div class="action-banner-bg-top"></div>
		  <?php include("menu.php"); ?>
			<div class="banner-rotator">
				<div id="da-slider" class="da-slider">
					<?php include("slider.php"); ?>
				</div>
			</div>
	</div>
</div>
	<!--*******************************-->
	

<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/modernizr.custom.28468.js"></script>
<script src="assets/js/bootstrap-transition.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-alert.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-modal.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-dropdown.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-scrollspy.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-tab.js" type="text/javascript"></script>
<script src="assets/js/bootstrap-tooltip.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-popover.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-button.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-collapse.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-carousel.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-typeahead.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-affix.js" type="text/javascript"></script> 
<script src="assets/js/application.js" type="text/javascript"></script> 
<script type="text/javascript" src="assets/js/jquery.easing.js"></script>
<script src="assets/js/superfish.js" type="text/javascript"></script>
<script src="assets/js/jquery.prettyPhoto.js" type="text/javascript"></script>
<script src="assets/js/custom.js" type="text/javascript"></script>
<script src="assets/js/jquery.ui.totop.js" type="text/javascript"></script> 
<script type="text/javascript" src="assets/js/jquery.mousewheel.js"></script>
<script src="assets/js/jquery.flexslider-min.js" type="text/javascript"></script> 
<script type="text/javascript" src="assets/js/jquery.cslider.js"></script>
<script type="text/javascript" src="assets/js/switcher.js"></script>



					<!-- SLIDER -->
						<script type="text/javascript">
			jQuery(document).ready(function($){
	
				$('#da-slider').cslider({
					autoplay	: true,
					bgincrement	: 50
				});

			});
		</script>	
					<!--END: SLIDER -->
				
					<!--PORTFOLIO SLIDER -->
					<script>
					  // Can also be used with jQuery(document).ready()
					  jQuery(window).load(function() {
					  jQuery('.portfolio_rotator').flexslider({
						animation: 'slide',
						animationLoop: false,
						useCSS: false,
						controlNav: false,
						controlsContainer: '.portfolio-controls',
						easing: 'easeInOutSine',
						animationSpeed:'500',
						touch: true,
						minItems: 1,
						maxItems: 30,
						mousewheel:false,
						pauseOnHover:true,
						itemWidth:170,
						itemMargin: 30,
						move:1,
					
						
					  });
					});
					  
					</script>
					
					<!--END: SLIDER -->
					
					<!--CLIENT SLIDER -->
					<script>
					  // Can also be used with jQuery(document).ready()
					  jQuery(window).load(function() {
					  jQuery('.clients_rotator_widget_wrap').flexslider({
						animation: 'slide',
						animationLoop: false,
						useCSS: false,
						controlNav: false,
						controlsContainer: '.flex-controls-cl',
						easing: 'easeInOutSine',
						animationSpeed:'200',
						touch: true,
						minItems: 1,
						maxItems: 30,
						itemWidth: 170,
						itemMargin: 30,
						mousewheel:false,
						pauseOnHover:true,
						move:5,
					  });
					});
					  
					</script>

					
</body>
</html>
