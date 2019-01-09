<?php

	require_once 'connexionbdd.php';

	if (!empty($_POST)){

		$req = $pdo->prepare('
			UPDATE personnes 
			SET prenom =:prenom, nom =:nom , age =:age  
			WHERE id=:id
			');
		$req->execute([
			'prenom' => $_POST['prenom'],
			'nom' => $_POST['nom'],
			'age' => $_POST['age'],
			'id' => $_POST['id']
			]);
		header('Location:affichage.php');
	}
	else{
		$result = $pdo->prepare('
			SELECT * FROM personnes
			WHERE id=:id
			');

		$result->execute([
			'id' => $_GET['id']
		]);
	}

	$donnees = $result->fetch(PDO::FETCH_ASSOC);
?>

	<form method="post" action="modifierinfospersonne.php" name="Formulaire">
				<p id="test"></p>
				<input type="hidden" id="id" name="id" value="<?=$donnees['id']?>">
				<input type="text" id="firstname" name="prenom" value="<?=$donnees['prenom']?>"/><br/>
				<input type="text" id="lastname" name="nom" value="<?=$donnees['nom']?>"/><br/>
				<input type="number" id="age" name="age" value="<?=$donnees['age']?>"/><br/>
				<input type="submit" value="Modifier" />
	</form>
