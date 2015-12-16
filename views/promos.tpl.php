<?php content_for('main'); ?>
    <link href="./css/style.css" rel="stylesheet">
    <div class="container">
        <h2>Promos</h2></br>
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
                            <td><button type="button" class="btn btn-lg btn-modif">Modifier</button></td>
                            <td><button type="button" class="btn btn-lg btn-suppr">Supprimer</button></td>
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
