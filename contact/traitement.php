<?php

    /**
     * Class Traitement_Contact
     */
    class Traitement_Contact
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
         * Traitement_Contact constructor.
         *
         * @param $print
         */
        public function __construct($print)
        {
            $this->render = $print;
            global $config;
            $this->config = $config;
            $this->text = new TextContact();
        }

        /**
         * Retourne un tableau formaté pour les différentes balises Mustache pour l'affichage de la page Contact.
         *
         * @return array[]
         */
        public function traitement_card(): array
        {
            return $this->text->textCard();
        }

        /**
         * Affichage de la page de contact.
         */
        public function traitement_toRender(): void
        {
            $data['card'] = $this->traitement_card();

            $data['chemin'] = $this->config['variables']['chemin'];
            $data['contact'] = true;
            
            $this->render->action_render($data);
        }

    }

?>