<?php

    include("../ressources/php/fichiers_communs.php");

    global $render;
    global $bdd;

    $traitement = new Traitement_Erreur($render, $bdd);
    $traitement->traitement_toRender();

?>