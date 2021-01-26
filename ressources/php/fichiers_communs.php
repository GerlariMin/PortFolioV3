<?php

    include("../ressources/config/config.inc.php");
    global $config;

    include($config['variables']['chemin'] . "ressources/vendor/autoload.php");
    include($config['variables']['chemin'] . "ressources/mustache/Render.php");
    include($config['variables']['chemin'] . "ressources/BDD/BDD.php");

    include("traitement.php");

    $render = new Render($config['variables']['chemin']);
    $bdd = BDD::get_BDD($config['BDD']['dsnPDO'], $config['BDD']['usernamePDO'], $config['BDD']['password'], $config['BDD']['optionsPDO']);

?>