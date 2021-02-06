<?php

    include("../ressources/php/fichiers_communs.php");

    global $render;

    $traitement = new Traitement_Experiences($render);
    $traitement->traitement_toRender();

?>