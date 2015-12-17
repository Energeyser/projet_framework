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
        $promo = $_GET['promo'];
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
        $sql = $bdd->prepare('DELETE FROM document WHERE promo = "'.$promo.'" ');
        $sql->execute();

            echo '<br/>La promo a bien été supprimee !<br/>Si vous n\'êtes pas redirigé automatiquement au bout de quelques secondes, <a href="../../admin.php/donnees">cliquez ici</a>.';

        header('refresh:3;url=../../admin.php/promos');
        ?>
    </body>
</html>
