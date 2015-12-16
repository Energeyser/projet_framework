<?php content_for('main'); ?>
    <h1>Promos</h1></br>
    <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=rentree;charset=utf8', 'root', '');
        $reponse = $bdd->query('SELECT promo, id FROM `document` GROUP BY promo');
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
                while($documents = $reponse->fetch()) {
                ?>
                    <tr>
                        <td><?php echo $documents['promo']?></td>
                        <td><a href="./modifier_promo?id=<?php echo $documents['id']?>"><button type="button" class="btn btn-lg btn-default">Modifier</button></a></td>
                        <td><button type="button" class="btn btn-lg btn-default">Supprimer</button></td>
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
    <a href="../admin.php"><button type="button" class="btn btn-lg btn-default">Retour</button></a>
<?php end_content_for(); ?>
