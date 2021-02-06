<?php

    include("../ressources/config/config.inc.php");
    global $config;

    include($config['variables']['chemin'] . "ressources/vendor/autoload.php");
    include($config['variables']['chemin'] . "ressources/mustache/Render.php");

    include("traitement.php");

    $render = new Render($config['variables']['chemin']);

?>