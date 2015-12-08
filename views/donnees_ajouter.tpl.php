<?php content_for('main'); ?>
    <h1>Données</h1></br>
    <form class="ajout_donnees" action="donnees_ajouter.php" method="post">
        <h2 class="ajout-donnees-heading">Ajouter des données</h2>
        <label for="inputId" class="sr-only">Identifiant</label><br/>
        <input type="text" id="identifiant" name="identifiant" class="form-control" required autofocus>
        <label for="inputNom" class="sr-only">Nom de l'étudiant(e) :</label><br/>
        <input type="password" id="nom_fils" name="nom_fils" class="form-control" required>
        <label for="inputNom" class="sr-only">Nom de l'étudiant(e) :</label><br/>
        <input type="password" id="nom_fils" name="nom_fils" class="form-control" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ajouter</button>
      </form>

        <a href="../admin.php"><button type="button" class="btn btn-lg btn-default">Retour</button></a>
<?php end_content_for(); ?>
