<?php

    /**
     * Class TraitementCV
     */
    class TraitementCV
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
         * TraitementCV constructor.
         *
         * @param $rendu
         */
        public function __construct($rendu)
        {
            $this->render = $rendu;
            global $config;
            $this->config = $config;
        }

        /**
         * Affichage de la page CV.
         */
        public function traitementRendu(): void
        {
            $data['chemin'] = $this->config['variables']['chemin'];
            $data['cv'] = true;

            $this->render->actionRendu($data);
        }

    }

?>