<?php content_for('main'); ?>
    <h1>Données</h1></br>
    <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=rentree;charset=utf8', 'root', '');
        $reponse = $bdd->query('SELECT * FROM data');
    ?>

    <?php
    } catch(Exception $e) {
        die('Erreur: '.$e->getMessage());
    }
    ?>

    <h1>YOUHOU</h1>
    <p>
        <a href="../controllers/donnees/donnees_extraire.php"><button type="button" class="btn btn-lg btn-default">Extraire</button>
        <button type="button" class="btn btn-lg btn-default">Modifier</button>
    </p>
    <a href="../admin.php"><button type="button" class="btn btn-lg btn-default">Retour</button></a>
<?php end_content_for(); ?>
