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
			$mercenaire->addRow(array("2", "7000", "Aide de commission + 5%<br>(5% moins cher de Louer un mercenaire)<br>Mercenaires engageables dans la Brume : 1"));
			$mercenaire->addRow(array("3", "14000", "Commission augmentée + 5%<br>(5% plus d'or en expédiant un mercenaire)"));
			$mercenaire->addRow(array("4", "...", "Mercenaires engageables dans la Brume : 2"));
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
			<tr>
				<td>0</td>
				<td>0</td>
				<td>20 d'endurances
</td>
			</tr>
			<tr>
				<td>1</td>
				<td>5000
</td>
				<td>60 d'endurances
</td>
			</tr>
			<tr>
				<td>2</td>
				<td>5000
</td>
				<td>65 d'endurances
</td>
			</tr>
			<tr>
				<td>3</td>
				<td>10000
</td>
				<td>70 d'endurances
</td>
			</tr>
			<tr>
				<td>4</td>
				<td>...</td>
				<td>75 d'endurances
</td>
			</tr>
		</tbody>
	</table>
</div>

<!-- Gladiateur -->
<h3 id="Gladiateur">Gladiateur</h3>
<div class="table-responsive">
	<table class="table table-striped table-sm">
		<thead>
			<tr>
				<th>Level</th>
				<th>Coût (Rûnes)</th>
				<th>Bonus<br>(Tous les bonus sités des niveaux inférieurs sont compris dans les niveaux supérieurs)</th>
			</tr>
		</thead>
		
		<tbody>
			<tr>
				<td>0</td>
				<td>0</td>
				<td>N/A
</td>
			</tr>
			<tr>
				<td>1</td>
				<td>10000</td>
				<td>Récompense d'arènes +5%
</td>
			</tr>
			<tr>
				<td>2</td>
				<td>20000</td>
				<td>Récompense d'arènes augmentée de +10%
</td>
			</tr>
			<tr>
				<td>3</td>
				<td>30000</td>
				<td>Récompense d'arènes +10%
</td>
			</tr>
			<tr>
				<td>4</td>
				<td>...</td>
				<td>Récompense d'arènes augmentée de +20%
</td>
			</tr>
		</tbody>
	</table>
</div>

<!-- Aventurier -->
<h3 id="Aventurier">Aventurier</h3>
<div class="table-responsive">
	<table class="table table-striped table-sm">
		<thead>
			<tr>
				<th>Level</th>
				<th>Coût (Rûnes)</th>
				<th>Bonus<br>(Tous les bonus sités des niveaux inférieurs sont compris dans les niveaux supérieurs)</th>
			</tr>
		</thead>
		
		<tbody>
			<tr>
				<td>0</td>
				<td>0</td>
				<td>...</td>
			</tr>
			<tr>
				<td>1</td>
				<td>...</td>
				<td>...</td>
			</tr>
			<tr>
				<td>2</td>
				<td>...</td>
				<td>...</td>
			</tr>
			<tr>
				<td>3</td>
				<td>...</td>
				<td>...</td>
			</tr>
			<tr>
				<td>4</td>
				<td>...</td>
				<td>...</td>
			</tr>
		</tbody>
	</table>
</div>

<!-- Explorateur -->
<h3 id="Explorateur">Explorateur</h3>
<div class="table-responsive">
	<table class="table table-striped table-sm">
		<thead>
			<tr>
				<th>Level</th>
				<th>Coût (Rûnes)</th>
				<th>Bonus<br>(Tous les bonus sités des niveaux inférieurs sont compris dans les niveaux supérieurs)</th>
			</tr>
		</thead>
		
		<tbody>
			<tr>
				<td>0</td>
				<td>0</td>
				<td>...</td>
			</tr>
			<tr>
				<td>1</td>
				<td>...</td>
				<td>...</td>
			</tr>
			<tr>
				<td>2</td>
				<td>...</td>
				<td>...</td>
			</tr>
			<tr>
				<td>3</td>
				<td>...</td>
				<td>...</td>
			</tr>
			<tr>
				<td>4</td>
				<td>...</td>
				<td>...</td>
			</tr>
		</tbody>
	</table>
</div>

<!-- Provisions -->
<h3 id="Provisions">Provisions</h3>
<div class="table-responsive">
	<table class="table table-striped table-sm">
		<thead>
			<tr>
				<th>Level</th>
				<th>Coût (Rûnes)</th>
				<th>Bonus<br>(Tous les bonus sités des niveaux inférieurs sont compris dans les niveaux supérieurs)</th>
			</tr>
		</thead>
		
		<tbody>
			<tr>
				<td>0</td>
				<td>0</td>
				<td>...</td>
			</tr>
			<tr>
				<td>1</td>
				<td>...</td>
				<td>...</td>
			</tr>
			<tr>
				<td>2</td>
				<td>...</td>
				<td>...</td>
			</tr>
			<tr>
				<td>3</td>
				<td>...</td>
				<td>...</td>
			</tr>
			<tr>
				<td>4</td>
				<td>...</td>
				<td>...</td>
			</tr>
		</tbody>
	</table>
</div>