<?php

    class Traitement_Competences
    {

        private Render $render;
        private PDO $bdd;

        /**
         * Traitement_Competences constructor.
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
            $data['competences'] = true;
            
            $this->render->action_render($data);
        }

    }

?>