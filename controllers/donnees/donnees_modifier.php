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
$sql = $bdd->prepare('UPDATE data SET data.identifiant = :new_id, data.nom_fils = :new_nom, data.prenom_fils = :new_prenom, data.ddn_fils = :new_ddn, data.tel_mobile = :new_mobile, data.courriel = :new_mail WHERE id = "'.$id.'" ');
$sql->execute(array(':new_id' => $_POST['new_identifiant'], ':new_nom' => $_POST['new_nom'], ':new_prenom' => $_POST['new_prenom'], ':new_ddn' => $_POST['new_ddn'], ':new_mobile' => $_POST['new_mobile'], ':new_mail' => $_POST['new_mail']));

    echo '<br/>Les données ont bien été modifiées !<br/>Si vous n\'êtes pas redirigé automatiquement au bout de quelques secondes, <a href="../../admin.php/donnees">cliquez ici</a>.';

header('refresh:3;url=../../admin.php/donnees');
?>
