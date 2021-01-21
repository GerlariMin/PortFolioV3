<?php

    class Traitement_Presentation
    {

        private $render;
        private $bdd;

        public function __construct($print, $db)
        {
            $this->render = $print;
            $this->bdd = $db;
        }

        public function traitement_toRender()
        {
            $data['chemin'] = "../";
            $data['presentation'] = true;
            
            $this->render->action_render($data);
        }

    }

?>