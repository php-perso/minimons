<script type="text/javascript">
	function slideTo (amelioration)
	{
		$(document).ready( 	function ()
							{
								$('html,body').animate({scrollTop: $(amelioration).offset().top}, 'slow');
							})
	}
</script>

<h2>Succès</h2>

<!-- Hauts-faits -->
<?php
$hf = new BoardSucces("Hauts-faits");
// Affiche le Nom du tableau
echo $hf->showNom();
?>
<div class="table-responsive">
	<table class="table table-striped table-sm">
		<thead>
<?php
			$hf->addTitre("A compléter");
			$hf->addTitre("Récompenses");
			// Affiche le(s) Titre(s) du tableau
			echo $hf->showTitre();
?>
		</thead>
		
		<tbody>
<?php
			$hf->addRow(array("Avoir 30 Minimons<br>Avoir 35 Minimons", "?<br>20 Cornes"));
			$hf->addRow(array("Finir : Roi de la Colline", "<div class='btn-group'><span data-toggle='dropdown' id='diamant1'>50 Diamants</span><ul class='dropdown-menu' style='min-width : 250px'><div style='position : inline'><div class='col-lg-3'><img src='diamant.png' /></div><div class='col-lg-9'>Une monnaire légendaire qui vous laisse acheter presque tout</div></ul></div>"));
			$hf->addRow(array("Finir : Roi de la Colline - Elite", "<div class='btn-group'><span data-toggle='dropdown' id='diamant'>50 Diamants</span><ul class='dropdown-menu'><img src='diamant.png' /></ul></div>"));
			$hf->addRow(array("Récupérer 250 étoiles<br>Récupérer 300 étoiles", "?<br>20 Cornes"));
			$hf->addRow(array("Gagner 50000 points d'Outreterre en un défi<br>Gagner 100000 points d'Outreterre en un défi<br>Gagner 150000 points d'Outreterre en un défi", "300 Pièces d'Outreterre<br>500 Pièces d'Outreterre<br>800 Pièces d'Outreterre"));
			$hf->addRow(array("Gagnez une commission de 20000000 Jade<br>Gagnez une commission de 50000000 Jade", "25 Pièces de Jade<br>30 Pièces de Jade"));
			$hf->addRow(array("Utiliser l'Alchimir 50 fois<br>Utiliser l'Alchimir 100 fois<br>Utiliser l'Alchimir 200 fois", "?<br>30 Pièces de Jade<br>35 Pièces de Jade"));
			$hf->addRow(array("Compléter 1000 quêtes d'Expédition<br>Compléter 2000 quêtes d'Expédition<br>Compléter 5000 quêtes d'Expédition", "200 Fruits Mystique<br>250 Fruits Mystique<br>300 Fruits Mystique"));
			$hf->addRow(array("Utiliser 500 Pierres de Sprint<br>Utiliser 1000 Pierres de Sprint<br>Utiliser 2000 Pierres de Sprint<br>Utiliser 5000 Pierres de Sprint", "?<br>80 Pierres de Sprint<br>100 Pierres de Sprint<br>150 Pierres de Sprint"));
			$hf->addRow(array("Trouver 1000 trésors de Brume<br>Trouver 2000 trésors de Brume<br>Trouver 5000 trésors de Brume", "?<br>1800 Pièces de Brume<br>2000 Pièces de Brume"));
			$hf->addRow(array("Dépenser 20000 Diamants<br>Dépenser 50000 Diamants", "10  Charmes de magasin<br>15 Charmes de magasin"));
			$hf->addRow(array("Dépenser 50000 d'Endurance<br>Dépenser 100000 d'Endurance", "40 Potions<br>45 Potions"));
			$hf->addRow(array("Combattre 300 fois dans l'arène<br>Combattre 500 fois dans l'arène", "1000 Pièces d'arène<br>1200 Pièces d'arène"));
			$hf->addRow(array("Gagner 100 batailles dans l'arène<br>Gagner 150 batailles dans l'arène", "1000 Pièces d'arène<br>1200 Pièces d'arène"));
			$hf->addRow(array("Améliorer une compétence 2000 fois<br>Améliorer une compétence 5000 fois", "20 Cornes<br>20 Cornes"));
			$hf->addRow(array("Monter un talent en niveau 500 fois<br>Monter un talent en niveau 1000 fois", "200 Fruits Mystique<br>250 Fruits Mystique"));
			$hf->addRow(array("Ouvrir 800 œufs communs<br>Ouvrir 1500 oeufs communs", "30 Lentin du Chêne<br>10 Matsutake"));
			$hf->addRow(array("Ouvrir 150 œufs rares", "25 Cornes"));
			$hf->addRow(array("Finir 500 exercices dans le camp d'exercice<br>Finir 1000 exercices dans le camp d'exercice<br>Finir 1500 exercices dans le camp d'entrainement", "?<br>50 Potions<br>55 Potions"));
			$hf->addRow(array("Défier l'Outreterre 300 fois<br>Défier l'Outreterre 600 fois", "1200 Pièces d'Outreterre<br>1500 Pièces d'Outreterre"));
			$hf->addRow(array("Finir 80 objectifs de la Campagne<br>Finir 100 objectifs de la Campagne", "?<br>30 Potions"));
			$hf->addRow(array("Dépenser 80000 de Magicka<br>Dépenser 120000 de Magicka<br>Dépenser 180000 de Magicka<br>Dépenser 250000 de Magicka", "?<br>500 Magicka<br>600 Magicka<br>700 Magicka"));
			$hf->addRow(array("Avoir 1 Minimon 5 étoiles<br>Avoir 2 Minimons 5 étoiles<br>Avoir 5 Minimons 5 étoiles<br>Avoir 8 Minimons 5 étoiles<br>Avoir 10 Minimons 5 étoiles<br>Avoir 15 Minimons 5 étoiles", "?<br>?<br>5 Potions<br>5 Potions<br>5 Potions<br>5 Potions"));
			$hf->addRow(array("Atteindre le niveau de Tribu 70<br>Atteindre le niveau de Tribu 75<br>Atteindre le niveau de Tribu 80", "?<br>150 Diamants<br>150 Diamants"));
			// Affiche le Corps du tableau
			echo $hf->showCorps();
?>
		</tbody>
	</table>
</div>
<script>
  $('#diamant1').mouseover(function() {
    $(this).dropdown('toggle');
  });
  $('#diamant1').mouseout(function() {
    $(this).dropdown('toggle');
  });
</script>