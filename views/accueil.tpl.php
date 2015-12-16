<?php content_for('main'); ?>
    <link href="./css/style.css" rel="stylesheet">
    <div class="container">
        <form class="accueil">
            <h2>Que souhaitez vous modifier?</h2>
            <p>
                <a href="./admin.php/promos"><button type="button" class="btn btn-lg btn-primary btn-block">Promos</button></a>
                <a href="./admin.php/fichiers"><button type="button" class="btn btn-lg btn-primary btn-block">Fichiers</button></a>
                <a href="./admin.php/donnees"><button type="button" class="btn btn-lg btn-primary btn-block">Données</button></a>
            </p>
        </form>
    </div>
<?php end_content_for(); ?>
