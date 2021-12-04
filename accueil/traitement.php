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
            $this->texte = new TexteAccueil();
        }

        /**
         * Retourne un tableau formaté pour les différentes balises Mustache de la page d'accueil.
         *
         * @return array
         */
        private function traitementLignes(): array
        {
            return $this->texte->texteLignes($this->config);
        }

        /**
         * Affichage de la page d'accueil.
         */
        public function traitementRendu(): void
        {
            $data['line'] = $this->traitementLignes();
            
            $data['chemin'] = $this->config['variables']['chemin'];
            $data['accueil'] = true;

            $this->render->actionRendu($data);
        }

    }

?>