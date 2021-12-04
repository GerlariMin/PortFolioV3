<?php

    include("../ressources/php/fichiers_communs.php");
    include("texte.php");

    global $render;

    $traitement = new TraitementCompetences($render);
    $traitement->traitementRendu();

?>