<?php
//Ce fichier fait le lien entre l'url de la page et les fonctions à exécuter par le framework limonade

require_once '/lib/limonade.php';

//pour chaque terminaison d'url on associe une fonction du fichier controller.php
dispatch('', 'accueil');
dispatch('/promos', 'promos');
dispatch('/ajouter_promo', 'promo_ajouter');
dispatch('/supprimer_promo','promo_supprimer');
dispatch('/modifier_promo','promo_modifier');
dispatch('/fichiers', 'fichiers');
dispatch('/fichiers_modifier', 'fichiers_modifier');
dispatch('/ajouter_fichiers', 'fichiers_ajouter');
dispatch('/donnees', 'donnees');
dispatch('/modifier_donnees/*','modifier_donnees');
dispatch('/extraire_donnees', 'extraire_donnees');


run();
?>
