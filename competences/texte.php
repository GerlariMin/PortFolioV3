<?php

    /**
     * Class TextSkills
     */
    class TextSkills
    {
        /**
         * @var string
         */
        private String $conception_blockquotes = "conception-blockquotes";
        /**
         * @var string
         */
        private String $conception_blockquotes_fontawesome = "conception-blockquotes-fontawesome";
        /**
         * @var string
         */
        private String $conception_blockquotes_footer_niveau = "conception-blockquotes-footer-niveau";
        /**
         * @var string
         */
        private String $conception_blockquotes_text = "conception-blockquotes-text";
        /**
         * @var string
         */
        private String $conception_blockquotes_footer_apprentissage = "conception-blockquotes-footer-apprentissage";
        /**
         * @var string
         */
        private String $conception_titre = "conception-titre";
        /**
         * @var string
         */
        private String $ide_blockquotes = "ide-blockquotes";
        /**
         * @var string
         */
        private String $ide_blockquotes_fontawesome = "ide-blockquotes-fontawesome";
        /**
         * @var string
         */
        private String $ide_blockquotes_text = "ide-blockquotes-text";
        /**
         * @var string
         */
        private String $ide_blockquotes_footer_apprentissage = "ide-blockquotes-footer-apprentissage";
        /**
         * @var string
         */
        private String $ide_blockquotes_footer_niveau = "ide-blockquotes-footer-niveau";
        /**
         * @var string
         */
        private String $ide_titre = "ide-titre";
        /**
         * @var string
         */
        private String $programmation_titre = "programmation-titre";
        /**
         * @var string
         */
        private String $programmation_blockquotes = "programmation-blockquotes";
        /**
         * @var string
         */
        private String $programmation_blockquotes_fontawesome = "programmation-blockquotes-fontawesome";
        /**
         * @var string
         */
        private String $programmation_blockquotes_text = "programmation-blockquotes-text";
        /**
         * @var string
         */
        private String $programmation_blockquotes_footer_niveau = "programmation-blockquotes-footer-niveau";
        /**
         * @var string
         */
        private String $programmation_blockquotes_footer_apprentissage = "programmation-blockquotes-footer-apprentissage";
        /**
         * @var string
         */
        private String $svg_dragon_scales = "svg-dragon-scales";
        /**
         * @var string
         */
        private String $svg_potruding_squares = "svg-potruding-squares";
        /**
         * @var string
         */
        private String $svg_rainbow_vortex = "svg-rainbow-vortex";

        /**
         * Retourne un tableau formaté pour les différentes balises Mustache de la section Conception de la page Comptétences.
         *
         * @return array
         */
        public function textConception(): array
        {
            return
                [
                    $this->conception_titre => "Conception",
                    $this->conception_blockquotes =>
                        [
                            0 =>
                                [
                                    $this->conception_blockquotes_fontawesome => "fas fa-calendar-week",
                                    $this->conception_blockquotes_text => "GANTT",
                                    $this->conception_blockquotes_footer_niveau => false,
                                    $this->conception_blockquotes_footer_apprentissage => "Apprentissage approfondi lors de mon cursus (DUT)"
                                ],
                            1 =>
                                [
                                    $this->conception_blockquotes_fontawesome => "fas fa-digital-tachograph",
                                    $this->conception_blockquotes_text => "Modèle-Vue-Contrôleur (MVC)",
                                    $this->conception_blockquotes_footer_niveau => false,
                                    $this->conception_blockquotes_footer_apprentissage => "Apprentissage approfondi lors de mon cursus (DUT)"
                                ],
                            2 =>
                                [
                                    $this->conception_blockquotes_fontawesome => "fas fa-digital-tachograph",
                                    $this->conception_blockquotes_text => "Orienté objet",
                                    $this->conception_blockquotes_footer_niveau => false,
                                    $this->conception_blockquotes_footer_apprentissage => "Apprentissage approfondi lors de mon cursus (DUT, L3 Pro, M1 Pro)"
                                ],
                            3 =>
                                [
                                    $this->conception_blockquotes_fontawesome => "fas fa-project-diagram",
                                    $this->conception_blockquotes_text => "PERT",
                                    $this->conception_blockquotes_footer_niveau => false,
                                    $this->conception_blockquotes_footer_apprentissage => "Apprentissage approfondi lors de mon cursus (DUT)"
                                ],
                            4 =>
                                [
                                    $this->conception_blockquotes_fontawesome => "fas fa-project-diagram",
                                    $this->conception_blockquotes_text => "UML",
                                    $this->conception_blockquotes_footer_niveau => false,
                                    $this->conception_blockquotes_footer_apprentissage => "Apprentissage approfondi lors de mon cursus (DUT)"
                                ]
                        ]
                ];
        }

        /**
         * Retourne un tableau formaté pour les différentes balises Mustache de la section IDE de la page Comptétences.
         *
         * @return array
         */
        public function textIDE(): array
        {
            return
                [
                    $this->ide_titre => "IDE",
                    $this->ide_blockquotes =>
                        [
                            0 =>
                                [
                                    $this->ide_blockquotes_fontawesome => "fas fa-laptop-code",
                                    $this->ide_blockquotes_text => "Anaconda",
                                    $this->ide_blockquotes_footer_niveau => false,
                                    $this->ide_blockquotes_footer_apprentissage => "Apprentissage autodidacte"
                                ],
                            1 =>
                                [
                                    $this->ide_blockquotes_fontawesome => "fab fa-android",
                                    $this->ide_blockquotes_text => "Android Studio",
                                    $this->ide_blockquotes_footer_niveau => false,
                                    $this->ide_blockquotes_footer_apprentissage => "Apprentissage approfondi lors de mon cursus (DUT)"
                                ],
                            2 =>
                                [
                                    $this->ide_blockquotes_fontawesome => "fas fa-atom",
                                    $this->ide_blockquotes_text => "Atom",
                                    $this->ide_blockquotes_footer_niveau => false,
                                    $this->ide_blockquotes_footer_apprentissage => "Apprentissage autodidacte"
                                ],
                            3 =>
                                [
                                    $this->ide_blockquotes_fontawesome => "fas fa-laptop-code",
                                    $this->ide_blockquotes_text => "CoqIDE",
                                    $this->ide_blockquotes_footer_niveau => false,
                                    $this->ide_blockquotes_footer_apprentissage => "Apprentissage approfondi lors de mon cursus (M1 Pro)"
                                ],
                            4 =>
                                [
                                    $this->ide_blockquotes_fontawesome => "fas fa-laptop-code",
                                    $this->ide_blockquotes_text => "Eclipse",
                                    $this->ide_blockquotes_footer_niveau => false,
                                    $this->ide_blockquotes_footer_apprentissage => "Apprentissage approfondi lors de mon cursus (DUT, L3 Pro, M1 Pro)"
                                ],
                            5 =>
                                [
                                    $this->ide_blockquotes_fontawesome => "fas fa-calendar-week",
                                    $this->ide_blockquotes_text => "GanttProject",
                                    $this->ide_blockquotes_footer_niveau => false,
                                    $this->ide_blockquotes_footer_apprentissage => "Apprentissage approfondi lors de mon cursus (DUT, L3 Pro, M1 Pro)"
                                ],
                            6 =>
                                [
                                    $this->ide_blockquotes_fontawesome => "fab fa-git-alt",
                                    $this->ide_blockquotes_text => "Git Bash",
                                    $this->ide_blockquotes_footer_niveau => false,
                                    $this->ide_blockquotes_footer_apprentissage => "Apprentissage approfondi lors de mon cursus (DUT, L3 Pro, M1 Pro)"
                                ],
                            7 =>
                                [
                                    $this->ide_blockquotes_fontawesome => "fab fa-php",
                                    $this->ide_blockquotes_text => "PHPStorm",
                                    $this->ide_blockquotes_footer_niveau => false,
                                    $this->ide_blockquotes_footer_apprentissage => "Apprentissage approfondi lors de mon cursus (L3 Pro, M1 Pro)"
                                ],
                            8 =>
                                [
                                    $this->ide_blockquotes_fontawesome => "fab fa-windows",
                                    $this->ide_blockquotes_text => "Visual Studio",
                                    $this->ide_blockquotes_footer_niveau => false,
                                    $this->ide_blockquotes_footer_apprentissage => "Apprentissage autodidacte"
                                ],
                            9 =>
                                [
                                    $this->ide_blockquotes_fontawesome => "fab fa-windows",
                                    $this->ide_blockquotes_text => "Visual Studio Code",
                                    $this->ide_blockquotes_footer_niveau => false,
                                    $this->ide_blockquotes_footer_apprentissage => "Apprentissage autodidacte"
                                ],
                            10 =>
                                [
                                    $this->ide_blockquotes_fontawesome => "fas fa-server",
                                    $this->ide_blockquotes_text => "Wampserver",
                                    $this->ide_blockquotes_footer_niveau => false,
                                    $this->ide_blockquotes_footer_apprentissage => "Apprentissage autodidacte"
                                ]
                        ]
                ];
        }

        /**
         * Retourne un tableau formaté pour les différentes balises Mustache de la section Programmation de la page Comptétences.
         *
         * @return array
         */
        public function textProgrammation(): array
        {
            return
            [
                $this->programmation_titre => "Programmation",
                $this->programmation_blockquotes =>
                [
                    0 =>
                        [
                            $this->programmation_blockquotes_fontawesome => "fab fa-angular",
                            $this->programmation_blockquotes_text => "AngularJS",
                            $this->programmation_blockquotes_footer_niveau => "Notions",
                            $this->programmation_blockquotes_footer_apprentissage => false
                        ],
                    1 =>
                        [
                            $this->programmation_blockquotes_fontawesome => "fas fa-terminal",
                            $this->programmation_blockquotes_text => "Bash",
                            $this->programmation_blockquotes_footer_niveau => "Intermédiaire",
                            $this->programmation_blockquotes_footer_apprentissage => false
                        ],
                    2 =>
                        [
                            $this->programmation_blockquotes_fontawesome => "fab fa-bootstrap",
                            $this->programmation_blockquotes_text => "Boostrap",
                            $this->programmation_blockquotes_footer_niveau => "Bon niveau",
                            $this->programmation_blockquotes_footer_apprentissage => "Apprentissage approfondi lors du cursus (DUT, L3 Pro, M1 Pro)"
                        ],
                    3 =>
                        [
                            $this->programmation_blockquotes_fontawesome => "fas fa-code",
                            $this->programmation_blockquotes_text => "C/ C++",
                            $this->programmation_blockquotes_footer_niveau => "Intermédiaire",
                            $this->programmation_blockquotes_footer_apprentissage => "Apprentissage approfondi lors du cursus (DUT, M1 Pro)"
                        ],
                    4 =>
                        [
                            $this->programmation_blockquotes_fontawesome => "fas fa-terminal",
                            $this->programmation_blockquotes_text => "Cordova",
                            $this->programmation_blockquotes_footer_niveau => "Intermédiaire",
                            $this->programmation_blockquotes_footer_apprentissage => "Apprentissage approfondi lors du cursus (L3 Pro)"
                        ],
                    5 =>
                        [
                            $this->programmation_blockquotes_fontawesome => "fab fa-css3-alt",
                            $this->programmation_blockquotes_text => "CSS",
                            $this->programmation_blockquotes_footer_niveau => "Bon niveau",
                            $this->programmation_blockquotes_footer_apprentissage => "Apprentissage approfondi lors du cursus (DUT)"
                        ],
                    6 =>
                        [
                            $this->programmation_blockquotes_fontawesome => "fas fa-code",
                            $this->programmation_blockquotes_text => "C#",
                            $this->programmation_blockquotes_footer_niveau => "Notions",
                            $this->programmation_blockquotes_footer_apprentissage => "Apprentissage autodidacte"
                        ],
                    7 =>
                        [
                            $this->programmation_blockquotes_fontawesome => "fab fa-github-square",
                            $this->programmation_blockquotes_text => "GitHub",
                            $this->programmation_blockquotes_footer_niveau => "Bon niveau",
                            $this->programmation_blockquotes_footer_apprentissage => "Apprentissage approfondi lors du cursus (DUT, L3 Pro, M1 Pro)"
                        ],
                    8 =>
                        [
                            $this->programmation_blockquotes_fontawesome => "fab fa-html5",
                            $this->programmation_blockquotes_text => "HTML",
                            $this->programmation_blockquotes_footer_niveau => "Avancé",
                            $this->programmation_blockquotes_footer_apprentissage => "Apprentissage approfondi lors du cursus (DUT, L3 Pro)"
                        ],
                    9 =>
                        [
                            $this->programmation_blockquotes_fontawesome => "fab fa-java",
                            $this->programmation_blockquotes_text => "Java",
                            $this->programmation_blockquotes_footer_niveau => "Avancé",
                            $this->programmation_blockquotes_footer_apprentissage => "Apprentissage approfondi lors du cursus (DUT, L3 Pro, M1 Pro)"
                        ],
                    10 =>
                        [
                            $this->programmation_blockquotes_fontawesome => "fab fa-js",
                            $this->programmation_blockquotes_text => "JavaScript",
                            $this->programmation_blockquotes_footer_niveau => "Bon niveau",
                            $this->programmation_blockquotes_footer_apprentissage => false
                        ],
                    11 =>
                        [
                            $this->programmation_blockquotes_fontawesome => "fas fa-code",
                            $this->programmation_blockquotes_text => "Mustache",
                            $this->programmation_blockquotes_footer_niveau => "Bon niveau",
                            $this->programmation_blockquotes_footer_apprentissage => "Apprentissage approfondi lors du cursus (L3 Pro, M1 Pro)"
                        ],
                    12 =>
                        [
                            $this->programmation_blockquotes_fontawesome => "fas fa-code",
                            $this->programmation_blockquotes_text => "OCaml",
                            $this->programmation_blockquotes_footer_niveau => "Notions",
                            $this->programmation_blockquotes_footer_apprentissage => "Apprentissage approfondi lors du cursus (M1 Pro)"
                        ],
                    13 =>
                        [
                            $this->programmation_blockquotes_fontawesome => "fab fa-php",
                            $this->programmation_blockquotes_text => "PHP",
                            $this->programmation_blockquotes_footer_niveau => "Avancé",
                            $this->programmation_blockquotes_footer_apprentissage => "Apprentissage approfondi lors du cursus (DUT, L3 Pro, M1 Pro)"
                        ],
                    14 =>
                        [
                            $this->programmation_blockquotes_fontawesome => "fab fa-python",
                            $this->programmation_blockquotes_text => "Python",
                            $this->programmation_blockquotes_footer_niveau => "Bon niveau",
                            $this->programmation_blockquotes_footer_apprentissage => "Apprentissage approfondi lors du cursus (DUT, M1 Pro)"
                        ],
                    15 =>
                        [
                            $this->programmation_blockquotes_fontawesome => "fab fa-react",
                            $this->programmation_blockquotes_text => "React Native",
                            $this->programmation_blockquotes_footer_niveau => "Bases",
                            $this->programmation_blockquotes_footer_apprentissage => "Apprentissage autodidacte)"
                        ],
                    16 =>
                        [
                            $this->programmation_blockquotes_fontawesome => "fas fa-database",
                            $this->programmation_blockquotes_text => "SQL/ PlPgSQL",
                            $this->programmation_blockquotes_footer_niveau => "Bon niveau",
                            $this->programmation_blockquotes_footer_apprentissage => "Apprentissage approfondi lors du cursus (DUT, L3 Pro, M1 Pro)"
                        ],
                    17 =>
                        [
                            $this->programmation_blockquotes_fontawesome => "fas fa-database",
                            $this->programmation_blockquotes_text => "SQLite",
                            $this->programmation_blockquotes_footer_niveau => "Bon niveau",
                            $this->programmation_blockquotes_footer_apprentissage => "Apprentissage approfondi lors du cursus (DUT, L3 Pro, M1 Pro)"
                        ]
                ]
            ];
        }

    }

?>