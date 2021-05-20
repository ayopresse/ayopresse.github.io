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
      <?php 

      		require_once("inc/nav.inc.php");


       ?>
	<div class="full">

				<?php 
					require_once("inc/menu.inc.php"); 
				?>
	<div class="col-md-9 main">
	<!-- register -->
			<div class="sign-up-form">
				 <h3 class="tittle">Enregistrement <i class="glyphicon glyphicon-file"></i></h3>
					<p>Svp renseigner tous les champs svp</p>
				<div class="sign-up">
					 <h3 class="tittle reg">Informations personnelles <i class="glyphicon glyphicon-user"></i></h3>
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="a">Nom* :</h4>
						</div>
						<div class="sign-up2">
							<form>
								<input type="text" class="text" value="Nom" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nom';}">

							</form>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="b">Prenom* :</h4>
						</div>
						<div class="sign-up2">
							<form>
									<input type="text" class="text" value="prenom" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Prenom';}">

							</form>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="c">Address Email * :</h4>
						</div>
						<div class="sign-up2">
							<form>
								 <input type="text" class="text" value="Address mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address mail';}">

							</form>
						</div>
						<div class="clearfix"> </div>
					</div>
					 <h3 class="tittle reg">Login Information <i class="glyphicon glyphicon-off"></i></h3>
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="d">Mot de passe* :</h4>
						</div>
						<div class="sign-up2">
							<form>
								 <input type="password" class="Password" value="Mot de passe" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mot de passe';}">

							</form>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Confirm Password* :</h4>
						</div>
						<div class="sign-up2">
							<form>
								
											 <input type="password" class="Password" value="Confirme passe" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm passe';}">
	

							</form>
						</div>
						<div class="clearfix"> </div>
					</div>
					<form>
						<input type="submit" value="envoyez">
					</form>
				</div>
			</div>
<!-- //register -->
<!-- //login-page -->
			<div class="clearfix"> </div>
	<!--/footer-->
	      <?php require_once("inc/footer.php"); ?>
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