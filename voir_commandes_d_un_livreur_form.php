<?php

require './connection.php';

$query = "SELECT idLivreurs, nom FROM livreurs";

$result = mysqli_query($mysqli, $query);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>voir_commandes_d_un_livreur.html</title>
	<link rel="stylesheet" href="./css/spectre.min.css" />
	<link rel="stylesheet" href="./css/style.css" />
	<style></style>
</head>

<body class="container">
	<h1>Voir la commande d'un livreur</h1>
	<form action="voir_commandes_d_un_livreur.php" method="GET" class="pure-form">
		<fieldset name="Choix du numéro du livreur">
			<select name="numLivreur" id="numLivreur" class="form-select col-3">
				<?php
				while ($row = mysqli_fetch_assoc($result)) {
					echo '<option value="' . $row["idLivreurs"] . '">Livreur n°' . $row["idLivreurs"] . ' (' . $row["nom"] . ')</option>';
				}
				?>
			</select>

			<button class="btn btn-primary" type="submit">Voir</button>
		</fieldset>
	</form>
</body>

</html>