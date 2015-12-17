<!--fichier template pour l'affichage du panneau principal de gestion des fichier-->
<?php content_for('main'); ?>
<h1>Fichiers</h1></br>
<?php
try {
    //recupération des données concernant les fichiers depuis la base de données
    $bdd = new PDO('mysql:host=localhost;dbname=rentree;charset=utf8', 'rentree', 'rentree');
    $sql = $bdd->query('SELECT * FROM `document` ORDER BY libelle ');
} catch(Exception $e) {
    die('Erreur: '.$e->getMessage());
}
?>
<div class="row">
    <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>Promos</th>
                        <th>Libellés</th>
                        <th>Fichiers</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //boucle permettant l'affichage des différents fichiers
                    while($fichiers = $sql->fetch()) {
                    ?>
                    <tr>
                        <td><?php echo $fichiers['promo']?></td>
                        <td><?php echo $fichiers['libelle']?></td>
                        <td><?php echo $fichiers['fichier']?></td>
                        <td><a href="./fichiers_modifier?fichier=<?php echo $fichiers['fichier']?>"><button type="button" class="btn btn-lg btn-modif">Modifier</button></a></td>
                        <td><a  href="../controllers/fichiers/fichiers_supprimer.php?fichier=<?php echo $donnees['fichier']?>"><button type="button" class="btn btn-lg btn-suppr">Supprimer</button></a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
    </div>
</div>
 <div>
            <a href="./ajouter_fichiers"><button type="button" class="btn btn-lg btn-modif">Ajouter un fichier</button>
            <a href="../admin.php"><button type="button" class="btn btn-retour">Retour</button></a>
        </div>

    <?php end_content_for(); ?>
