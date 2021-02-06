<?php

    include("../ressources/php/fichiers_communs.php");

    global $render;

    $traitement = new Traitement_CV($render);
    $traitement->traitement_toRender();

?>