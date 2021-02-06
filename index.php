<?php

    /* 
        voir 
        https://www.alessioatzeni.com/blog/css3-with-jquery-reverse-animation/
        https://www.alessioatzeni.com/wp-content/tutorials/html-css/CSS3-Reverse-Animation/index.html#
        https://tympanus.net/Tutorials/FullscreenSlitSlider/
        http://www.cssplay.co.uk/menu/css3-animation.html
        https://www.w3schools.com/howto/howto_css_parallax.asp
        https://1stwebdesigner.com/css-text-effects/
    */

    if(array_key_first($_GET))
    {
        switch(strtolower(array_key_first($_GET)))
        {
            case 'accueil':
                header("Location: ./accueil/");
                break;

            case 'competences':
                header("Location: ./competences/");
                break;

            case 'contact':
                header("Location: ./contact/");
                break;

            case 'cv':
                header("Location: ./cv/");
                break;

            case 'experiences':
                header("Location: ./experiences/");
                break;

            case 'parcours':
                header("Location: ./parcours/");
                break;

            case 'presentation':
                header("Location: ./presentation/");
                break;

            default:
                header("Location: ./erreur/");
                break;
        }
    }
    else
    {
        header("Location: ./accueil/");
        exit();
    }

?>