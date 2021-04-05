<?php

    /**
     * Class Traitement_CV
     */
    class Traitement_CV
    {

        /**
         * @var Render
         */
        private Render $render;
        /**
         * @var array
         */
        private array $config;

        /**
         * Traitement_CV constructor.
         *
         * @param $print
         */
        public function __construct($print)
        {
            $this->render = $print;
            global $config;
            $this->config = $config;
        }

        /**
         * Affichage de la page CV.
         */
        public function traitement_toRender(): void
        {
            $data['chemin'] = $this->config['variables']['chemin'];
            $data['cv'] = true;

            $this->render->action_render($data);
        }

    }

?>