<?php

    $typeErreur = null;
    // appel depuis le fichier .htaccess
    if(isset($_GET['erreur']))
    {
        $typeErreur = $_GET['erreur'];
    }

    include("../ressources/php/fichiers_communs.php");

    global $render;

    $traitement = new Traitement_Erreur($render);
    $traitement->traitement_toRender($typeErreur);

?>