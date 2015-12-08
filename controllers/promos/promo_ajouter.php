
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

// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['fichier']) AND $_FILES['fichier']['error'] == 0)
{
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['fichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png', 'pdf');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['fichier']['tmp_name'], '../uploads/' . basename($_FILES['fichier']['name']));
                        echo "L'envoi a bien été effectué !";
                }
}

//insertion des valeurs dans la base de données
$req = $bdd->prepare('INSERT INTO document(rang, promo, libelle, fichier) VALUES(:rang, :promo, :libelle, :fichier)');
$req->execute(array(
	'rang' => '0',
	'promo' => $_POST['promo'],
	'libelle' => $_POST['libelle'],
    'fichier' => $_FILES['fichier']['name']
	));


    echo '<br/>La promo a bien été ajoutée !<br/>La page sera actualisée automatiquement dans 3 secondes.';

header('refresh:3;url=../../admin.php/promos');
?>
