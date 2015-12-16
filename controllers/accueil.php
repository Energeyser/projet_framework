<?php

function accueil(){
    set("var", "*Ceci est une variable*");
    return render('../views/accueil.tpl.php','../views/layout/admin_layout.html.php');
}

function promos(){
    return render('../views/promos.tpl.php','../views/layout/vues_layout.html.php');
}

function promo_ajouter(){
    return render('../views/promo_ajouter.tpl.php','../views/layout/vues_layout.html.php');
}


function fichiers(){
    return render('../views/fichiers.tpl.php','../views/layout/vues_layout.html.php');
}

function fichiers_ajouter(){
    return render('../views/fichiers_ajouter.tpl.php','../views/layout/vues_layout.html.php');
}

function donnees(){
    return render('../views/donnees.tpl.php','../views/layout/vues_layout.html.php');
}

function modifier_donnees(){
    return render('../views/modifier_donnees.tpl.php','../views/layout/vues_layout.html.php');
}

function extraire_donnees(){
    return render('../views/extraire_donnees.tpl.php','../views/layout/vues_layout.html.php');
}

?>
