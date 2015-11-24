<?php

function hello(){
    set("var", "Hello world!");
    return layout('admin_layout.html.php');
}

?>
