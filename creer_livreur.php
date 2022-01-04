<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>creer_livreur.php</title>
	<link rel="stylesheet" href="./css/spectre.min.css" />
	<link rel="stylesheet" href="./css/style.css" />
</head>

<body class=container>
	<?php

	require './connection.php';

	$nom = $_POST["nom"];
	$age = $_POST["age"];

	$query = "INSERT INTO livreurs (nom, age) VALUES ('$nom', '$age')";

	if (mysqli_query($mysqli, $query)) {
		echo "DONE <br>";
		echo $query . "<br>";
		printf(mysqli_affected_rows($mysqli) . " ligne(s) affectées (INSERT)\n");
	} else {
		echo mysqli_error($mysqli);
	}
	?>

	<br>
	<br>
	<a href="./creer_livreur.html">creer_livreur.html</a>
</body>

</html>