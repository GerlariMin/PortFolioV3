<?php

    /**
     * Class Traitement_Accueil
     */
    class Traitement_Accueil
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
         * Traitement_Accueil constructor.
         *
         * @param $print
         */
        public function __construct($print)
        {
            $this->render = $print;
            global $config;
            $this->config = $config;
        }

        /**
         * Retourne un tableau formaté pour les différentes balises Mustache de la page d'accueil.
         *
         * @return string[][]
         */
        private function traitement_line(): array
        {
            return 
                [
                    0 => 
                        [
                            'line_id' => "1",
                            'line_left_content' => "Morgan MINBIELLE",
                            'line_right_content' => "Morgan MINBIELLE",
                            'line_span_class' => "spanSlow"
                        ],
                    1 => 
                        [
                            'line_id' =>  "2",
                            'line_left_content' => "Alternant Développeur",
                            'line_right_content' => "Alternant Développeur",
                            'line_span_class' => "spanFast"
                        ],
                    2 => 
                        [
                            'line_id' => "3",
                            'line_left_content' => "UPEC / Ecole Polytechnique",
                            'line_right_content' => "UPEC / Ecole Polytechnique",
                            'line_span_class' => "spanSlow"
                        ],
                    3 => 
                        [
                            'line_id' => "4",
                            'line_left_content' => "Master M1 Pro",
                            'line_right_content' => "Master M1 Pro",
                            'line_span_class' => "spanFast"
                        ]
                ];
        }

        /**
         * Affichage de la page d'accueil.
         */
        public function traitement_toRender(): void
        {
            $data['line'] = $this->traitement_line();
            
            $data['chemin'] = $this->config['variables']['chemin'];
            $data['accueil'] = true;

            $this->render->action_render($data);
        }

    }

?>