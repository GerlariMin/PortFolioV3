<?php

    /**
     * Classe TexteAccueil
     * Contient l'ensemble du texte à afficher pour la page d'accueil.
     */
    class TexteAccueil
    {
        /**
         * Variables correspondant aux balises Mustache de la page.
         */

        /**
         * @var array
         */
        private array $config;
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

        public function __construct(array $config)
        {
            $this->config = $config;
        }

        /**
         * Fonction texteLignes qui retourne un tableau formaté pour les différentes balises Mustache de la page d'accueil.
         *
         * @return array[]
         */
        private function texteLignes(): array
        {
            return
                [
                    0 =>
                        [
                            $this->line_id => "1",
                            $this->line_left_content => $this->config['auteur']['nomComplet'],
                            $this->line_right_content => $this->config['auteur']['nomComplet'],
                            $this->line_span_class => $this->spanSlow
                        ],
                    1 =>
                        [
                            $this->line_id =>  "2",
                            $this->line_left_content => $this->config['auteur']['titre'],
                            $this->line_right_content => $this->config['auteur']['titre'],
                            $this->line_span_class => $this->spanFast
                        ],
                    2 =>
                        [
                            $this->line_id => "3",
                            $this->line_left_content => $this->config['auteur']['etablissement'],
                            $this->line_right_content => $this->config['auteur']['etablissement'],
                            $this->line_span_class => $this->spanSlow
                        ],
                    3 =>
                        [
                            $this->line_id => "4",
                            $this->line_left_content => $this->config['auteur']['annee'],
                            $this->line_right_content => $this->config['auteur']['annee'],
                            $this->line_span_class => $this->spanFast
                        ]
                ];
        }

        /**
         * Retourne le tableau formaté final utilisé pour générer le rendu intégral.
         *
         * @return array
         */
        public function texteFinal():array
        {
            return
            [
                "line" => $this->texteLignes()
            ];
        }

    }

?>