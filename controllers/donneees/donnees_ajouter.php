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
$req = $bdd->prepare('INSERT INTO data(identifiant, nom_fils, prenom_fils, ddn_fils, tel_mobile, courriel, date, ip) VALUES(:identifiant, :nom_fils, :prenom_fils, :ddn_fils, :tel_mobile, :courriel, :date, :ip)');
$req->execute(array(
	'identifiant' => $identifiant,
	'nom_fils' => $nom_fils,
	'prenom_fils' => $prenom_fils,
	'ddn_fils' => $ddn-fils,
	'tel_mobile' => $tel_mobile,
	'courriel' => $courriel,
    'date' => $date,
    'ip' => $ip
	));

echo 'Les données ont bien été ajoutées !';
?>
