<?php content_for('main'); ?>
<?php
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=rentree;charset=utf8', 'root', '');
            $reponse = $bdd->query('SELECT promo, id FROM document GROUP BY promo');
        ?>
    <div class="promos">
        <h2>Promos</h2></br>
        <div class="row">
            <div class="col-md-6">
            <a href="./ajouter_promo"><button type="button" class="btn btn-lg btn-suppr">Ajouter</button></a>
            <table class="table">
                <thead>
                    <tr>
                        <th>Promo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($donnees = $reponse->fetch()) {
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
    <?php
    } catch(Exception $e) {
        die('Erreur: '.$e->getMessage());
    }
    ?>
    <a href="../admin.php"><button type="button" class="btn btn-retour">Retour</button></a>
<?php end_content_for(); ?>
