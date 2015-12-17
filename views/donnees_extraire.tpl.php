<?php content_for('main'); ?>
    <div class="donnees">
        <h1>Données</h1></br>
        <?php
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=rentree;charset=utf8', 'root', '');
            $reponse = $bdd->query('SELECT * FROM data');
        ?>
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
                            <tr>
                                <td><?php echo $donnees['identifiant']?></td>
                                <td><?php echo $donnees['nom_fils']?></td>
                                <td><?php echo $donnees['prenom_fils']?></td>
                                <td><?php echo $donnees['ddn_fils']?></td>
                                <td><?php echo $donnees['tel_mobile']?></td>
                                <td><?php echo $donnees['courriel']?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                </div>
        <?php
        } catch(Exception $e) {
            die('Erreur: '.$e->getMessage());
        }
        ?>

        <p>
            <a href="./extraire_donnees"><button type="button" class="btn btn-lg btn-default">Extraire</button>
            <button type="button" class="btn btn-lg btn-modif">Modifier</button>
        </p>
        <a href="../admin.php"><button type="button" class="btn btn-retour">Retour</button></a>
    </div>
<?php end_content_for(); ?>
