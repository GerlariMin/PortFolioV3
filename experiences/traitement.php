<?php

    /**
     * Class TraitementExperiences
     */
    class TraitementExperiences
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
         * @var TexteExperiences
         */
        private TexteExperiences $texte;

        /**
         * TraitementExperiences constructor.
         *
         * @param $rendu
         */
        public function __construct($rendu)
        {
            $this->render = $rendu;
            global $config;
            $this->config = $config;
            $this->texte = new TexteExperiences();
        }

        /**
         * Affichage de la page d'expériences.
         */
        public function traitementRendu()
        {
            $data = $this->texte->texteFinal();

            $data['chemin'] = $this->config['variables']['chemin'];
            $data['experiences'] = true;
            
            $this->render->actionRendu($data);
        }

    }

?>