<?php

require_once '/lib/limonade.php';

dispatch('', 'accueil');
dispatch('/promos', 'promos');
dispatch('/ajouter_promo', 'promo_ajouter');
dispatch('/supprimer_promo','promo_supprimer');
dispatch('/modifier_promo','promo_modifier');
dispatch('/fichiers', 'fichiers');
dispatch('/ajouter_fichiers', 'fichiers_ajouter');
dispatch('/donnees', 'donnees');
dispatch('/modifier_donnees/*','modifier_donnees');
dispatch('/extraire_donnees', 'extraire_donnees');


run();
?>
