<<<<<<< HEAD
           <!--fichier template pour l'affichage du panneau principal de gestion des promos-->
<?php content_for('main');
//recupération des données concernant les promos depuis la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=rentree;charset=utf8', 'rentree', 'rentree');
    $sql = $bdd->query('SELECT promo, id FROM document GROUP BY promo');
} catch(Exception $e) {
    die('Erreur: '.$e->getMessage());
}
?>

<div class="promos">
    <h2>Promos</h2></br>
<div class="row">
    <div class="col-md-6">
        <a href="./ajouter_promo"><button type="button" class="btn btn-lg btn-ajouter">Ajouter</button></a>
        <table class="table">
            <thead>
                <tr>
                    <th>Promo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //boucle permettant l'affichage des différentes promos
                while($donnees = $sql->fetch()) {
                ?>
                <tr>
                    <td><?php echo $donnees['promo']?></td>
                    <td><a href="./modifier_promo?id=<?php echo $donnees['id']?>"><button type="button" class="btn btn-lg btn-modif">Modifier</button></a></td>
                    <td><a href="../controllers/promos/promo_supprimer.php?promo=<?php echo $donnees['promo']?>"><button type="button" class="btn btn-lg btn-suppr">Supprimer</button></a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</div>
<a href="../admin.php"><button type="button" class="btn btn-retour">Retour</button></a>
<?php end_content_for(); ?>
