<?php

    include("../ressources/php/fichiers_communs.php");

    global $render;
    global $bdd;

    $traitement = new Traitement_Contact($render, $bdd);
    $traitement->traitement_toRender();

?>