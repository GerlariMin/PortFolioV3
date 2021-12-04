<?php

    include("../ressources/php/fichiers_communs.php");

    global $render;

    $traitement = new TraitementCV($render);
    $traitement->traitementRendu();

?>