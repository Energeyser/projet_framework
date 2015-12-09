<?php

require_once '/lib/limonade.php';

dispatch('', 'accueil');
dispatch('/promos', 'promos');
dispatch('/ajouter_promo', 'promo_ajouter');
dispatch('/supprimer_promo','promo_supprimer');
dispatch('/fichiers', 'fichiers');
dispatch('/ajouter_fichiers', 'fichiers_ajouter');
dispatch('/donnees', 'donnees');


run();
?>
