<?php
$id = $_GET['id'];
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
$sql = $bdd->prepare('UPDATE document SET document.promo = :new_promo WHERE id = "'.$id.'" ');
$sql->execute(array(':new_promo' => $_POST['new_promo']));

    echo '<br/>La promo a bien été modifiée !<br/>Si vous n\'êtes pas redirigé automatiquement au bout de quelques secondes, <a href="../../admin.php/donnees">cliquez ici</a>.';

header('refresh:3;url=../../admin.php/promos');
?>
