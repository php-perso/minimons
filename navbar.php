<script type="text/javascript">
	function choixPage(nomLien)
	{
		$("#hiddenPage").val(nomLien);
		$("#formPage").submit();
	}
</script>

<?php
// Tableau à remplir en fonction des onglets voulus dans la section Jeux
$tableauJeux_onglets = array ("guilde" => "Guilde", "outreterre" => "Outreterre", "iledebrume" => "Ile de la Brume", "entrainement" => "Camp d'entrainement", "succes" =>"Succès");
// Tableau à remplir en fonction des onglets voulus dans la section Conseils
$tableauConseils_onglet = array ("conseils" => "Conseils");

// Permet de créer tout le contenu du navbar
function create_navbar ($titre, $onglets)
{
	if (empty($titre) || empty($onglets))
		return null;
	// Titre
	$variableText = '<h6>'.$titre.'</h6>';
	// Crée les onglets du navbar pour la section Jeux
	foreach ($onglets as $lien => $onglet)
	{
		$variableText .= create_onglet ($onglet, $lien);
	}
	echo $variableText;
}

// Fonction créant les onglets
function create_onglet ($nom_onglet, $lien_onglet)
{
	$variableTempo = '<ul class="nav flex-column onglets" onclick="choixPage(\''.$lien_onglet.'\')"><li class="nav-item"><span data-feather="home"></span>';
	$variableTempo .= $nom_onglet;
	$variableTempo .= '</li></ul>';
	
	return $variableTempo;
}
?>
   
<!-- Navbar -->
<nav class="col-md-3 col-lg-2 d-none d-md-block bg-light sidebar">
	<div class="sidebar-sticky col-md-3 col-lg-2">
		<p style="text-align : center;">
			<img src="logo_minimons.png" title="logo" alt="Adventure of Minimons" width="85%" height="85%" onclick="choixPage('accueil')" />
		</p>		
<?php
		// Permet de créer tout le corps du navbar
		create_navbar ("Jeux", $tableauJeux_onglets);
		create_navbar ("Conseils", $tableauConseils_onglet);
?>
	</div>
</nav>

<nav class="navbar navbar-inverse navbar-fixed-top topbar">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<img src="logo_minimons.png" width="100px" height="50px" alt="Adventure of Minimons" title="logo" onclick="choixPage('accueil')" />
		</div>
		<div id="navbar" class="navbar-collapse collapse">
<?php
			// Permet de créer tout le corps du navbar
			create_navbar ("Jeux", $tableauJeux_onglets);
			create_navbar ("Conseils", $tableauConseils_onglet);
?>
		</div>
</nav>

