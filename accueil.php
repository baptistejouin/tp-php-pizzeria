<?php
$nom_pizzeria = "Hellopizza";
$ville = "Blois";
$responsable = "M. Deniau";
$email = "deniau@hellopizza.fr";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Accueil</title>
	<link rel="stylesheet" href="./css/spectre.min.css" />
	<link rel="stylesheet" href="./css/style.css" />
</head>

<body class="container">
	<h1><?php echo "Pizzeria " . $nom_pizzeria; ?></h1>
	<h2></h2>
	<ul>
		<li><?php echo "Ville " . $nom_pizzeria; ?></li>
		<li><?php echo "Responsable " . $ville; ?></li>
		<li><?php echo "Email " . $email; ?></li>
	</ul>
</body>

</html>