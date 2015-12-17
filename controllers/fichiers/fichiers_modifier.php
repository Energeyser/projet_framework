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
    // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
    if (isset($_FILES['new_fichier']) AND $_FILES['new_fichier']['error'] == 0)
    {
                    // Testons si l'extension est autorisée
                    $infosfichier = pathinfo($_FILES['new_fichier']['name']);
                    $extension_upload = $infosfichier['extension'];
                    $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png', 'pdf');
                    if (in_array($extension_upload, $extensions_autorisees))
                    {
                            // On peut valider le fichier et le stocker définitivement
                            move_uploaded_file($_FILES['new_fichier']['tmp_name'], '../uploads/' . basename($_FILES['new_fichier']['name']));
                    }
    }



    //insertion des valeurs dans la base de données
    $sql = $bdd->prepare('UPDATE document SET document.libelle = :new_libelle, document.fichier = :new_fichier, document.promo = :new_promo WHERE fichier = "'.$fichier.'" ');
    $sql->execute(array(':new_libelle' => $_POST['new_libelle'], ':new_fichier' => $_FILES['new_fichier']['name'], ':new_promo' => $_POST['new_promo']));

        echo '<br/>Le fichier a bien été modifiée !<br/>Si vous n\'êtes pas redirigé automatiquement au bout de quelques secondes, <a href="../../admin.php/fichiers">cliquez ici</a>.';

    header('refresh:3;url=../../admin.php/fichiers');
?>
