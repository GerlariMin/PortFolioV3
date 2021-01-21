<?php

    var_dump($_SERVER["REQUEST_METHOD"]);
    var_dump(!$_GET);
    //var_dump($_GET, $_SERVER);
    include("ressources/config/config.inc.php");
    
    switch(strtolower(array_key_first($_GET)))
    {
        case 'accueil':
            header("Location: ./accueil/");
            exit();
            break;

        case 'competences':
            header("Location: ./competences/");
            exit();
            break;

        case 'contact':
            header("Location: ./contact/");
            exit();
            break;

        case 'cv':
            header("Location: ./cv/");
            exit();
            break;

        case 'experiences':
            header("Location: ./experiences/");
            exit();
            break;

        case 'parcours':
            header("Location: ./parcours/");
            exit();
            break;

        case 'presentation':
            header("Location: ./presentation/");
            exit();
            break;

        default:
            include("ressources/vendor/autoload.php");
            include("ressources/mustache/Render.php");
            $render = new Render();
            $render->action_render();
            break;
    }

?>