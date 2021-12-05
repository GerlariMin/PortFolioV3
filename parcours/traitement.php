<?php

    /**
     * Class TraitementParcours
     */
    class TraitementParcours
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
         * @var TexteParcours
         */
        private TexteParcours $texte;

        /**
         * Traitement_Parcours constructor.
         *
         * @param Render $rendu
         */
        public function __construct(Render $rendu)
        {
            $this->render = $rendu;
            global $config;
            $this->config = $config;
            $this->texte = new TexteParcours();
        }

        /**
         * Affichage de la page parcours.
         */
        public function traitementRendu()
        {
            $data = $this->texte->texteFinal();

            $data['chemin'] = $this->config['variables']['chemin'];
            $data['parcours'] = true;
            
            $this->render->actionRendu($data);
        }

    }

?>