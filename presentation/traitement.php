<?php

    /**
     * Class TraitementPresentation
     */
    class TraitementPresentation
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
         * @var TextePresentation
         */
        private TextePresentation $texte;

        /**
         * Traitement_Presentation constructor.
         * @param $rendu
         */
        public function __construct($rendu)
        {
            $this->render = $rendu;
            global $config;
            $this->config = $config;
            $this->texte = new TextePresentation($this, $this->config);
        }

        /**
         * Retourne l'âge courant en fonction de la date actuelle de manière automatique.
         *
         * @param $date
         * @return int
         */
        public function traitementAge($date): int
        {
            $age = (int) date('Y') - (int) $date;

            if (date('md') < date('md', strtotime($date)))
            {
                return $age - 1;
            }

            return $age;
        }

        /**
         * Affichage de la page de présentation.
         */
        public function traitementRendu()
        {


            $data = $this->texte->texteFinal();

            $data['chemin'] = $this->config['variables']['chemin'];
            $data['presentation'] = true;
            
            $this->render->actionRendu($data);
        }

    }

?>