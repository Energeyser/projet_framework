<?php

function accueil(){
    set("var", "*Ceci est une variable*");
    return render('../views/accueil.tpl.php','../views/layout/admin_layout.html.php');
}

function promos(){
    return render('../views/promos.tpl.php','../views/layout/admin_layout.html.php');
}

function fichiers(){
    return render('../views/promos.tpl.php','../views/layout/admin_layout.html.php');
}

function donnees(){
    return render('../views/promos.tpl.php','../views/layout/admin_layout.html.php');
}

?>
