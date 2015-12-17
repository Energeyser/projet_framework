<?php content_for('main'); ?>

    <!--connexion à la base de données pour afficher la liste des promos dans le tableau-->
    <?php
    $n = 0;
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=rentree;charset=utf8', 'rentree', 'rentree');
            $reponse = $bdd->query('SELECT promo FROM document GROUP BY promo');
    ?>

    <h1>Modification du fichier</h1></br>
    <form class="modif_fichiers" action="../controllers/fichiers/fichiers_modifier.php" method="post" enctype="multipart/form-data">
        <label for="inputLibelle" class="sr-only">Libellé : </label>
        <input type="text" id="libelle" name="libelle" class="form-control" required autofocus><br/>
        <label for="inputFichier" class="sr-only">Fichier : </label>
        <input type="file" id="fichier" name="fichier" class="form-control" required autofocus><br/>
        <label for="inputPromo" class="sr-only">Promo : </label>
        <div id="checkbox_promos">
            <table class="table">
            <thead>
                <tr>
                    <th>Promo</th>
                </tr>
            </thead>
            <tbody>
            <?php while($donnees = $reponse->fetch()) { ?>
             <tr>
                        <td><label for="option<?php echo $n ?>"><?php echo $donnees['promo'] ?> </label></td>
                        <td><input type="radio" name="promo" id="promo" value="<?php echo $donnees['promo'] ?>"></td>
            </tr>
            <?php
                $n++;
            } ?>
                </tbody>
            </table>

        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Modifier</button>
        <a href=""><button type="button" class="btn btn-lg btn-default">Retour</button></a>


      </form>

        <?php
            } catch(Exception $e) {
                die('Erreur: '.$e->getMessage());
            }
        ?>


<?php end_content_for(); ?>
