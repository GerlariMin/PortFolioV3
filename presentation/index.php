<?php

    include("../ressources/php/fichiers_communs.php");

    global $render;

    $traitement = new Traitement_Presentation($render);
    $traitement->traitement_toRender();

?>