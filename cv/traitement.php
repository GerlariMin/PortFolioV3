<?php

    class Traitement_CV
    {

        private Render $render;
        private PDO $bdd;

        /**
         * Traitement_CV constructor.
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
            $data['cv'] = true;
            
            $this->render->action_render($data);
        }

    }

?>