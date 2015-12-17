<!--fichier template pour l'affichage du panneau principal demodification des donnees-->
<?php content_for('main');
//recuperation de l'id des données  modifier
$id = $_GET['id'];
//recupération des données concernant les données depuis la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=rentree;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM data WHERE id = "'.$id.'"');
    $donnees = $reponse->fetch();
} catch(Exception $e) {
    die('Erreur: '.$e->getMessage());
}
?>
<h1>Données</h1></br>

<!--Formulaire permettant àl'utilisateur d'entrer les nouvelles valeurs des données-->
<form class="modifier_donnees" action="../controllers/donnees/donnees_modifier.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
            <h2>Modification des données : </h2>
            <label for="inputIdentifiant" class="sr-only">Identifiant : </label>
            <input type="text" id="new_identifiant" name="new_identifiant" class="form-control" placeholder="<?php  echo $donnees['identifiant'] ?>" required autofocus><br/>
            <label for="inputNom" class="sr-only">Nom de l'élève : </label>
            <input type="text" id="new_nom" name="new_nom" class="form-control" placeholder="<?php echo $donnees['nom_fils'] ?>" required><br/>
            <label for="inputPrenom" class="sr-only">Prenom de l'élève : </label>
            <input type="text" id="new_prenom" name="new_prenom" class="form-control" placeholder="<?php echo $donnees['prenom_fils'] ?>" required><br/>
            <label for="inputDdn" class="sr-only">Date de naissance de l'élève : </label>
            <input type="text" id="new_ddn" name="new_ddn" class="form-control" placeholder="<?php echo $donnees['ddn_fils'] ?>" required><br/>
            <label for="inputMobile" class="sr-only">Numero de téléphone : </label>
            <input type="text" id="new_mobile" name="new_mobile" class="form-control" placeholder="<?php echo $donnees['tel_mobile'] ?>" required><br/>
            <label for="inputMail" class="sr-only">Adresse mail : </label>
            <input type="text" id="new_mail" name="new_mail" class="form-control" placeholder="<?php echo $donnees['courriel'] ?>" required><br/>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Modifier</button>
        </form>
        <a href="../admin.php/donnees"><button type="button" class="btn btn-retour">Retour</button></a>
<?php end_content_for(); ?>
