<?php

    /**
     * Class TraitementCompetences
     */
    class TraitementCompetences
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
         * @var TexteCompetences
         */
        private TexteCompetences $texte;

        /**
         * TraitementCompetences constructor.
         *
         * @param Render $rendu
         */
        public function __construct(Render $rendu)
        {
            $this->render = $rendu;
            global $config;
            $this->config = $config;
            $this->texte = new TexteCompetences();
        }

        /**
         * Affichage de la page des compétences.
         */
        public function traitementRendu(): void
        {
            $data = $this->texte->texteFinal();

            $data['chemin'] = $this->config['variables']['chemin'];
            $data['competences'] = true;

            $this->render->actionRendu($data);
        }

    }

?>