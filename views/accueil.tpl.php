<!--Fichier template de la page d'accueil-->
<?php content_for('main'); ?>
    <div class="accueil">
            <h2>Que souhaitez vous modifier?</h2>
            <p>
                <a href="./admin.php/promos"><button type="button" class="btn btn-lg btn-primary btn-block">Promos</button></a>
                <a href="./admin.php/fichiers"><button type="button" class="btn btn-lg btn-primary btn-block">Fichiers</button></a>
                <a href="./admin.php/donnees"><button type="button" class="btn btn-lg btn-primary btn-block">Données</button></a>
            </p>
    </div>
<?php end_content_for(); ?>
