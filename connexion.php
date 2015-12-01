<?php

if($_POST['inputId'] == "test" && $_POST['inputMdp'] == "test"){
    header('Location: ./admin.php');
    exit;
}
else{
    echo("id ou mdp erroné");
} test

?>

