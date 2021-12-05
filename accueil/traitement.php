<?php

    /**
     * Classe TreatmentAccueil
     */
    class TraitementAccueil
    {

        /**
         * @var Render render
         */
        private Render $render;
        /**
         * @var array config
         */
        private array $config;
        /**
         * @var TexteAccueil texte
         */
        private TexteAccueil $texte;

        /**
         * Traitement_Accueil constructor.
         *
         * @param Render $rendu
         */
        public function __construct(Render $rendu)
        {
            $this->render = $rendu;
            global $config;
            $this->config = $config;
            $this->texte = new TexteAccueil($this->config);
        }

        /**
         * Affichage de la page d'accueil.
         */
        public function traitementRendu(): void
        {
            $data = $this->texte->texteFinal();
            
            $data['chemin'] = $this->config['variables']['chemin'];
            $data['accueil'] = true;

            $this->render->actionRendu($data);
        }

    }

?>