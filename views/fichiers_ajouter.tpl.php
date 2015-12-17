<<<<<<< HEAD
           <!--fichier template pour l'affichage du panneau principal de modification des fichiers-->
<?php content_for('main');
//recupération des données concernant les promos depuis la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=rentree;charset=utf8', 'root', '');
    $sql = $bdd->query('SELECT promo FROM document GROUP BY promo');
} catch(Exception $e) {
    die('Erreur: '.$e->getMessage());
}
?>
<div class="fichiers">
    <h1>Fichiers</h1></br>
    <form class="ajout_fichiers" action="../controllers/fichiers/fichiers_ajouter.php" method="post" enctype="multipart/form-data">
        <h2 class="ajout-donnees-heading">Ajouter un fichier</h2>
        <label for="inputLibelle" class="sr-only">Libellé : </label>
        <input type="text" id="libelle" name="libelle" class="form-control" required autofocus><br/>
        <label for="inputFichier" class="sr-only">Fichier : </label>
        <input type="file" id="fichier" name="fichier" class="form-control" required autofocus><br/>
        <label for="inputPromo" class="sr-only">Promo : </label>
        <div id="checkbox_promos">
            <table class="table">
                <thead>
                    <tr>
                        <th>Promo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($promos = $sql->fetch()) { ?>
                    <tr>
                        <td><label for="option"><?php echo $promos['promo'] ?> </label></td>
                        <td><input type="radio" name="promo" id="promo" value="<?php echo $promos['promo'] ?>"></td>
                    </tr>
                    <?php
                                                         } ?>
                </tbody>
            </table>

        </div>
        <button class="btn btn-lg btn-primary btn-ajouter" type="submit">Ajouter</button>
        <a href="../admin.php/fichiers"><button type="button" class="btn btn-lg btn-retour">Retour</button></a>


    </form>
</div>
<?php end_content_for(); ?>
