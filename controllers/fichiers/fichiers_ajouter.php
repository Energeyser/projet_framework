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

?>
