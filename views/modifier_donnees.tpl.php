<?php content_for('main'); ?>
    <h1>Données</h1></br>
    <?php
    $id = $_GET['id'];
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=rentree;charset=utf8', 'root', '');
        $reponse = $bdd->query('SELECT * FROM data WHERE id = "'.$id.'"');

    } catch(Exception $e) {
        die('Erreur: '.$e->getMessage());
    }
    ?>
    <?php $donnees = $reponse->fetch(); ?>
    <form class="modifier_donnees" action="../controllers/donnees/donnees_modifier.php" method="post" enctype="multipart/form-data">
        <h2>Modification des données : </h2>
        <label for="inputIdentifiant" class="sr-only">Identifiant : </label>
        <input type="text" id="new_identifiant" name="new_identifiant" class="form-control" placeholder="<?php  echo $donnees['identifiant'] ?>" required autofocus><br/>
        <label for="inputNom" class="sr-only">Nom de l'élève : </label>
        <input type="text" id="new_nom" name="new_nom" class="form-control" placeholder="<?php echo $donnees['nom_fils'] ?>"><br/>
        <label for="inputPrenom" class="sr-only">Prenom de l'élève : </label>
        <input type="text" id="new_prenom" name="new_prenom" class="form-control" placeholder="<?php echo $donnees['prenom_fils'] ?>"><br/>
        <label for="inputDdn" class="sr-only">Date de naissance de l'élève : </label>
        <input type="text" id="new_ddn" name="new_ddn" class="form-control" placeholder="<?php echo $donnees['ddn_fils'] ?>"><br/>
        <label for="inputMobile" class="sr-only">Numero de téléphone : </label>
        <input type="text" id="new_mobile" name="new_mobile" class="form-control" placeholder="<?php echo $donnees['tel_mobile'] ?>"><br/>
        <label for="inputMail" class="sr-only">Adresse mail : </label>
        <input type="text" id="new_mail" name="new_mail" class="form-control" placeholder="<?php echo $donnees['courriel'] ?>"><br/>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Modifier</button>
    </form>
    <a href="../admin.php"><button type="button" class="btn btn-lg btn-default">Retour</button></a>
<?php end_content_for(); ?>
