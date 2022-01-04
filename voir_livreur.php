<?php


require './connection.php';
$query = "SELECT * FROM livreurs";

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
	<h1>Voir les livreurs</h1>
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nom</th>
				<th>Age</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while ($row = mysqli_fetch_assoc($result)) {
				echo '<tr><td>' . $row["idLivreurs"] . '</td><td>' . $row["nom"] . '</td><td>' . $row["age"] . '</td></tr>';
			}
			?>
		</tbody>
	</table>
</body>

</html>