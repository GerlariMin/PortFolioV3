<?php

    global $config;

    /**                                          **
     * Configuration d'accès à la base de données *
     **                                          **/

    //new PDO($dsnPDO, $usernamePDO, $passwordPDO, $optionPDO);
    $config['BDD']['dsnPDO'] = "mysql:host=localhost;dbname=portfolio;charset=utf8";
    $config['BDD']['usernamePDO'] = "root";
    $config['BDD']['password'] = "";
    $config['BDD']['optionsPDO'] = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

    /**                **
     * Variables utiles *
     **                **/

    $config['variables']['chemin'] = "../";

?>