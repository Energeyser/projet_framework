<?php

//connection à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=rentree;charset=utf8', 'rentree', 'rentree');
    $results = $bdd->query('SELECT * FROM data');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

if ($results = $bdd->query('SELECT * FROM data'))
{

    $handle = tmpfile();
    $row    = mysql_fetch_assoc($results);

    fputcsv($handle, array_keys($row), ';');

    do
    {
    	fputcsv($handle, $row, ';');
    }
    while($row = mysql_fetch_assoc($results));

    header('Content-Type: application/csv');
    fpassthru($handle);
}
else
{
    exit('Query Error');
}
?>
