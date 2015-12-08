<?php

require_once '/lib/limonade.php';

dispatch('', 'accueil');
dispatch('/promos', 'promos');
dispatch('/fichiers', 'fichiers');
dispatch('/donnees', 'donnees');
dispatch('/ajouter_donnees', 'donnees_ajouter');

run();
?>
