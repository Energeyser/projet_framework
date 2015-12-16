<?php
//connection à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=rentree;charset=utf8', 'rentree', 'rentree');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}



//insertion des valeurs dans la base de données
$sql = $bdd->prepare('MERGE INTO data USING data WHEN NOT MATCHED THEN UPDATE SET data.identifiant = :new_id ');
$sql->execute(array(':new_id' => $_POST['new_identifiant']));

    echo '<br/>Les données ont bien été modifiées !<br/>Si vous n\'êtes pas redirigé automatiquement au bout de quelques secondes, <a href="../../admin.php/donnees">cliquez ici</a>.';

header('refresh:3;url=../../admin.php/donnees');
?>
