<?php

require_once '/lib/limonade.php';

dispatch('/', 'accueil');
dispatch('/promos', 'promos');

run();
?>
