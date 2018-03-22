<script type="text/javascript">
	function slideTo (amelioration)
	{
		$(document).ready( 	function ()
							{
								$('html,body').animate({scrollTop: $(amelioration).offset().top}, 'slow');
							})
	}
</script>
<h2>Amélioration de guilde</h2>
<?php
$tableau_ameliorations_guilde = array ("QG", "Mercenaire", "Cantine", "Gladiateur", "Aventurier", "Explorateur", "Provisions");

foreach ($tableau_ameliorations_guilde as $amelioration)
{
	echo "<input type='button' value='".$amelioration."' id='button_".$amelioration."' onclick='slideTo(\"#".$amelioration."\")' id='button_".$amelioration."' />";
}

/* -- QG -- */
$qg = new Board("QG");
// Affiche le Nom du tableau
echo $qg->showNom(); 
?>
<div class="table-responsive">
	<table class="table table-striped table-sm">
		<thead>
<?php 
			$qg->addTitre("Level");
			$qg->addTitre("Coût (Rûnes)");
			$qg->addTitre("Bonus<br>(Tous les bonus sités des niveaux inférieurs sont compris dans les niveaux supérieurs)");
			// Affiche le(s) Titre(s) du tableau
			echo $qg->showTitre();
?>
		</thead>
		
		<tbody>
<?php 
			$qg->addRow(array("0", "0", "15 personnes max dans la guilde"));
			$qg->addRow(array("1", "10000", "16 personnes max dans la guilde.<br>Débloque la possibilité d'obtenir le level 2 des Mercenaires ainsi que de débloquer la Cantine jusqu'au level 2"));
			$qg->addRow(array("2", "20000", "17 personnes max dans la guilde.<br>Débloque la possibilité d'obtenir le level 3 des Mercenaires et de la Cantine ainsi que de débloquer le Gladiateur jusqu'au level 3"));
			$qg->addRow(array("3", "30000", "18 personnes max dans la guilde.<br>Débloque la possibilité d'obtenir le level 4 des Mercenaires, de la Cantine et du Gladiateur ainsi que de débloquer l'Aventurier jusqu'au level 4"));
			$qg->addRow(array("4", "40000", "19 personnes max dans la guilde.<br>Débloque la possibilité d'obtenir le level 5 des Mercenaires, de la Cantine, du Gladiateur et de l'Aventurier ainsi que de débloquer l'Explorateur jusqu'au level 5"));
			$qg->addRow(array("5", "...", "..."));
			// Affiche le Corps du tableau
			echo $qg->showCorps();
?>
		</tbody>
	</table>
</div>

<!-- Mercenaire -->
<?php
$mercenaire = new Board("Mercenaire");
// Affiche le Nom du tableau
echo $mercenaire->showNom();
?>
<div class="table-responsive">
	<table class="table table-striped table-sm">
		<thead>
<?php
			$mercenaire->addTitre("Level");
			$mercenaire->addTitre("Coût (Rûnes)");
			$mercenaire->addTitre("Bonus<br>(Tous les bonus sités des niveaux inférieurs sont compris dans les niveaux supérieurs)");
			// Affiche le(s) Titre(s) du tableau
			echo $mercenaire->showTitre();
?>
		</thead>
		
		<tbody>
<?php
			$mercenaire->addRow(array("0", "0", "N/A"));
			$mercenaire->addRow(array("1", "7000", "Level des mercenaires + 5 niveaux, c’est-à-dire que l'on peut prendre des mercenaires avec 5 niveaux de plus que notre niveau actuel"));
			$mercenaire->addRow(array("2", "7000", "Aide de commission + 5% (5% moins cher de Louer un mercenaire)<br>Mercenaires engageables dans la Brume : 1"));
			$mercenaire->addRow(array("3", "14000", "Commission augmentée + 5% (5% plus d'or en expédiant un mercenaire)"));
			$mercenaire->addRow(array("4", "21000", "Mercenaires engageables dans la Brume : 2"));
			$mercenaire->addRow(array("5", "...", "..."));
			// Affiche le Corps du tableau
			echo $mercenaire->showCorps();
?>
		</tbody>
	</table>
</div>

<!-- Cantine -->
<?php
$cantine = new Board("Cantine");
// Affiche le Nom du tableau
echo $cantine->showNom();
?>
<div class="table-responsive">
	<table class="table table-striped table-sm">
		<thead>
<?php
			$cantine->addTitre("Level");
			$cantine->addTitre("Coût (Rûnes)");
			$cantine->addTitre("Bonus<br>(Tous les bonus sités des niveaux inférieurs sont compris dans les niveaux supérieurs)");
			// Affiche le(s) Titre(s) du tableau
			echo $cantine->showTitre();
?>
		</thead>
		
		<tbody>
<?php
			$cantine->addRow(array("0", "0", "20 d'endurances"));
			$cantine->addRow(array("1", "5000", "60 d'endurances"));
			$cantine->addRow(array("2", "5000", "65 d'endurances"));
			$cantine->addRow(array("3", "10000", "70 d'endurances"));
			$cantine->addRow(array("4", "15000", "75 d'endurances"));
			$cantine->addRow(array("5", "...", "80 d'endurances"));
			// Affiche le Corps du tableau
			echo $cantine->showCorps();
?>
		</tbody>
	</table>
</div>

<!-- Gladiateur -->
<?php
$gladiateur = new Board("Gladiateur");
// Affiche le Nom du tableau
echo $gladiateur->showNom();
?>
<div class="table-responsive">
	<table class="table table-striped table-sm">
		<thead>
<?php
			$gladiateur->addTitre("Level");
			$gladiateur->addTitre("Coût (Rûnes)");
			$gladiateur->addTitre("Bonus<br>(Tous les bonus sités des niveaux inférieurs sont compris dans les niveaux supérieurs)");
			// Affiche le(s) Titre(s) du tableau
			echo $gladiateur->showTitre();
?>
		</thead>
		
		<tbody>
<?php
			$gladiateur->addRow(array("0", "0", "N/A"));
			$gladiateur->addRow(array("1", "8000", "Récompense d'arènes +5%"));
			$gladiateur->addRow(array("2", "8000", "Récompense d'arènes augmentée de +10%"));
			$gladiateur->addRow(array("3", "16000", "Récompense d'arènes +10%"));
			$gladiateur->addRow(array("4", "24000", "Récompense d'arènes augmentée de +20%"));
			$gladiateur->addRow(array("5", "...", "..."));
			// Affiche le Corps du tableau
			echo $gladiateur->showCorps();
?>
			</tr>
		</tbody>
	</table>
</div>

<!-- Aventurier -->
<?php
$aventurier = new Board("Aventurier");
// Affiche le Nom du tableau
echo $aventurier->showNom();
?>
<div class="table-responsive">
	<table class="table table-striped table-sm">
		<thead>
<?php
			$aventurier->addTitre("Level");
			$aventurier->addTitre("Coût (Rûnes)");
			$aventurier->addTitre("Bonus<br>(Tous les bonus sités des niveaux inférieurs sont compris dans les niveaux supérieurs)");
			// Affiche le(s) Titre(s) du tableau
			echo $aventurier->showTitre();
?>
		</thead>
		
		<tbody>
<?php
			$aventurier->addRow(array("0", "0", "N/A"));
			$aventurier->addRow(array("1", "9000", "Vitesse de réalisation de Quête augmentée : 3%"));
			$aventurier->addRow(array("2", "9000", "Bonus de Fruits Mystiques : 5%"));
			$aventurier->addRow(array("3", "18000", "Vitesse de réalisation de Quête augmentée : 6%"));
			$aventurier->addRow(array("4", "27000", "Bonus de Fruits Mystiques : 10%"));
			$aventurier->addRow(array("5", "...", "..."));
			// Affiche le Corps du tableau
			echo $aventurier->showCorps();
?>
		</tbody>
	</table>
</div>

<!-- Explorateur -->
<?php
$explorateur = new Board("Explorateur");
// Affiche le Nom du tableau
echo $explorateur->showNom();
?>
<div class="table-responsive">
	<table class="table table-striped table-sm">
		<thead>
<?php
			$explorateur->addTitre("Level");
			$explorateur->addTitre("Coût (Rûnes)");
			$explorateur->addTitre("Bonus<br>(Tous les bonus sités des niveaux inférieurs sont compris dans les niveaux supérieurs)");
			// Affiche le(s) Titre(s) du tableau
			echo $explorateur->showTitre();
?>
		</thead>
		
		<tbody>
<?php
			$explorateur->addRow(array("0", "...", "..."));
			$explorateur->addRow(array("1", "...", "..."));
			$explorateur->addRow(array("2", "...", "..."));
			$explorateur->addRow(array("3", "...", "..."));
			$explorateur->addRow(array("4", "...", "..."));
			$explorateur->addRow(array("5", "...", "..."));
			// Affiche le Corps du tableau
			echo $explorateur->showCorps();
?>
		</tbody>
	</table>
</div>

<!-- Provisions -->
<?php
$provisions = new Board("Provisions");
// Affiche le Nom du tableau
echo $provisions->showNom();
?>
<div class="table-responsive">
	<table class="table table-striped table-sm">
		<thead>
<?php
			$provisions->addTitre("Level");
			$provisions->addTitre("Coût (Rûnes)");
			$provisions->addTitre("Bonus<br>(Tous les bonus sités des niveaux inférieurs sont compris dans les niveaux supérieurs)");
			// Affiche le(s) Titre(s) du tableau
			echo $provisions->showTitre();
?>
		</thead>
		
		<tbody>
<?php
			$provisions->addRow(array("0", "...", "..."));
			$provisions->addRow(array("1", "...", "..."));
			$provisions->addRow(array("2", "...", "..."));
			$provisions->addRow(array("3", "...", "..."));
			$provisions->addRow(array("4", "...", "..."));
			$provisions->addRow(array("5", "...", "..."));
			// Affiche le Corps du tableau
			echo $provisions->showCorps();
?>
		</tbody>
	</table>
</div>