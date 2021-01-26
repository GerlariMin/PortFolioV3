<?php

    class Traitement_Experiences
    {

        private Render $render;
        private PDO $bdd;

        /**
         * Traitement_Experiences constructor.
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
            $data['experiences'] = true;
            
            $this->render->action_render($data);
        }

    }

?>