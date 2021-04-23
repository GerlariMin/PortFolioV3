<?php

    /**
     * Class Traitement_Competences
     */
    class Traitement_Competences
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
         * Traitement_Competences constructor.
         *
         * @param $print
         */
        public function __construct($print)
        {
            $this->render = $print;
            global $config;
            $this->config = $config;
            $this->text = new TextSkills();
        }

        /**
         * Retourne un tableau formaté pour les différentes balises Mustache pour l'affichage du bloc des compétences liées à la conception informatique.
         *
         * @return array
         */
        public function traitement_blockquote_conception(): array
        {
            return $this->text->textConception();
        }

        /**
         * Retourne un tableau formaté pour les différentes balises Mustache pour l'affichage du bloc des compétences liées aux IDE.
         *
         * @return array
         */
        public function traitement_blockquote_ide(): array
        {
            return $this->text->textIDE();
        }

        /**
         * Retourne un tableau formaté pour les différentes balises Mustache pour l'affichage du bloc des compétences liées aux langages de programmation.
         *
         * @return array
         */
        public function traitement_blockquote_programmation(): array
        {
            return $this->text->textProgrammation();
        }

        /**
         * Affichage de la page des compétences.
         */
        public function traitement_toRender(): void
        {
            $data['programmation'] = $this->traitement_blockquote_programmation();
            $data['conception'] = $this->traitement_blockquote_conception();
            $data['ide'] = $this->traitement_blockquote_ide();

            $data['chemin'] = $this->config['variables']['chemin'];
            $data['competences'] = true;

            $this->render->action_render($data);
        }

    }

?>