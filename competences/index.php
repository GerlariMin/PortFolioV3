<?php

    include("../ressources/php/fichiers_communs.php");
    include("texte.php");

    global $render;

    $traitement = new Traitement_Competences($render);
    $traitement->traitement_toRender();

?>