<?php

    include("../ressources/php/fichiers_communs.php");
    include("texte.php");

    global $render;

    $traitement = new TraitementParcours($render);
    $traitement->traitementRendu();

?>