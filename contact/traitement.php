<?php

    /**
     * Classe TraitementContact
     */
    class TraitementContact
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
         * @var TexteContact
         */
        private TexteContact $texte;

        /**
         * Traitement_Contact constructor.
         *
         * @param Render $rendu
         */
        public function __construct(Render $rendu)
        {
            $this->render = $rendu;
            global $config;
            $this->config = $config;
            $this->texte = new TexteContact();
        }

        /**
         * Retourne un tableau formaté pour les différentes balises Mustache pour l'affichage de la page Contact.
         *
         * @return array[]
         */
        public function traitementCard(): array
        {
            return $this->texte->textCard();
        }

        /**
         * Affichage de la page de contact.
         */
        public function traitementRendu(): void
        {
            $data['card'] = $this->traitementCard();

            $data['chemin'] = $this->config['variables']['chemin'];
            $data['contact'] = true;
            
            $this->render->actionRendu($data);
        }

    }

?>