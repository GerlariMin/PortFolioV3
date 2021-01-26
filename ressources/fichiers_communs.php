<?php

    include("../config/config.inc.php");
    global $config;

    include($config['variables']['chemin'] . "ressources/vendor/autoload.php");
    include($config['variables']['chemin'] . "ressources/mustache/Render.php");
    include($config['variables']['chemin'] . "ressources/BDD/BDD.php");

    include("traitement.php");

?>