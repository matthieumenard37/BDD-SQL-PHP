<?php

require_once 'connexionbdd.php';

$req = $pdo->prepare('INSERT INTO personnes(prenom, nom, age)
VALUES (:nom, :prenom, :age)');
$req->execute([
	'prenom' => $_POST['prenom'],
	'nom' => $_POST['nom'],
	'age' => $_POST['age']
]);

$result = $pdo->query('SELECT * FROM personnes');

echo '<pre>';
var_dump($result->fetchALL(PDO::FETCH_ASSOC));
echo '</pre>';

header('Location:form.html');

