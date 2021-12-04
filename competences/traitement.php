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
         * Retourne un tableau formaté pour les différentes balises Mustache pour l'affichage du bloc des compétences liées à la conception informatique.
         *
         * @return array
         */
        public function traitementBlockquoteConception(): array
        {
            return $this->texte->texteConception();
        }

        /**
         * Retourne un tableau formaté pour les différentes balises Mustache pour l'affichage du bloc des compétences liées aux IDE.
         *
         * @return array
         */
        public function traitementBlockquoteOutils(): array
        {
            return $this->texte->texteOutils();
        }

        /**
         * Retourne un tableau formaté pour les différentes balises Mustache pour l'affichage du bloc des compétences liées aux langages de programmation.
         *
         * @return array
         */
        public function traitementBlockquoteProgrammation(): array
        {
            return $this->texte->texteProgrammation();
        }

        /**
         * Affichage de la page des compétences.
         */
        public function traitementRendu(): void
        {
            $data['programmation'] = $this->traitementBlockquoteProgrammation();
            $data['conception'] = $this->traitementBlockquoteConception();
            $data['ide'] = $this->traitementBlockquoteOutils();

            $data['chemin'] = $this->config['variables']['chemin'];
            $data['competences'] = true;

            $this->render->actionRendu($data);
        }

    }

?>