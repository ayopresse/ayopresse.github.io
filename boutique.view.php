
<!DOCTYPE HTML>
<html>
<head>
<?php 
		require_once("inc/title.php");

 ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="e-commerce" content="Market-publicite" content="affiliation" content="business" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
<!--Custom-Theme-files-->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="all" />
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.min.js"> </script>
<!--/script-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>

</head>
<body>
	<!-- header-section-starts -->
      <?php 


      		require_once("inc/nav.inc.php");
       ?>
	<div class="full">
			<?php 

					require_once("inc/menu.inc.php");

			 ?>
	<div class="col-md-9 main">
	  <!--grids-->
	   <div class="gallery-section">
	     <h3 class="tittle">Nos articles en ventes <i class="glyphicon glyphicon-fullscreen"></i></h3>

               <?php require_once("boutique/conf.php"); ?>



	 </div>
     <div class="clearfix"> </div>
	<!--/footer-->
	    <?php 

	    		require_once("inc/footer.inc.php");

	     ?>
		<!--//footer-->
			<!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


</body>
</html>