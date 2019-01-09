<?php

require_once 'connexionbdd.php';

$result = $pdo->query('SELECT * FROM personnes');
while ($donnees = $result->fetch())
{
    $prenom = $donnees['nom'];
    $nom = $donnees['prenom'];
    $age = $donnees['age'];    
    $id = $donnees['id'];
?>
    <a href="modifierinfospersonne.php?id=<?=$donnees['id']?>">Modifier</a>

<?php
    echo  $prenom.' '.$nom.' '.$age;
?>
	<a href="delete.php?id=<?=$donnees['id']?>">Supprimer</a><br/>
<?php
}
	



//var_dump($result->fetchAll());
