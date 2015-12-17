<!--fichier template pour l'affichage du panneau principal de l'ajout des promos-->
<?php content_for('main'); ?>
<h1>Données</h1></br>
<!-- formulaire demendant d'entrer le nom de la promo à créer qui renvoie vers le traintement dans le fichier promo_ajouter.php-->
<form class="ajout_promo" action="../controllers/promos/promo_ajouter.php" method="post" enctype="multipart/form-data">
    <h2 class="ajout-donnees-heading">Ajouter une promo</h2>
    <label for="inputPromo" class="sr-only">Promo</label>
    <input type="text" id="promo" name="promo" class="form-control" required autofocus><br/>
    <button class="btn btn-lg btn-primary btn-ajouter" type="submit">Ajouter</button>
</form>

<a href="../admin.php/promos"><button type="button" class="btn btn-lg btn-retour">Retour</button></a>

<?php end_content_for(); ?>
