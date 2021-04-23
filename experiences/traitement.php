<?php

    /**
     * Class Traitement_Experiences
     */
    class Traitement_Experiences
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
         * Traitement_Experiences constructor.
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
         * Retourne un tableau formaté pour les différentes balises Mustache pour l'affichage de la page d'expériences.
         *
         * @return array[]
         */
        public function traitement_accordion()
        {
            return $this->config['experiences']['accordion'];
        }

        /**
         * Affichage de la page d'expériences.
         */
        public function traitement_toRender()
        {
            $data['arccordion-item'] = $this->traitement_accordion();

            $data['chemin'] = $this->config['variables']['chemin'];
            $data['experiences'] = true;
            
            $this->render->action_render($data);
        }

    }

?>