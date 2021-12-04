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
         * Retourne un tableau formaté pour les différentes balises Mustache pour l'affichage de la page d'expériences.
         *
         * @return array[]
         */
        public function traitementAccordion(): array
        {
            return $this->texte->texteAccordion();
        }

        /**
         * Affichage de la page d'expériences.
         */
        public function traitementRendu()
        {
            $data['arccordion-item'] = $this->traitementAccordion();

            $data['chemin'] = $this->config['variables']['chemin'];
            $data['experiences'] = true;
            
            $this->render->actionRendu($data);
        }

    }

?>