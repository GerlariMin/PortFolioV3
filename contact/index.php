<?php

    include("../ressources/php/fichiers_communs.php");
    include("texte.php");

    global $render;

    $traitement = new Traitement_Contact($render);
    $traitement->traitement_toRender();

?>