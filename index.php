<?php
// Déclaration des class
require "board.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<!-- Début du head -->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>	<!-- Définit le type de caractères utilisés -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/> 					<!-- Rend IE compatible -->
		<meta name="viewport" content="width=device-width, initial-scale=1"/>	<!-- Permet de définir la taille de l'affichage du site au début -->
		<meta name="description" content="Tableaux Minimons"/>					<!-- Description du site -->
		<meta name="author" content="Michael PARIS"/>							<!-- Nom du développeur -->

		<!-- Je localise l'emplacement de mon fichier Bootstrap nécessaire à l'utilisation des différentes classes -->
		<link href="dist/css/bootstrap.css" rel="stylesheet"/>		<!-- Appel de Bootstrap -->
		<!-- Les différentes pages de styles pour gérer l'affichage de la page -->
		<link href="dashboard.css" rel="stylesheet"/>			<!-- Appel du styles pour l'index -->
		
		<!-- Logo dans l'onglet -->
		<link rel="shortcut icon" type="image/x-icon" href="logo_minimons.png" />
		
		<script type="text/javascript" src="jquery/jquery3.3.1.min.js"></script>
		
		<!-- Résolu -->
		<script type="text/javascript" src="dist/js/jquery.min.js"></script>

		<!-- Titre du site -->
		<title>Minimons</title>
	</head>
	<!-- Fin du Head -->
<?php
if (isset($_POST['page']))
	$variable = $_POST['page'].".php";
else
	$variable = "accueil.php";
?>
	<!-- Début du Body -->
	<body>
		<!-- Un container à la BootStrap mais avec toute la largeur de l'écran -->
		<div class="container-fluid">
			<div class="row">
<?php
				// Appel du navbar
				include_once "navbar.php";
?>
				<!-- La partie à droite du navbar (page principale) -->
				<main role="main" class="col-lg-10 col-md-9 responseNavbar">
					<div id="resultat">
						<!-- Nous allons afficher un retour en jQuery au visiteur -->
					</div>
					<form method="post" action="index.php" id="formPage">
						<input type="hidden" value="" name="page" id="hiddenPage" />
<?php
						if (!empty($variable))
							include_once $variable;
?>
					</form>
				</main>
			</div>
		</div>
		
		<!-- Bootstrap core JavaScript -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="dist/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="assets/js/ie10-viewport-bug-workaround.js"></script>

	</body>
</html>