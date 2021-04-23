<?php

    /**
     * Class TreatmentHome
     */
    class TreatmentHome
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
         * @var TextHome text
         */
        private TextHome $text;

        /**
         * Traitement_Accueil constructor.
         *
         * @param $print
         */
        public function __construct($print)
        {
            $this->render = $print;
            global $config;
            $this->config = $config;
            $this->text = new TextHome();
        }

        /**
         * Retourne un tableau formaté pour les différentes balises Mustache de la page d'accueil.
         *
         * @return array
         */
        private function treatmentLine(): array
        {
            return $this->text->textLine($this->config);
        }

        /**
         * Affichage de la page d'accueil.
         */
        public function treatmentToRender(): void
        {
            $data['line'] = $this->treatmentLine();
            
            $data['chemin'] = $this->config['variables']['chemin'];
            $data['accueil'] = true;

            $this->render->action_render($data);
        }

    }

?>