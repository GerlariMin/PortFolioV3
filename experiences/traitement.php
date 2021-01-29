<?php

    class Traitement_Experiences
    {

        private Render $render;
        private PDO $bdd;

        /**
         * Traitement_Experiences constructor.
         * @param $print
         * @param $db
         */
        public function __construct($print, $db)
        {
            $this->render = $print;
            $this->bdd = $db;
        }

        public function traitement_accordion()
        {
            return
                [
                    0 =>
                        [
                            "header-id" => "informatique-alternance-stage",
                            "header-fontawesome" => "fas fa-clipboard",
                            "header-titre" => "Informatique - Alternance & Stage",
                            "collapse-id" => "informatique-alternance-stage",
                            "accordion-span" => false,
                            "blockquote" =>
                                [
                                    0 =>
                                        [
                                            "blockquote-fontawesome" => "fas fa-window-maximize",
                                            "blockquote-text" => "Développement Web - DSI École Polytechnique (L3 Pro, M1 Pro)",
                                            "blockquote-text-a" => false,
                                            "blockquote-footer" => "Conception d'un site internet permettant d'effectuer le recensement des effectifs au sein des laboratoire de l'école. Projet en collaboration avec des membres des laboratoires. Support sur les autres projets Web de la DSI.",
                                            "blockquote-footer-cite" => false
                                        ],
                                    1 =>
                                        [
                                            "blockquote-fontawesome" => "fas fa-window-maximize",
                                            "blockquote-text" => "Développement Web - D.I.T.I. Mairie d'Aubervilliers (DUT)",
                                            "blockquote-text-a" => false,
                                            "blockquote-footer" => "Conception d'un site internet permettant l'automatisation des procédures de recrutements et de remplacements. Site \"Responsive Design\" (adaptatif) à l'aide de Bootstrap et de templates, lié à une base de données.",
                                            "blockquote-footer-cite" => false
                                        ]
                                ]
                        ],
                    1 =>
                        [
                            "header-id" => "informatique-m1-pro",
                            "header-fontawesome" => "fas fa-folder-open",
                            "header-titre" => "Informatique - Projet M1 Pro",
                            "collapse-id" => "informatique-m1-pro",
                            "accordion-span" => false,
                            "blockquote" =>
                                [
                                    0 =>
                                        [
                                            "blockquote-fontawesome" => "fas fa-scroll",
                                            "blockquote-text" => "Mini Jeu de rôle",
                                            "blockquote-text-a" => false,
                                            "blockquote-footer" => "Conception d'un mini jeu de rôle au tour par tour en C++.",
                                            "blockquote-footer-cite" => false
                                        ]
                                ]
                        ],
                    2 =>
                        [
                            "header-id" => "informatique-l3-pro",
                            "header-fontawesome" => "fas fa-folder-open",
                            "header-titre" => "Informatique - Projets L3 Pro",
                            "collapse-id" => "informatique-l3-pro",
                            "accordion-span" => false,
                            "blockquote" =>
                                [
                                    0 =>
                                        [
                                            "blockquote-fontawesome" => "fas fa-window-restore",
                                            "blockquote-text" => "LoutreBay",
                                            "blockquote-text-a" => false,
                                            "blockquote-footer" => "Conception de ce site Web adaptatif utilisant BootStrap, HTML et Mustache.",
                                            "blockquote-footer-cite" => false
                                        ],
                                    1 =>
                                        [
                                            "blockquote-fontawesome" => "fab fa-android",
                                            "blockquote-text" => "MonkeyBall",
                                            "blockquote-text-a" => false,
                                            "blockquote-footer" => "Conception d'une application Android avec Cordova.",
                                            "blockquote-footer-cite" => false
                                        ]
                                ]
                        ],
                    3 =>
                        [
                            "header-id" => "informatique-dut",
                            "header-fontawesome" => "fas fa-folder-open",
                            "header-titre" => "Informatique - Projets DUT",
                            "collapse-id" => "informatique-dut",
                            "accordion-span" => false,
                            "blockquote" =>
                                [
                                    0 =>
                                        [
                                            "blockquote-fontawesome" => "fas fa-window-restore",
                                            "blockquote-text" => "Site Web - Ludéma",
                                            "blockquote-text-a" => false,
                                            "blockquote-footer" => "Site Web internet complet avec architecture MVC (HTML, CSS, PHP) et base de données (SQL), pour la Start-Up Ludéma",
                                            "blockquote-footer-cite" => "Semestre 3"
                                        ],
                                    1 =>
                                        [
                                            "blockquote-fontawesome" => "fas fa-search",
                                            "blockquote-text" => "Crawler et moteur d'inférence - Alien6",
                                            "blockquote-text-a" => false,
                                            "blockquote-footer" => "Conception d'un crawler et d'un moteur d'inférence récupérant des données via SAP (AngularJS, CasperJS), pour la Start-Up Alien6",
                                            "blockquote-footer-cite" => "Semestre 3"
                                        ],
                                    2 =>
                                        [
                                            "blockquote-fontawesome" => "fas fa-chess-king",
                                            "blockquote-text" => "Jeu d'échecs",
                                            "blockquote-text-a" => false,
                                            "blockquote-footer" => "Conception d'un jeu d'échecs en Java avec une interface 2D (JFrame)",
                                            "blockquote-footer-cite" => "Semestre 2"
                                        ],
                                    3 =>
                                        [
                                            "blockquote-fontawesome" => "fas fa-chess-king",
                                            "blockquote-text" => "Jeu MMORPG",
                                            "blockquote-text-a" => false,
                                            "blockquote-footer" => "Conception d'un jeu de type MMORGPG en Java avec une interface minimale",
                                            "blockquote-footer-cite" => "Semestre 2"
                                        ],
                                    4 =>
                                        [
                                            "blockquote-fontawesome" => "fas fa-building",
                                            "blockquote-text" => "Jeu gratte-ciel",
                                            "blockquote-text-a" => false,
                                            "blockquote-footer" => "Conception d'un jeu gratte-ciel en C",
                                            "blockquote-footer-cite" => "Semestre 1"
                                        ],
                                    5 =>
                                        [
                                            "blockquote-fontawesome" => "fas fa-window-restore",
                                            "blockquote-text" => "RetroGames ",
                                            "blockquote-text-a" => false,
                                            "blockquote-footer" => "Conception d'un site internet multipages à thème uniquement en HTML et CSS, projet d'introduction au développemment Web",
                                            "blockquote-footer-cite" => "Semestre 1"
                                        ]
                                ]
                        ],
                    4 =>
                        [
                            "header-id" => "informatique-projet-perso",
                            "header-fontawesome" => "fas fa-folder-open",
                            "header-titre" => "Informatique - Projet Personnel",
                            "collapse-id" => "informatique-projet-perso",
                            "accordion-span" => false,
                            "blockquote" =>
                                [
                                    0 =>
                                        [
                                            "blockquote-fontawesome" => "fas fa-blog",
                                            "blockquote-text" => "PortFolio",
                                            "blockquote-text-a" => false,
                                            "blockquote-footer" => "Conception de ce site Web adaptatif utilisant BootStrap, HTML et Mustache (non intégré sur la version finale hébergée en ligne)",
                                            "blockquote-footer-cite" => "Première version publiée en 2019"
                                        ]
                                ]
                        ],
                    5 =>
                        [
                            "header-id" => "autres",
                            "header-fontawesome" => "fas fa-search-plus",
                            "header-titre" => "Autres",
                            "collapse-id" => "autres",
                            "accordion-span" => false,
                            "blockquote" =>
                                [
                                    0 =>
                                        [
                                            "blockquote-fontawesome" => "fas fa-seedling",
                                            "blockquote-text" => "Agent contractuel - Carrefour Market",
                                            "blockquote-text-a" => false,
                                            "blockquote-footer" => "Saisonnier au rayon fruits et légumes",
                                            "blockquote-footer-cite" => "Juillet/ Août 2018"
                                        ],
                                    1 =>
                                        [
                                            "blockquote-fontawesome" => "fas fa-clipboard-list",
                                            "blockquote-text" => "Agent contractuel - Ministère",
                                            "blockquote-text-a" => false,
                                            "blockquote-footer" => "Vacataire au ministère de l'Éducation Nationale, de l'Enseignement Supérieur et de la Recherche",
                                            "blockquote-footer-cite" => "Juillet 2016"
                                        ],
                                    2 =>
                                        [
                                            "blockquote-fontawesome" => "fas fa-clipboard-list",
                                            "blockquote-text" => "Agent contractuel - Ministère",
                                            "blockquote-text-a" => false,
                                            "blockquote-footer" => "Vacataire au ministère de l'Enseignement Supérieur et de la Recherche",
                                            "blockquote-footer-cite" => "Juillet 2015"
                                        ]
                                ]
                        ]
                ];
        }

        public function traitement_toRender()
        {
            $data['arccordion-item'] = $this->traitement_accordion();

            $data['chemin'] = "../";
            $data['experiences'] = true;
            
            $this->render->action_render($data);
        }

    }

?>