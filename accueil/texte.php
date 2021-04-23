<?php

    /**
     * Class TexteAccueil
     */
    class TextHome
    {
        /**
         * @var String line_id
         */
        private String $line_id = "line_id";
        /**
         * @var String line_left_content
         */
        private String $line_left_content = "line_left_content";
        /**
         * @var String line_right_content
         */
        private String $line_right_content = "line_right_content";
        /**
         * @var String line_span_class
         */
        private String $line_span_class = "line_span_class";
        /**
         * @var string spanFast
         */
        private String $spanFast = "spanFast";
        /**
         * @var string spanSlow
         */
        private String $spanSlow = "spanSlow";

        /**
         * Retourne un tableau formaté pour les différentes balises Mustache de la page d'accueil.
         *
         * @param $config
         * @return array[]
         */
        public function textLine($config): array
        {
            return
                [
                    0 =>
                        [
                            $this->line_id => "1",
                            $this->line_left_content => $config['auteur']['nomComplet'],
                            $this->line_right_content => $config['auteur']['nomComplet'],
                            $this->line_span_class => $this->spanSlow
                        ],
                    1 =>
                        [
                            $this->line_id =>  "2",
                            $this->line_left_content => $config['auteur']['titre'],
                            $this->line_right_content => $config['auteur']['titre'],
                            $this->line_span_class => $this->spanFast
                        ],
                    2 =>
                        [
                            $this->line_id => "3",
                            $this->line_left_content => $config['auteur']['etablissement'],
                            $this->line_right_content => $config['auteur']['etablissement'],
                            $this->line_span_class => $this->spanSlow
                        ],
                    3 =>
                        [
                            $this->line_id => "4",
                            $this->line_left_content => $config['auteur']['annee'],
                            $this->line_right_content => $config['auteur']['annee'],
                            $this->line_span_class => $this->spanFast
                        ]
                ];
        }

    }

?>