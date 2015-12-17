<!--fichier template pour l'affichage du panneau principal de gestion des donnees-->
<?php content_for('main');
//recupération des données concernant les donnees depuis la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=rentree;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM data');
} catch(Exception $e) {
    die('Erreur: '.$e->getMessage());
}
?>
<div class="donnees">
    <h1>Données</h1></br>
    <div class="row">
        <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>Identifiant</th>
                        <th>Nom Fils</th>
                        <th>Prénom Fils</th>
                        <th>Date de naissance</th>
                        <th>Téléphone mobile</th>
                        <th>Courriel</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($donnees = $reponse->fetch()) {
                    ?>
                    <tr id="tab_donnees">
                        <td><?php echo $donnees['identifiant']?></td>
                        <td><?php echo $donnees['nom_fils']?></td>
                        <td><?php echo $donnees['prenom_fils']?></td>
                        <td><?php echo $donnees['ddn_fils']?></td>
                        <td><?php echo $donnees['tel_mobile']?></td>
                        <td><?php echo $donnees['courriel']?></td>
                        <td><a href="./modifier_donnees?id=<?php echo $donnees['id']?>"><button type="button" class="btn btn-lg btn-modif modifier">Modifier</button></a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
<div>
        <a href="../controllers/donnees/donnees_extraire.php"><button type="button" class="btn btn-lg btn-modif">Extraire au format .xls</button>
        </div>
        <a href="../admin.php"><button type="button" class="btn btn-retour">Retour</button></a>
</div>
<?php end_content_for(); ?>
