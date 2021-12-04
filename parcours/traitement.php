<?php

    /**
     * Class Traitement_Parcours
     */
    class Traitement_Parcours
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
         * Traitement_Parcours constructor.
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
         * Retourne un tableau formaté pour les différentes balises Mustache pour l'affichage de la page de parcours.
         *
         * @return array[]
         */
        public function traitement_featurette(): array
        {
            return $this->config['parcours']['featurette'];
        }

        /**
         * Affichage de la page parcours.
         */
        public function traitement_toRender()
        {
            $data['featurette'] = $this->traitement_featurette();

            $data['chemin'] = $this->config['variables']['chemin'];
            $data['parcours'] = true;
            
            $this->render->actionRendu($data);
        }

    }

?>