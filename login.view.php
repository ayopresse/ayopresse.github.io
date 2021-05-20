<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<?php require_once("inc/title.php"); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Blogger Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
<!--Custom-Theme-files-->
	<link href="css/style.css" rel='stylesheet' type='text/css' />	
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
      <?php require_once("inc/nav.inc.php"); ?>
	<div class="full">
			<?php require_once("inc/menu.inc.php"); ?>
	<div class="col-md-9 main">
	<!-- login-page -->
	<div class="login">
		<div class="login-grids">
			<div class="col-md-6 log">
					 <h3 class="tittle">Login <i class="glyphicon glyphicon-lock"></i></h3>
					 <p>Bienvenu(e), Renseigner tous les champs pour continuer svp.</p>
					 <p>Si vous n'avez pas de compte, Cliqué ici <a href="register.php">click Ici</a></p>
					 <form>
						 <h5>Nom Utilisateur:</h5>	
						 <input type="text" value="">
						 <h5>Mot de Passe:</h5>
						 <input type="password" value="">					
						 <input type="submit" value="Login">
						  
					 </form>
					<a href="#">Mot de Passe oublié ?</a>
			</div>
			<div class="col-md-6 login-right">
					 <h3 class="tittle">Nouveau Compte <i class="glyphicon glyphicon-file"></i></h3>
					<p>Pour creer un nouveau compte , renseigner tous les champs afin de valider votre inscription.</p>
					<a href="register.php" class="hvr-bounce-to-bottom button">Creer un Compte</a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!-- //login-page -->
			<div class="clearfix"> </div>
	<!--/footer-->
	     <?php require_once("inc/footer.inc.php"); ?>
	 <div class="clearfix"> </div>
	</div>
	<div class="clearfix"> </div>
</div>	
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