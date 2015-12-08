<?php

function accueil(){
    //--------------Connexion BDD--------------
    $bdd = new PDO('mysql:host=localhost;dbname=rentree;charset=utf8', 'root', '');

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

function donnees_ajouter(){
    return render('../views/donnees_ajouter.tpl.php','../views/layout/admin_layout.html.php');
}

?>
