<?php content_for('main'); ?>
    <h1>Promos</h1></br>
    <?php
    $id = $_GET['id'];
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=rentree;charset=utf8', 'root', '');
        $reponse = $bdd->query('SELECT promo FROM document WHERE id = "'.$id.'"');
    ?>
    <?php $documents = $reponse->fetch(); ?>
    <form class="modifier_promos" action="../controllers/donnees/donnees_modifier.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
        <h2>Modification des données : </h2>
        <label for="inputPromo" class="sr-only">Nom de la promo : </label>
        <input type="text" id="new_promo" name="new_promo" class="form-control" placeholder="<?php  echo $donnees['promo'] ?>" required autofocus><br/>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Modifier</button>
    </form>
    <a href="../admin.php/promos"><button type="button" class="btn btn-lg btn-default">Retour</button></a>
<?php end_content_for(); ?>
