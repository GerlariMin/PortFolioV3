<?php

    class Traitement_Accueil
    {

        private Render $render;
        private $config;

        /**
         * Traitement_Accueil constructor.
         * @param $print
         * @param $db
         */
        public function __construct($print)
        {
            $this->render = $print;
            global $config;
            $this->config = $config;
        }

        /**
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

        public function traitement_toRender()
        {
            $data['line'] = $this->traitement_line();
            
            $data['chemin'] = $this->config['variables']['chemin'];
            $data['accueil'] = true;
            
            $this->render->action_render($data);
        }

    }

?>