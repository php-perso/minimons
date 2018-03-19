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

$guilde = new Board();
$guilde->addTitre("Level");
$guilde->addTitre("Coût (Rûnes)");
$guilde->addTitre("Bonus<br>(Tous les bonus sités des niveaux inférieurs sont compris dans les niveaux supérieurs)");
?>

<!-- QG -->
<h3 id="QG">QG</h3>
<div class="table-responsive">
	<table class="table table-striped table-sm">
		<thead>
			<tr>
				<?php echo $guilde->showTitre(); ?>
			</tr>
		</thead>
		
		<tbody>
<?php 
				$guilde->addRow("0", "0", "15 personnes max dans la guilde");
				$guilde->addRow("1", "10000", "16 personnes max dans la guilde.<br>Débloque la possibilité d'obtenir le level 2 des Mercenaires ainsi que de débloquer la Cantine jusqu'au level 2");
				$guilde->addRow("2", "20000", "17 personnes max dans la guilde.<br>Débloque la possibilité d'obtenir le level 3 des Mercenaires et de la Cantine ainsi que de débloquer le Gladiateur jusqu'au level 3");
				$guilde->addRow("3", "30000", "18 personnes max dans la guilde.<br>Débloque la possibilité d'obtenir le level 4 des Mercenaires, de la Cantine et du Gladiateur ainsi que de débloquer l'Aventurier jusqu'au level 4");
				$guilde->addRow("4", "40000", "19 personnes max dans la guilde.<br>Débloque la possibilité d'obtenir le level 5 des Mercenaires, de la Cantine, du Gladiateur et de l'Aventurier ainsi que de débloquer l'Explorateur jusqu'au level 5");
				echo $guilde->showCorps();
?>
		</tbody>
	</table>
</div>

<!-- Mercenaire -->
<h3 id="Mercenaire">Mercenaire</h3>
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
				<td>7000
</td>
				<td>Level des mercenaires + 5 niveaux, c’est-à-dire que l'on peut prendre des mercenaires avec 5 niveaux de plus que notre niveau actuel
</td>
			</tr>
			<tr>
				<td>2</td>
				<td>7000
</td>
				<td>Aide de commission + 5%<br>(5% moins cher de Louer un mercenaire)<br>Mercenaires engageables dans la Brume : 1
</td>
			</tr>
			<tr>
				<td>3</td>
				<td>14000
</td>
				<td>Commission augmentée + 5%<br>(5% plus d'or en expédiant un mercenaire)
</td>
			</tr>
			<tr>
				<td>4</td>
				<td>...</td>
				<td>Mercenaires engageables dans la Brume : 2
</td>
			</tr>
		</tbody>
	</table>
</div>

<!-- Cantine -->
<h3 id="Cantine">Cantine</h3>
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