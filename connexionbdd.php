<?php

try{
	$dns_bdd = 'mysql:host=localhost;dbname=Liste_personnes';
	$user_bdd = 'root';
	$pass_bdd = 'root';
	$options = [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	];
	$pdo = new PDO($dns_bdd, $user_bdd, $pass_bdd, $options);
} catch (Exception $e) {
	die('Erreur : ' . $e->getMessage());
}

?>