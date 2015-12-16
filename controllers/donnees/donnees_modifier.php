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
$sql = $bdd->prepare('MERGE INTO data USING data WHEN MATCHED THEN UPDATE SET data.identifiant = "'.$POST['new_identifiant'].'" ');
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

mysql_close();

    echo '<br/>La promo a bien été ajoutée !<br/>Si vous n\'êtes pas redirigé automatiquement au bout de quelques secondes, <a href="../../admin.php/promos">cliquez ici</a>.';

header('refresh:3;url=../../admin.php/promos');
?>
