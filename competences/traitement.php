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
                                    "programmation-blockquotes-fontawesome" => "fas fa-code",
                                    "programmation-blockquotes-text" => "C/ C++",
                                    "programmation-blockquotes-footer-niveau" => "Intermédiaire",
                                    "programmation-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors du cursus (DUT, M1 Pro)"
                                ],
                            4 =>
                                [
                                    "programmation-blockquotes-fontawesome" => "fas fa-terminal",
                                    "programmation-blockquotes-text" => "Cordova",
                                    "programmation-blockquotes-footer-niveau" => "Intermédiaire",
                                    "programmation-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors du cursus (L3 Pro)"
                                ],
                            5 =>
                                [
                                    "programmation-blockquotes-fontawesome" => "fab fa-css3-alt",
                                    "programmation-blockquotes-text" => "CSS",
                                    "programmation-blockquotes-footer-niveau" => "Bon niveau",
                                    "programmation-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors du cursus (DUT)"
                                ],
                            6 =>
                                [
                                    "programmation-blockquotes-fontawesome" => "fas fa-code",
                                    "programmation-blockquotes-text" => "C#",
                                    "programmation-blockquotes-footer-niveau" => "Notions",
                                    "programmation-blockquotes-footer-apprentissage" => "Apprentissage autodidacte"
                                ],
                            7 =>
                                [
                                    "programmation-blockquotes-fontawesome" => "fab fa-github-square",
                                    "programmation-blockquotes-text" => "GitHub",
                                    "programmation-blockquotes-footer-niveau" => "Bon niveau",
                                    "programmation-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors du cursus (DUT, L3 Pro, M1 Pro)"
                                ],
                            8 =>
                                [
                                    "programmation-blockquotes-fontawesome" => "fab fa-html5",
                                    "programmation-blockquotes-text" => "HTML",
                                    "programmation-blockquotes-footer-niveau" => "Avancé",
                                    "programmation-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors du cursus (DUT, L3 Pro)"
                                ],
                            9 =>
                                [
                                    "programmation-blockquotes-fontawesome" => "fab fa-java",
                                    "programmation-blockquotes-text" => "Java",
                                    "programmation-blockquotes-footer-niveau" => "Avancé",
                                    "programmation-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors du cursus (DUT, L3 Pro, M1 Pro)"
                                ],
                            10 =>
                                [
                                    "programmation-blockquotes-fontawesome" => "fab fa-js",
                                    "programmation-blockquotes-text" => "JavaScript",
                                    "programmation-blockquotes-footer-niveau" => "Bon niveau",
                                    "programmation-blockquotes-footer-apprentissage" => false
                                ],
                            11 =>
                                [
                                    "programmation-blockquotes-fontawesome" => "fas fa-code",
                                    "programmation-blockquotes-text" => "Mustache",
                                    "programmation-blockquotes-footer-niveau" => "Bon niveau",
                                    "programmation-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors du cursus (L3 Pro, M1 Pro)"
                                ],
                            12 =>
                                [
                                    "programmation-blockquotes-fontawesome" => "fas fa-code",
                                    "programmation-blockquotes-text" => "OCaml",
                                    "programmation-blockquotes-footer-niveau" => "Notions",
                                    "programmation-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors du cursus (M1 Pro)"
                                ],
                            13 =>
                                [
                                    "programmation-blockquotes-fontawesome" => "fab fa-php",
                                    "programmation-blockquotes-text" => "PHP",
                                    "programmation-blockquotes-footer-niveau" => "Avancé",
                                    "programmation-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors du cursus (DUT, L3 Pro, M1 Pro)"
                                ],
                            14 =>
                                [
                                    "programmation-blockquotes-fontawesome" => "fab fa-python",
                                    "programmation-blockquotes-text" => "Python",
                                    "programmation-blockquotes-footer-niveau" => "Bon niveau",
                                    "programmation-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors du cursus (DUT, M1 Pro)"
                                ],
                            15 =>
                                [
                                    "programmation-blockquotes-fontawesome" => "fab fa-react",
                                    "programmation-blockquotes-text" => "React Native",
                                    "programmation-blockquotes-footer-niveau" => "Bases",
                                    "programmation-blockquotes-footer-apprentissage" => "Apprentissage autodidacte)"
                                ],
                            16 =>
                                [
                                    "programmation-blockquotes-fontawesome" => "fas fa-database",
                                    "programmation-blockquotes-text" => "SQL/ PlPgSQL",
                                    "programmation-blockquotes-footer-niveau" => "Bon niveau",
                                    "programmation-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors du cursus (DUT, L3 Pro, M1 Pro)"
                                ],
                            17 =>
                                [
                                    "programmation-blockquotes-fontawesome" => "fas fa-database",
                                    "programmation-blockquotes-text" => "SQLite",
                                    "programmation-blockquotes-footer-niveau" => "Bon niveau",
                                    "programmation-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors du cursus (DUT, L3 Pro, M1 Pro)"
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
                    "conception-titre" => "Conception",
                    "conception-blockquotes" =>
                        [
                            0 =>
                                [
                                    "conception-blockquotes-fontawesome" => "fas fa-calendar-week",
                                    "conception-blockquotes-text" => "GANTT",
                                    "conception-blockquotes-footer-niveau" => false,
                                    "conception-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors de mon cursus (DUT)"
                                ],
                            1 =>
                                [
                                    "conception-blockquotes-fontawesome" => "fas fa-laptop-code",
                                    "conception-blockquotes-text" => "Modèle-Vue-Contrôleur (MVC)",
                                    "conception-blockquotes-footer-niveau" => false,
                                    "conception-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors de mon cursus (DUT)"
                                ],
                            2 =>
                                [
                                    "conception-blockquotes-fontawesome" => "fas fa-laptop-code",
                                    "conception-blockquotes-text" => "Orienté objet",
                                    "conception-blockquotes-footer-niveau" => false,
                                    "conception-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors de mon cursus (DUT, L3 Pro, M1 Pro)"
                                ],
                            3 =>
                                [
                                    "conception-blockquotes-fontawesome" => "fas fa-project-diagram",
                                    "conception-blockquotes-text" => "PERT",
                                    "conception-blockquotes-footer-niveau" => false,
                                    "conception-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors de mon cursus (DUT)"
                                ],
                            4 =>
                                [
                                    "conception-blockquotes-fontawesome" => "fas fa-project-diagram",
                                    "conception-blockquotes-text" => "UML",
                                    "conception-blockquotes-footer-niveau" => false,
                                    "conception-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors de mon cursus (DUT)"
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
                    "ide-titre" => "IDE",
                    "ide-blockquotes" =>
                        [
                            0 =>
                                [
                                    "ide-blockquotes-fontawesome" => "fas fa-laptop-code",
                                    "ide-blockquotes-text" => "Anaconda",
                                    "ide-blockquotes-footer-niveau" => false,
                                    "ide-blockquotes-footer-apprentissage" => "Apprentissage autodidacte"
                                ],
                            1 =>
                                [
                                    "ide-blockquotes-fontawesome" => "fab fa-android",
                                    "ide-blockquotes-text" => "Android Studio",
                                    "ide-blockquotes-footer-niveau" => false,
                                    "ide-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors de mon cursus (DUT)"
                                ],
                            2 =>
                                [
                                    "ide-blockquotes-fontawesome" => "fas fa-atom",
                                    "ide-blockquotes-text" => "Atom",
                                    "ide-blockquotes-footer-niveau" => false,
                                    "ide-blockquotes-footer-apprentissage" => "Apprentissage autodidacte"
                                ],
                            3 =>
                                [
                                    "ide-blockquotes-fontawesome" => "fas fa-laptop-code",
                                    "ide-blockquotes-text" => "CoqIDE",
                                    "ide-blockquotes-footer-niveau" => false,
                                    "ide-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors de mon cursus (M1 Pro)"
                                ],
                            4 =>
                                [
                                    "ide-blockquotes-fontawesome" => "fas fa-laptop-code",
                                    "ide-blockquotes-text" => "Eclipse",
                                    "ide-blockquotes-footer-niveau" => false,
                                    "ide-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors de mon cursus (DUT, L3 Pro, M1 Pro)"
                                ],
                            5 =>
                                [
                                    "ide-blockquotes-fontawesome" => "fas fa-calendar-week",
                                    "ide-blockquotes-text" => "GanttProject",
                                    "ide-blockquotes-footer-niveau" => false,
                                    "ide-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors de mon cursus (DUT, L3 Pro, M1 Pro)"
                                ],
                            6 =>
                                [
                                    "ide-blockquotes-fontawesome" => "fab fa-git-alt",
                                    "ide-blockquotes-text" => "Git Bash",
                                    "ide-blockquotes-footer-niveau" => false,
                                    "ide-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors de mon cursus (DUT, L3 Pro, M1 Pro)"
                                ],
                            7 =>
                                [
                                    "ide-blockquotes-fontawesome" => "fas fa-laptop-code",
                                    "ide-blockquotes-text" => "PHPStorm",
                                    "ide-blockquotes-footer-niveau" => false,
                                    "ide-blockquotes-footer-apprentissage" => "Apprentissage approfondi lors de mon cursus (L3 Pro, M1 Pro)"
                                ],
                            8 =>
                                [
                                    "ide-blockquotes-fontawesome" => "fab fa-windows",
                                    "ide-blockquotes-text" => "Visual Studio",
                                    "ide-blockquotes-footer-niveau" => false,
                                    "ide-blockquotes-footer-apprentissage" => "Apprentissage autodidacte"
                                ],
                            9 =>
                                [
                                    "ide-blockquotes-fontawesome" => "fab fa-windows",
                                    "ide-blockquotes-text" => "Visual Studio Code",
                                    "ide-blockquotes-footer-niveau" => false,
                                    "ide-blockquotes-footer-apprentissage" => "Apprentissage autodidacte"
                                ],
                            10 =>
                                [
                                    "ide-blockquotes-fontawesome" => "fas fa-server",
                                    "ide-blockquotes-text" => "Wampserver",
                                    "ide-blockquotes-footer-niveau" => false,
                                    "ide-blockquotes-footer-apprentissage" => "Apprentissage autodidacte"
                                ]
                        ]
                ];
        }

        public function traitement_toRender()
        {
            $data['programmation'] = $this->traitement_blockquote_programmation();
            $data['conception'] = $this->traitement_blockquote_conception();
            $data['ide'] = $this->traitement_blockquote_langues();

            $data['chemin'] = "../";
            $data['competences'] = true;
            
            $this->render->action_render($data);
        }

    }

?>