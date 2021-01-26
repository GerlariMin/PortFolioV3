<?php

    class Traitement_Presentation
    {

        private Render $render;
        private PDO $bdd;

        /**
         * Traitement_Presentation constructor.
         * @param $print
         * @param $db
         */
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