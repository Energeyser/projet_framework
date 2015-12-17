<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Administration ISEN - Connexion</title>

    <!-- Bootstrap core CSS -->
    <link href="./lib/bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/style.css" rel="stylesheet">

    <!-- Integration de JQuery -->
    <script src="./lib/jquery-2.1.4.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
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
    </body>
</html>
