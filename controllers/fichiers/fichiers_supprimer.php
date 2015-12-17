<?php
$fichier = $_GET['fichier'];
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
$sql = $bdd->prepare('DELETE FROM document WHERE fichier = "'.$fichier.'" ');
$sql->execute();

    echo '<br/>Le fichier a bien été supprimé !<br/>Si vous n\'êtes pas redirigé automatiquement au bout de quelques secondes, <a href="../../admin.php/donnees">cliquez ici</a>.';

header('refresh:3;url=../../admin.php/fichiers');
?>
