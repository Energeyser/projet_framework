<?php content_for('main'); ?>
    <h1>Données</h1></br>
    <form class="ajout_promo" action="../controllers/promos/promo_ajouter.php" method="post" enctype="multipart/form-data">
        <h2 class="ajout-donnees-heading">Ajouter une promo</h2>
        <label for="inputPromo" class="sr-only">Promo</label>
        <input type="text" id="promo" name="promo" class="form-control" required autofocus><br/>
        <label for="inputLibelle" class="sr-only">Libellé :</label>
        <input type="text" id="libelle" name="libelle" class="form-control" required><br/>
        <label for="inputFichier" class="sr-only">Fichier :</label>
        <input type="file" id="fichier" name="fichier" class="form-control" required><br/>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ajouter</button>
      </form>

        <a href="../admin.php"><button type="button" class="btn btn-lg btn-default">Retour</button></a>
<?php end_content_for(); ?>
