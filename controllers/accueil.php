<?php

function accueil(){
    //--------------Connexion BDD--------------
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=rentree;charset=utf8', 'root', '');
        $reponse = $bdd->query('SELECT * FROM document');

        while ($donnees = $reponse->fetch()) {
            ?>
            <p>rang : <?php echo $donnees['rang']; ?></p>
            <?php
        }
    }
    catch(Exception $e) {
            die('Erreur : '.$e->getMessage());
    }

    set("var", "*Ceci est une variable*");
    return render('../views/accueil.tpl.php','../views/layout/admin_layout.html.php');
}

function promos(){
    return render('../views/promos.tpl.php','../views/layout/admin_layout.html.php');
}

function fichiers(){
    return render('../views/fichiers.tpl.php','../views/layout/admin_layout.html.php');
}

function donnees(){
    return render('../views/donnees.tpl.php','../views/layout/admin_layout.html.php');
}

function promo_ajouter(){
    return render('../views/promo_ajouter.tpl.php','../views/layout/admin_layout.html.php');
}

?>
