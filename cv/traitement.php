<?php

    /**
     * Class Traitement_CV
     */
    class Traitement_CV
    {

        private Render $render;
        private $config;

        /**
         * Traitement_CV constructor.
         * @param $print
         */
        public function __construct($print)
        {
            $this->render = $print;
            global $config;
            $this->config = $config;
        }

        public function traitement_toRender()
        {
            $data['chemin'] = $this->config['variables']['chemin'];
            $data['cv'] = true;

            $this->render->action_render($data);
        }

    }

?>