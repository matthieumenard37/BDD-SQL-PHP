<?php

	require_once 'connexionbdd.php';

	$req = $pdo->prepare('
		DELETE FROM personnes   
		WHERE id=:id
	');
	$req->execute([
		'id' => $_GET['id']
	]);

	header('Location:affichage.php');
