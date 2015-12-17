<?php content_for('main'); ?>
    <h1>Fichiers</h1></br>
    <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=rentree;charset=utf8', 'rentree', 'rentree');
        $reponse = $bdd->query('SELECT * FROM `document` ORDER BY libelle ');
    ?>
    <div class="row">
            <div class="col-md-6">
                <form name="tab_fichiers" metod="post" action="">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Promos</th>
                                <th>Libellés</th>
                                <th>Fichiers</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            while($donnees = $reponse->fetch()) {
                        ?>
                            <tr>
                                <td><?php echo $donnees['promo']?></td>
                                <td><?php echo $donnees['libelle']?></td>
                                <td><?php echo $donnees['fichier']?></td>
                                <td><a href="./fichiers_modifier?fichier=<?php echo $donnees['fichier']?>"><button type="button" class="btn btn-lg btn-default">Modifier</button></a></td>
                                <td><a  href="../controllers/fichiers/fichiers_supprimer.php?fichier=<?php echo $donnees['fichier']?>"><button type="button" class="btn btn-lg btn-default">Supprimer</button></a></td>
                            </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </form>
            </div>
    </div>
        <?php
            } catch(Exception $e) {
                die('Erreur: '.$e->getMessage());
            }
        ?>
    <div>
        <a href="./ajouter_fichiers"><button type="button" class="btn btn-lg btn-default">Ajouter un fichier</button>
        <a href="../admin.php"><button type="button" class="btn btn-lg btn-default">Retour</button></a>
    </div>

<?php end_content_for(); ?>
