<?php content_for('main');
    $fichier = $_GET['fichier'];

    //connexion à la base de données pour afficher la liste des fichiers dans le tableau

    $n = 0;
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=rentree;charset=utf8', 'root', '');
            $sql = $bdd->query('SELECT libelle, fichier FROM document WHERE fichier = "'.$fichier.'"');
            $donnees = $sql->fetch();
            $sql = $bdd->query('SELECT promo FROM document GROUP BY promo');
            $promos = $sql->fetch();
            } catch(Exception $e) {
                die('Erreur: '.$e->getMessage());
            }
    ?>
    <div class="fichiers">
        <h1>Modification du fichier <?php echo $donnees['fichier'] ?></h1></br>
        <form class="modif_fichiers" action="../controllers/fichiers/fichiers_modifier.php?fichier=<?php echo $donnees['fichier'] ?>" method="post" enctype="multipart/form-data">
            <label for="inputLibelle" class="sr-only">Nouveau libellé : </label>
            <input type="text" id="new_libelle" name="new_libelle" class="form-control" required autofocus placeholder="<?php echo $donnees['libelle'] ?>"><br/>
            <label for="inputFichier" class="sr-only">Nouveau fichier : </label>
            <input type="file" id="new_fichier" name="new_fichier" class="form-control" required><br/>
            <label for="inputPromo" class="sr-only">Nouvelle promo : </label>
            <div id="checkbox_promos">
                <table class="table">
                <thead>
                    <tr>
                        <th>Promo</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($promos = $sql->fetch()) { ?>
                 <tr>
                            <td><label for="option<?php echo $n ?>"><?php echo $promos['promo'] ?> </label></td>
                            <td><input type="radio" name="new_promo" id="new_promo" value="<?php echo $promos['promo'] ?>"></td>
                </tr>
                <?php
                    $n++;
                } ?>
                    </tbody>
                </table>

            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Modifier</button>
            <a href="../admin.php/fichiers"><button type="button" class="btn btn-retour">Retour</button></a>
        </form>
    </div>
<?php end_content_for(); ?>
