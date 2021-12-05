<?php

    /**
     * Classe TexteCompetences
     * Contient l'ensemble du texte à afficher pour la page des compétences.
     */
    class TexteCompetences
    {
        /**
         * Variables correspondant aux balises Mustache de la page.
         */

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
        private String $fa_android = "fab fa-android";
        /**
         * @var string
         */
        private String $fa_angular = "fab fa-angular";
        /**
         * @var string
         */
        private String $fa_atom = "fas fa-atom";
        /**
         * @var string
         */
        private String $fa_bootstrap = "fab fa-bootstrap";
        /**
         * @var string
         */
        private String $fa_calendar_week = "fas fa-calendar-week";
        private String $fa_css3_alt = "fab fa-css3-alt";
        private String $fa_code = "fas fa-code";
        private String $fa_database = "fas fa-database";
        private String $fa_digital_tachograph = "fas fa-digital-tachograph";
        private String $fa_git_alt = "fab fa-git-alt";
        private String $fa_github_square = "fab fa-github-square";
        private String $fa_html5 = "fab fa-html5";
        private String $fa_java = "fab fa-java";
        private String $fa_js = "fab fa-js";
        private String $fa_laptop_code = "fas fa-laptop-code";
        private String $fa_php = "fab fa-php";
        private String $fa_project_diagram = "fas fa-project-diagram";
        private String $fa_python = "fab fa-python";
        private String $fa_react = "fab fa-react";
        private String $fa_server = "fas fa-server";
        private String $fa_terminal = "fas fa-terminal";
        private String $fa_windows = "fab fa-windows";
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
        private String $niveau_apprentissage_autodidacte = "Apprentissage autodidcate";
        /**
         * @var string
         */
        private String $niveau_apprentissage_cursus = "Apprentissage approfondi lors de mon cursus";
        /**
         * @var string
         */
        private String $niveau_avance = "Avancé";
        /**
         * @var string
         */
        private String $niveau_bases = "Bases";
        /**
         * @var string
         */
        private String $niveau_bon_niveau = "Bon niveau";
        /**
         * @var string
         */
        private String $niveau_intermediaire = "Intermédiaire";
        /**
         * @var string
         */
        private String $niveau_notions = "Notions";
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
        private function texteConception(): array
        {
            return
                [
                    $this->conception_titre => "Conception",
                    $this->conception_blockquotes =>
                        [
                            0 =>
                                [
                                    $this->conception_blockquotes_fontawesome => $this->fa_calendar_week,
                                    $this->conception_blockquotes_text => "GANTT",
                                    $this->conception_blockquotes_footer_niveau => false,
                                    $this->conception_blockquotes_footer_apprentissage => $this->niveau_apprentissage_cursus . " (DUT)"
                                ],
                            1 =>
                                [
                                    $this->conception_blockquotes_fontawesome => $this->fa_digital_tachograph,
                                    $this->conception_blockquotes_text => "Modèle-Vue-Contrôleur (MVC)",
                                    $this->conception_blockquotes_footer_niveau => false,
                                    $this->conception_blockquotes_footer_apprentissage => $this->niveau_apprentissage_cursus . " (DUT)"
                                ],
                            2 =>
                                [
                                    $this->conception_blockquotes_fontawesome => $this->fa_digital_tachograph,
                                    $this->conception_blockquotes_text => "Orienté objet",
                                    $this->conception_blockquotes_footer_niveau => false,
                                    $this->conception_blockquotes_footer_apprentissage => $this->niveau_apprentissage_cursus . " (DUT, L3 Pro, M1 Pro)"
                                ],
                            3 =>
                                [
                                    $this->conception_blockquotes_fontawesome => $this->fa_project_diagram,
                                    $this->conception_blockquotes_text => "PERT",
                                    $this->conception_blockquotes_footer_niveau => false,
                                    $this->conception_blockquotes_footer_apprentissage => $this->niveau_apprentissage_cursus . " (DUT)"
                                ],
                            4 =>
                                [
                                    $this->conception_blockquotes_fontawesome => $this->fa_project_diagram,
                                    $this->conception_blockquotes_text => "UML",
                                    $this->conception_blockquotes_footer_niveau => false,
                                    $this->conception_blockquotes_footer_apprentissage => $this->niveau_apprentissage_cursus . " (DUT)"
                                ]
                        ]
                ];
        }

        /**
         * Retourne un tableau formaté pour les différentes balises Mustache de la section IDE de la page Comptétences.
         *
         * @return array
         */
        private function texteOutils(): array
        {
            return
                [
                    $this->ide_titre => "Outils",
                    $this->ide_blockquotes =>
                        [
                            0 =>
                                [
                                    $this->ide_blockquotes_fontawesome => $this->fa_laptop_code,
                                    $this->ide_blockquotes_text => "Anaconda",
                                    $this->ide_blockquotes_footer_niveau => false,
                                    $this->ide_blockquotes_footer_apprentissage => $this->niveau_apprentissage_autodidacte
                                ],
                            1 =>
                                [
                                    $this->ide_blockquotes_fontawesome => $this->fa_android,
                                    $this->ide_blockquotes_text => "Android Studio",
                                    $this->ide_blockquotes_footer_niveau => false,
                                    $this->ide_blockquotes_footer_apprentissage => $this->niveau_apprentissage_cursus . " (DUT)"
                                ],
                            2 =>
                                [
                                    $this->ide_blockquotes_fontawesome => $this->fa_atom,
                                    $this->ide_blockquotes_text => "Atom",
                                    $this->ide_blockquotes_footer_niveau => false,
                                    $this->ide_blockquotes_footer_apprentissage => $this->niveau_apprentissage_autodidacte
                                ],
                            3 =>
                                [
                                    $this->ide_blockquotes_fontawesome => $this->fa_laptop_code,
                                    $this->ide_blockquotes_text => "CoqIDE",
                                    $this->ide_blockquotes_footer_niveau => false,
                                    $this->ide_blockquotes_footer_apprentissage => $this->niveau_apprentissage_cursus . " (M1 Pro)"
                                ],
                            4 =>
                                [
                                    $this->ide_blockquotes_fontawesome => $this->fa_laptop_code,
                                    $this->ide_blockquotes_text => "Eclipse",
                                    $this->ide_blockquotes_footer_niveau => false,
                                    $this->ide_blockquotes_footer_apprentissage => $this->niveau_apprentissage_cursus . " (DUT, L3 Pro, M1 Pro)"
                                ],
                            5 =>
                                [
                                    $this->ide_blockquotes_fontawesome => $this->fa_calendar_week,
                                    $this->ide_blockquotes_text => "GanttProject",
                                    $this->ide_blockquotes_footer_niveau => false,
                                    $this->ide_blockquotes_footer_apprentissage => $this->niveau_apprentissage_cursus . " (DUT, L3 Pro, M1 Pro)"
                                ],
                            6 =>
                                [
                                    $this->ide_blockquotes_fontawesome => $this->fa_git_alt,
                                    $this->ide_blockquotes_text => "Git Bash",
                                    $this->ide_blockquotes_footer_niveau => false,
                                    $this->ide_blockquotes_footer_apprentissage => $this->niveau_apprentissage_cursus . " (DUT, L3 Pro, M1 Pro)"
                                ],
                            7 =>
                                [
                                    $this->ide_blockquotes_fontawesome => $this->fa_php,
                                    $this->ide_blockquotes_text => "PHPStorm",
                                    $this->ide_blockquotes_footer_niveau => false,
                                    $this->ide_blockquotes_footer_apprentissage => $this->niveau_apprentissage_cursus . " (L3 Pro, M1 Pro)"
                                ],
                            8 =>
                                [
                                    $this->ide_blockquotes_fontawesome => $this->fa_windows,
                                    $this->ide_blockquotes_text => "Visual Studio",
                                    $this->ide_blockquotes_footer_niveau => false,
                                    $this->ide_blockquotes_footer_apprentissage => $this->niveau_apprentissage_autodidacte
                                ],
                            9 =>
                                [
                                    $this->ide_blockquotes_fontawesome => $this->fa_windows,
                                    $this->ide_blockquotes_text => "Visual Studio Code",
                                    $this->ide_blockquotes_footer_niveau => false,
                                    $this->ide_blockquotes_footer_apprentissage => $this->niveau_apprentissage_autodidacte
                                ],
                            10 =>
                                [
                                    $this->ide_blockquotes_fontawesome => $this->fa_server,
                                    $this->ide_blockquotes_text => "Wampserver",
                                    $this->ide_blockquotes_footer_niveau => false,
                                    $this->ide_blockquotes_footer_apprentissage => $this->niveau_apprentissage_autodidacte
                                ]
                        ]
                ];
        }

        /**
         * Retourne un tableau formaté pour les différentes balises Mustache de la section Programmation de la page Comptétences.
         *
         * @return array
         */
        private function texteProgrammation(): array
        {
            return
            [
                $this->programmation_titre => "Langages",
                $this->programmation_blockquotes =>
                [
                    0 =>
                        [
                            $this->programmation_blockquotes_fontawesome => $this->fa_angular,
                            $this->programmation_blockquotes_text => "AngularJS",
                            $this->programmation_blockquotes_footer_niveau => $this->niveau_notions,
                            $this->programmation_blockquotes_footer_apprentissage => false
                        ],
                    1 =>
                        [
                            $this->programmation_blockquotes_fontawesome => $this->fa_terminal,
                            $this->programmation_blockquotes_text => "Bash",
                            $this->programmation_blockquotes_footer_niveau => $this->niveau_intermediaire,
                            $this->programmation_blockquotes_footer_apprentissage => false
                        ],
                    2 =>
                        [
                            $this->programmation_blockquotes_fontawesome => $this->fa_bootstrap,
                            $this->programmation_blockquotes_text => "Boostrap",
                            $this->programmation_blockquotes_footer_niveau => $this->niveau_bon_niveau,
                            $this->programmation_blockquotes_footer_apprentissage => $this->niveau_apprentissage_cursus . " (DUT, L3 Pro, M1 Pro)"
                        ],
                    3 =>
                        [
                            $this->programmation_blockquotes_fontawesome => $this->fa_code,
                            $this->programmation_blockquotes_text => "C/ C++",
                            $this->programmation_blockquotes_footer_niveau => $this->niveau_intermediaire,
                            $this->programmation_blockquotes_footer_apprentissage => $this->niveau_apprentissage_cursus . " (DUT, M1 Pro)"
                        ],
                    4 =>
                        [
                            $this->programmation_blockquotes_fontawesome => $this->fa_terminal,
                            $this->programmation_blockquotes_text => "Cordova",
                            $this->programmation_blockquotes_footer_niveau => $this->niveau_intermediaire,
                            $this->programmation_blockquotes_footer_apprentissage => $this->niveau_apprentissage_cursus . " (L3 Pro)"
                        ],
                    5 =>
                        [
                            $this->programmation_blockquotes_fontawesome => $this->fa_css3_alt,
                            $this->programmation_blockquotes_text => "CSS",
                            $this->programmation_blockquotes_footer_niveau => $this->niveau_bon_niveau,
                            $this->programmation_blockquotes_footer_apprentissage => $this->niveau_apprentissage_cursus . " (DUT)"
                        ],
                    6 =>
                        [
                            $this->programmation_blockquotes_fontawesome => $this->fa_code,
                            $this->programmation_blockquotes_text => "C#",
                            $this->programmation_blockquotes_footer_niveau => $this->niveau_notions,
                            $this->programmation_blockquotes_footer_apprentissage => $this->niveau_apprentissage_autodidacte
                        ],
                    7 =>
                        [
                            $this->programmation_blockquotes_fontawesome => $this->fa_github_square,
                            $this->programmation_blockquotes_text => "GitHub",
                            $this->programmation_blockquotes_footer_niveau => $this->niveau_bon_niveau,
                            $this->programmation_blockquotes_footer_apprentissage => $this->niveau_apprentissage_cursus . " (DUT, L3 Pro, M1 Pro)"
                        ],
                    8 =>
                        [
                            $this->programmation_blockquotes_fontawesome => $this->fa_html5,
                            $this->programmation_blockquotes_text => "HTML",
                            $this->programmation_blockquotes_footer_niveau => $this->niveau_avance,
                            $this->programmation_blockquotes_footer_apprentissage => $this->niveau_apprentissage_cursus . " (DUT, L3 Pro)"
                        ],
                    9 =>
                        [
                            $this->programmation_blockquotes_fontawesome => $this->fa_java,
                            $this->programmation_blockquotes_text => "Java",
                            $this->programmation_blockquotes_footer_niveau => $this->niveau_avance,
                            $this->programmation_blockquotes_footer_apprentissage => $this->niveau_apprentissage_cursus . " (DUT, L3 Pro, M1 Pro)"
                        ],
                    10 =>
                        [
                            $this->programmation_blockquotes_fontawesome => $this->fa_js,
                            $this->programmation_blockquotes_text => "JavaScript",
                            $this->programmation_blockquotes_footer_niveau => $this->niveau_bon_niveau,
                            $this->programmation_blockquotes_footer_apprentissage => false
                        ],
                    11 =>
                        [
                            $this->programmation_blockquotes_fontawesome => $this->fa_code,
                            $this->programmation_blockquotes_text => "Mustache",
                            $this->programmation_blockquotes_footer_niveau => $this->niveau_bon_niveau,
                            $this->programmation_blockquotes_footer_apprentissage => $this->niveau_apprentissage_cursus . " (L3 Pro, M1 Pro)"
                        ],
                    12 =>
                        [
                            $this->programmation_blockquotes_fontawesome => $this->fa_code,
                            $this->programmation_blockquotes_text => "OCaml",
                            $this->programmation_blockquotes_footer_niveau => $this->niveau_notions,
                            $this->programmation_blockquotes_footer_apprentissage => $this->niveau_apprentissage_cursus . " (M1 Pro)"
                        ],
                    13 =>
                        [
                            $this->programmation_blockquotes_fontawesome => $this->fa_php,
                            $this->programmation_blockquotes_text => "PHP",
                            $this->programmation_blockquotes_footer_niveau => $this->niveau_avance,
                            $this->programmation_blockquotes_footer_apprentissage => $this->niveau_apprentissage_cursus . " (DUT, L3 Pro, M1 Pro)"
                        ],
                    14 =>
                        [
                            $this->programmation_blockquotes_fontawesome => $this->fa_python,
                            $this->programmation_blockquotes_text => "Python",
                            $this->programmation_blockquotes_footer_niveau => $this->niveau_bon_niveau,
                            $this->programmation_blockquotes_footer_apprentissage => $this->niveau_apprentissage_cursus . " (DUT, M1 Pro)"
                        ],
                    15 =>
                        [
                            $this->programmation_blockquotes_fontawesome => $this->fa_react,
                            $this->programmation_blockquotes_text => "React Native",
                            $this->programmation_blockquotes_footer_niveau => $this->niveau_bases,
                            $this->programmation_blockquotes_footer_apprentissage => "Apprentissage autodidacte)"
                        ],
                    16 =>
                        [
                            $this->programmation_blockquotes_fontawesome => $this->fa_database,
                            $this->programmation_blockquotes_text => "SQL/ PlPgSQL",
                            $this->programmation_blockquotes_footer_niveau => $this->niveau_bon_niveau,
                            $this->programmation_blockquotes_footer_apprentissage => $this->niveau_apprentissage_cursus . " (DUT, L3 Pro, M1 Pro)"
                        ],
                    17 =>
                        [
                            $this->programmation_blockquotes_fontawesome => $this->fa_database,
                            $this->programmation_blockquotes_text => "SQLite",
                            $this->programmation_blockquotes_footer_niveau => $this->niveau_bon_niveau,
                            $this->programmation_blockquotes_footer_apprentissage => $this->niveau_apprentissage_cursus . " (DUT, L3 Pro, M1 Pro)"
                        ]
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
                "programmation" => $this->texteProgrammation(),
                "conception" => $this->texteConception(),
                "ide" => $this->texteOutils(),
            ];
        }

    }
