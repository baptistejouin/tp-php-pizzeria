<?php

require './connection.php';

$ID_LIVREUR = $_GET["numLivreur"];
$query = "SELECT livreurs.nom AS 'nomLivreur', livreurs.idLivreurs AS 'numLivreur' FROM livreurs INNER JOIN commandes ON commandes.livreurs_idLivreurs = livreurs.idLivreurs WHERE livreurs.idLivreurs = $ID_LIVREUR";

$result = mysqli_query($mysqli, $query);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>voir_livreur.php</title>
	<link rel="stylesheet" href="./css/spectre.min.css" />
	<link rel="stylesheet" href="./css/style.css" />
</head>

<body class=container>
	<?php

	if ($result) {
		$rowcount = mysqli_num_rows($result);
		if ($rowcount < 1) {
			echo "<h1>Le livreur n'a aucune commande.</h1><p>Rien à afficher pour le moment.</p>";
			die();
		}
	}

	$rows = mysqli_fetch_assoc($result);
	?>

	<h1>Commandes livrées par le livreur n° <?php echo $rows["numLivreur"];
											echo " (" . $rows["nomLivreur"] . ") " ?></h1>
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Idcommande</th>
				<th>Prix</th>
				<th>Client</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$query = "SELECT commandes.idcommandes, commandes.prix, CONCAT(clients.prenom, ' ', clients.nom) AS 'nomClient' FROM livreurs INNER JOIN commandes ON commandes.livreurs_idLivreurs = livreurs.idLivreurs INNER JOIN clients ON commandes.clients_idclients = clients.idclients WHERE livreurs.idLivreurs = $ID_LIVREUR";

			$result = mysqli_query($mysqli, $query);
			while ($rows = mysqli_fetch_assoc($result)) {
				echo '<tr><td>' . $rows["idcommandes"] . '</td><td>' . $rows["prix"] . '</td><td>' . $rows["nomClient"] . '</td></tr>';
			}
			?>
		</tbody>
	</table>
</body>

</html>