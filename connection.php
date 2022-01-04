<?php

//Connexion
$mysqli = mysqli_connect('localhost', 'root', '', 'DB_pizzeria');

//Vérification de la connexion
if ($mysqli->connect_errno) {
	printf("Échec de la connexion : %s\n", $mysqli->connect_error);
	exit();
}
