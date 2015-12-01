<?php

function hello(){
    set("var", "*Ceci est une variable*");
    return render('../views/hello.tpl.php','../views/layout/admin_layout.html.php');
}

?>
