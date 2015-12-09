
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
$req = $bdd->prepare('INSERT INTO document(rang, promo, libelle, fichier) VALUES(:rang, :promo, :libelle, :fichier)');
$req->execute(array(
	'rang' => '0',
	'promo' => $_POST['promo'],
	'libelle' => ' ',
    'fichier' => ' '
	));


    echo '<br/>La promo a bien été ajoutée !<br/>Si vous n\'êtes pas redirigé automatiquement au bout de quelques secondes, <a href="../../admin.php/promos">cliquez ici</a>.';

header('refresh:3;url=../../admin.php/promos');
?>
