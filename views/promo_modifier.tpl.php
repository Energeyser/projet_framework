<!--fichier template pour l'affichage du panneau principal de modification des promos-->
<?php content_for('main'); ?>
<h1>Promos</h1></br>
<?php
//recuperation de l'id de la promo à modifier
$id = $_GET['id'];
//recupération des données concernant la promo selectionnée depuis la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=rentree;charset=utf8', 'root', '');
    $sql = $bdd->query('SELECT promo, id FROM document WHERE id = "'.$id.'"');
    $promos = $sql->fetch();
} catch(Exception $e) {
    die('Erreur: '.$e->getMessage());
}
?>
<form class="modifier_promos" action="../controllers/promos/promo_modifier.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
    <h2>Nouveau nom de la promo : </h2>
    <label for="inputPromo" class="sr-only">Nom de la promo : </label>
    <input type="text" id="new_promo" name="new_promo" class="form-control" placeholder="<?php  echo $promos['promo'] ?>" required autofocus><br/>
    <button class="btn btn-lg btn-primary btn-modifier" type="submit">Modifier</button>
</form>
<a href="../admin.php/promos"><button type="button" class="btn btn-lg btn-retour">Retour</button></a>
<?php end_content_for(); ?>
