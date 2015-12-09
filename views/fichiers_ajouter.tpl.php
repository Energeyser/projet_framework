<?php content_for('main'); ?>
    <script>
        $(function() {
          /* Affichage du menu déroulant au clic */
           $("#menu-deroulant-style").on("click", function() {
             /* $("#menu-deroulant-style-on").show(); */
             $("#menu-deroulant-style-on").show();
           });

          /* Disparition du menu déroulant au clic sur le bouton OK */
          $("#bouton-valid-style").on("click", function() {
              $("#menu-deroulant-style-on").hide();
           });

          /* Disparition du menu déroulant au clic hors de la zone (sauf sur le champ input #menu-deroulant-style) */
          $( document ).on( "click", function( e ){
            if ( $( e.target ).closest( "#menu-deroulant-style-on" )[0] === undefined ){
                if ( (e.target.id != "menu-deroulant-style-on") && (e.target.id != "menu-deroulant-style") ){
                    $( "#menu-deroulant-style-on" ).hide();
                }
            }
          });
        });
    </script>

    <!--connexion à la base de données pour afficher la liste des promos dans le tableau-->
    <?php
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=rentree;charset=utf8', 'rentree', 'rentree');
            $reponse = $bdd->query('SELECT promo FROM document');
    ?>

    <h1>Fichiers</h1></br>
    <form class="ajout_fichiers" action="../controllers/fichiers/fichiers_ajouter.php" method="post" enctype="multipart/form-data">
        <h2 class="ajout-donnees-heading">Ajouter un fichier</h2>
        <label for="inputLibelle" class="sr-only">Libellé : </label>
        <input type="text" id="libelle" name="libelle" class="form-control" required autofocus><br/>
        <label for="inputFichier" class="sr-only">Fichier : </label>
        <input type="file" id="fichier" name="fichier" class="form-control" required autofocus><br/>
        <label for="inputPromo" class="sr-only">Promo : </label>
        <div class="input-prepend" >
            <input type="text" placeholder="Aucune Promo" class="input-large" id="menu-deroulant-style">
        </div>


        <div id="menu-deroulant-style-on">

            <?php while($donnees = $reponse->fetch()) { ?>
                <label for="option1"><?php echo $donnees['promo'] ?> </label><input type="checkbox" name="checkbox1" id="checkbox1" value="1"/><br />
            <?php } ?>

        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Ajouter</button>

      </form>

        <?php
            } catch(Exception $e) {
                die('Erreur: '.$e->getMessage());
            }
        ?>

        <p>
            <button type="button" class="btn btn-lg btn-default">Ajouter</button>
            <button type="button" class="btn btn-lg btn-default">Modifier</button>
            <button type="button" class="btn btn-lg btn-default">Supprimer</button>
        </p>
        <a href="../admin.php"><button type="button" class="btn btn-lg btn-default">Retour</button></a>

<?php end_content_for(); ?>
