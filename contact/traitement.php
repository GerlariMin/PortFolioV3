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
         * Affichage de la page de contact.
         */
        public function traitementRendu(): void
        {
            $data = $this->texte->texteFinal();

            $data['chemin'] = $this->config['variables']['chemin'];
            $data['contact'] = true;
            
            $this->render->actionRendu($data);
        }

    }

?>