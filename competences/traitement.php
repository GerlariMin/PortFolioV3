<?php

    class Traitement_Competences
    {

        private Render $render;
        private PDO $bdd;

        /**
         * Traitement_Competences constructor.
         * @param $print
         * @param $db
         */
        public function __construct($print, $db)
        {
            $this->render = $print;
            $this->bdd = $db;
        }

        /**
         * @return array
         */
        public function traitement_blockquote_programmation(): array
        {
            return
                [
                    "programmation-titre" => "Programmation",
                    "programmation-blockquotes" =>
                        [
                            0 =>
                                [
                                    "programmation-blockquotes-fontawesome" => "fab fa-angular",
                                    "programmation-blockquotes-text" => "AngularJS",
                                    "programmation-blockquotes-footer-niveau" => "Notions",
                                    "programmation-blockquotes-footer-apprentissage" => false
                                ],
                            1 =>
                                [
                                    "programmation-blockquotes-fontawesome" => "fas fa-terminal",
                                    "programmation-blockquotes-text" => "Bash",
                                    "programmation-blockquotes-footer-niveau" => "Intermédiaire",
                                    "programmation-blockquotes-footer-apprentissage" => false
                                ],
                            2 =>
                                [
                                    "programmation-blockquotes-fontawesome" => "fab fa-bootstrap",
                                    "programmation-blockquotes-text" => "Boostrap",
                                    "programmation-blockquotes-footer-niveau" => "Bon niveau",
                                    "programmation-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors du cursus (DUT, L3 Pro, M1 Pro)"
                                ],
                            3 =>
                                [
                                    "programmation-blockquotes-fontawesome" => "fab fa-css3-alt",
                                    "programmation-blockquotes-text" => "CSS",
                                    "programmation-blockquotes-footer-niveau" => "Bon niveau",
                                    "programmation-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors du cursus (DUT)"
                                ],
                            4 =>
                                [
                                    "programmation-blockquotes-fontawesome" => "fab fa-html5",
                                    "programmation-blockquotes-text" => "HTML",
                                    "programmation-blockquotes-footer-niveau" => "Avancé",
                                    "programmation-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors du cursus (DUT, L3 Pro)"
                                ],
                            5 =>
                                [
                                    "programmation-blockquotes-fontawesome" => "fab fa-java",
                                    "programmation-blockquotes-text" => "Java",
                                    "programmation-blockquotes-footer-niveau" => "Avancé",
                                    "programmation-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors du cursus (DUT, L3 Pro, M1 Pro)"
                                ],
                            6 =>
                                [
                                    "programmation-blockquotes-fontawesome" => "fab fa-js",
                                    "programmation-blockquotes-text" => "JavaScript",
                                    "programmation-blockquotes-footer-niveau" => "Bon niveau",
                                    "programmation-blockquotes-footer-apprentissage" => false
                                ],
                            7 =>
                                [
                                    "programmation-blockquotes-fontawesome" => "fas fa-code",
                                    "programmation-blockquotes-text" => "Mustache",
                                    "programmation-blockquotes-footer-niveau" => "Bon niveau",
                                    "programmation-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors du cursus (L3 Pro, M1 Pro)"
                                ],
                            8 =>
                                [
                                    "programmation-blockquotes-fontawesome" => "fab fa-php",
                                    "programmation-blockquotes-text" => "PHP",
                                    "programmation-blockquotes-footer-niveau" => "Avancé",
                                    "programmation-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors du cursus (DUT, L3 Pro, M1 Pro)"
                                ],
                            9 =>
                                [
                                    "programmation-blockquotes-fontawesome" => "fas fa-code",
                                    "programmation-blockquotes-text" => "Mustache",
                                    "programmation-blockquotes-footer-niveau" => "Bon niveau",
                                    "programmation-blockquotes-footer-apprentissage" => false
                                ],
                            10 =>
                                [
                                    "programmation-blockquotes-fontawesome" => "fas fa-terminal",
                                    "programmation-blockquotes-text" => "Bash",
                                    "programmation-blockquotes-footer-niveau" => "Intermédiaire",
                                    "programmation-blockquotes-footer-apprentissage" => false
                                ],
                            11 =>
                                [
                                    "programmation-blockquotes-fontawesome" => "fas fa-terminal",
                                    "programmation-blockquotes-text" => "Bash",
                                    "programmation-blockquotes-footer-niveau" => "Intermédiaire",
                                    "programmation-blockquotes-footer-apprentissage" => false
                                ],
                            12 =>
                                [
                                    "programmation-blockquotes-fontawesome" => "fas fa-terminal",
                                    "programmation-blockquotes-text" => "Bash",
                                    "programmation-blockquotes-footer-niveau" => "Intermédiaire",
                                    "programmation-blockquotes-footer-apprentissage" => false
                                ],
                            13 =>
                                [
                                    "programmation-blockquotes-fontawesome" => "fas fa-terminal",
                                    "programmation-blockquotes-text" => "Bash",
                                    "programmation-blockquotes-footer-niveau" => "Intermédiaire",
                                    "programmation-blockquotes-footer-apprentissage" => false
                                ]
                        ]
                ];
        }

        /**
         * @return array
         */
        public function traitement_blockquote_conception(): array
        {
            return
                [
                    "conception-titre" => "Conception / Logiciel",
                    "conception-blockquotes" =>
                        [
                            0 =>
                                [
                                    "conception-blockquotes-fontawesome" => "fas fa-laptop-code",
                                    "conception-blockquotes-text" => "Atom",
                                    "conception-blockquotes-footer-niveau" => false,
                                    "conception-blockquotes-footer-apprentissage" => "Apprentissage autodidacte"
                                ],
                            1 =>
                                [
                                    "conception-blockquotes-fontawesome" => "fab fa-android",
                                    "conception-blockquotes-text" => "Android Studio",
                                    "conception-blockquotes-footer-niveau" => false,
                                    "conception-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors de mon cursus (DUT)"
                                ],
                            2 =>
                                [
                                    "conception-blockquotes-fontawesome" => "fas fa-laptop-code",
                                    "conception-blockquotes-text" => "CoqIDE",
                                    "conception-blockquotes-footer-niveau" => false,
                                    "conception-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors de mon cursus (M1 Pro)"
                                ],
                            3 =>
                                [
                                    "conception-blockquotes-fontawesome" => "fas fa-laptop-code",
                                    "conception-blockquotes-text" => "Diagrammes (cas d'utilisation, PERT, GANTT)",
                                    "conception-blockquotes-footer-niveau" => false,
                                    "conception-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors de mon cursus (DUT)"
                                ],
                            4 =>
                                [
                                    "conception-blockquotes-fontawesome" => "fas fa-laptop-code",
                                    "conception-blockquotes-text" => "Eclipse",
                                    "conception-blockquotes-footer-niveau" => false,
                                    "conception-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors de mon cursus (DUT, L3 Pro, M1 Pro)"
                                ],
                            5 =>
                                [
                                    "conception-blockquotes-fontawesome" => "fas fa-laptop-code",
                                    "conception-blockquotes-text" => "Modèle-Vue-Contrôleur (MVC)",
                                    "conception-blockquotes-footer-niveau" => false,
                                    "conception-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors de mon cursus (DUT)"
                                ],
                            6 =>
                                [
                                    "conception-blockquotes-fontawesome" => "fas fa-laptop-code",
                                    "conception-blockquotes-text" => "PHPStorm",
                                    "conception-blockquotes-footer-niveau" => false,
                                    "conception-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors de mon cursus (L3 Pro, M1 Pro)"
                                ],
                            7 =>
                                [
                                    "conception-blockquotes-fontawesome" => "fab fa-windows",
                                    "conception-blockquotes-text" => "Visual Studio",
                                    "conception-blockquotes-footer-niveau" => false,
                                    "conception-blockquotes-footer-apprentissage" => "Apprentissage autodidacte"
                                ],
                            8 =>
                                [
                                    "conception-blockquotes-fontawesome" => "fab fa-windows",
                                    "conception-blockquotes-text" => "Visual Studio Code",
                                    "conception-blockquotes-footer-niveau" => false,
                                    "conception-blockquotes-footer-apprentissage" => "Apprentissage autodidacte"
                                ]
                        ]
                ];
        }

        /**
         * @return array
         */
        public function traitement_blockquote_langues(): array
        {
            return
                [
                    "langues-titre" => "Langues",
                    "langues-blockquotes" =>
                        [
                            0 =>
                                [
                                    "langues-blockquotes-fontawesome" => "fas fa-language",
                                    "langues-blockquotes-text" => "Anglais",
                                    "langues-blockquotes-footer-niveau" => "Opérationnel",
                                    "langues-blockquotes-footer-apprentissage" => false
                                ],
                            1 =>
                                [
                                    "langues-blockquotes-fontawesome" => "fas fa-language",
                                    "langues-blockquotes-text" => "Espagnol",
                                    "langues-blockquotes-footer-niveau" => "Débutant",
                                    "langues-blockquotes-footer-apprentissage" => false
                                ]
                        ]
                ];
        }

        public function traitement_toRender()
        {
            $data['programmation'] = $this->traitement_blockquote_programmation();
            $data['conception'] = $this->traitement_blockquote_conception();
            $data['langues'] = $this->traitement_blockquote_langues();

            $data['chemin'] = "../";
            $data['competences'] = true;
            
            $this->render->action_render($data);
        }

    }

?>