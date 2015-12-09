<?php content_for('main'); ?>
    <h1>Promos</h1></br>
    <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=rentree;charset=utf8', 'root', '');
        $reponse = $bdd->query('SELECT promo FROM `document` GROUP BY promo');
    ?>
    <div class="row">
        <div class="col-md-6">
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
        <a href="./ajouter_promo"><button type="button" class="btn btn-lg btn-default">Ajouter</button></a>
        <button type="button" class="btn btn-lg btn-default">Modifier</button>
        <button type="button" class="btn btn-lg btn-default">Supprimer</button>
    </p>
    <a href="../admin.php"><button type="button" class="btn btn-lg btn-default">Retour</button></a>
<?php end_content_for(); ?>
