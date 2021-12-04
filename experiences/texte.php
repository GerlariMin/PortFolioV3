<?php

/**
 * Classe TexteAccueil
 * Contient l'ensemble du texte à afficher pour la page d'accueil.
 */
class TexteExperiences
{
    /**
     * Variables correspondant aux balises Mustache de la page.
     */

    /**
     * @var string
     */
    public String $accordion_span = "accordion-span";
    /**
     * @var string
     */
    public String $blocquote = "blockquote";
    /**
     * @var string
     */
    public String $blockquote_fontawesome = "blockquote-fontawesome";
    /**
     * @var string
     */
    public String $blockquote_text = "blockquote-text";
    /**
     * @var string
     */
    public String $blockquote_text_a = "blockquote-text-a";
    /**
     * @var string
     */
    public String $blockquote_text_a_href = "blockquote-text-a-href";
    /**
     * @var string
     */
    public String $blockquote_text_a_tooltip = "blockquote-text-a-tooltip";
    /**
     * @var string
     */
    public String $blockquote_footer = "blockquote-footer";
    /**
     * @var string
     */
    public String $blockquote_footer_cite = "blockquote-footer-cite";
    /**
     * @var string
     */
    public String $collapse_id = "collapse-id";
    /**
     * @var string
     */
    public String $fa_android = "fab fa-android";
    /**
     * @var string
     */
    public String $fa_blog = "fas fa-blog";
    /**
     * @var string
     */
    public String $fa_building = "fas fa-building";
    /**
     * @var string
     */
    public String $fa_chess_king = "fas fa-chess-king";
    /**
     * @var string
     */
    public String $fa_clipboard = "fas fa-clipboard";
    /**
     * @var string
     */
    public String $fa_clipboard_list = "fas fa-clipboard-list";
    /**
     * @var string
     */
    public String $fa_docker = "fab fa-docker";
    /**
     * @var string
     */
    public String $fa_folder_open = "fas fa-folder-open";
    /**
     * @var string
     */
    public String $fa_java = "fab fa-java";
    /**
     * @var string
     */
    public String $fa_mobile = "fas fa-mobile";
    /**
     * @var string
     */
    public String $fa_scroll = "fas fa-scroll";
    /**
     * @var string
     */
    public String $fa_search = "fas fa-search";
    /**
     * @var string
     */
    public String $fa_search_plus = "fas fa-search-plus";
    /**
     * @var string
     */
    public String $fa_seedling = "fas fa-seedling";
    /**
     * @var string
     */
    public String $fa_window_maximize = "fas fa-window-maximize";
    /**
     * @var string
     */
    public String $fa_window_restore = "fas fa-window-restore";
    /**
     * @var string
     */
    public String $header_id = "header-id";
    /**
     * @var string
     */
    public String $header_fontawesome = "header-fontawesome";
    /**
     * @var string
     */
    public String $header_titre = "header-titre";

    /**
     * Retourne un tableau formaté contenant les données sur mes expériences professionnelles
     *
     * @return array
     */
    private function texteInformatiqueProfessionnel():array
    {
        return
            [
                $this->header_id => "informatique-alternance-stage",
                $this->header_fontawesome => $this->fa_clipboard,
                $this->header_titre => "Informatique - Alternance & Stage",
                $this->collapse_id => "informatique-alternance-stage",
                $this->accordion_span => false,
                $this->blocquote =>
                    [
                        0 =>
                            [
                                $this->blockquote_fontawesome => $this->fa_window_maximize,
                                $this->blockquote_text => "Développement Web - DSI École Polytechnique (L3 Pro, M1 Pro)",
                                $this->blockquote_text_a => false,
                                $this->blockquote_footer => "Conception d'un site internet permettant d'effectuer le recensement des effectifs au sein des laboratoire de l'école. Projet en collaboration avec des membres des laboratoires. Support sur les autres projets Web de la DSI.",
                                $this->blockquote_footer_cite => false
                            ],
                        1 =>
                            [
                                $this->blockquote_fontawesome => $this->fa_window_maximize,
                                $this->blockquote_text => "Développement Web - D.I.T.I. Mairie d'Aubervilliers (DUT)",
                                $this->blockquote_text_a => false,
                                $this->blockquote_footer => "Conception d'un site internet permettant l'automatisation des procédures de recrutements et de remplacements. Site \"Responsive Design\" (adaptatif) à l'aide de Bootstrap et de templates, lié à une base de données.",
                                $this->blockquote_footer_cite => false
                            ]
                    ]
            ];
    }

    private function texteInformatiqueProjetsETGL():array
    {
        return
            [
                $this->header_id => "informatique-etgl",
                $this->header_fontawesome => $this->fa_folder_open,
                $this->header_titre => "Informatique - Projet ETGL",
                $this->collapse_id => "informatique-etgl",
                $this->accordion_span => false,
                $this->blocquote =>
                    [
                        0 =>
                            [
                                $this->blockquote_fontawesome => $this->fa_java,
                                $this->blockquote_text => "JAVAgenda",
                                $this->blockquote_text_a =>
                                [
                                    $this->blockquote_text_a_href => "https://github.com/GerlariMin/JAVAgenda/",
                                    $this->blockquote_text_a_tooltip => "JAVAgenda"
                                ],
                                $this->blockquote_footer => "Conception d'un agenda graphique en Java. Projet initié sur un cours d'introduction aux IHM avec Java sur 2 jours.",
                                $this->blockquote_footer_cite => false
                            ]
                    ]
            ];
    }

    /**
     * Retourne un tableau formaté contenant les données sur mes projet durant mon M1 Professionnel à l'UPEC
     *
     * @return array
     */
    private function texteInformatiqueProjetsM1Pro():array
    {
        return
            [
                $this->header_id => "informatique-m1-pro",
                $this->header_fontawesome => $this->fa_folder_open,
                $this->header_titre => "Informatique - Projet M1 Pro",
                $this->collapse_id => "informatique-m1-pro",
                $this->accordion_span => false,
                $this->blocquote =>
                    [
                        0 =>
                            [
                                $this->blockquote_fontawesome => $this->fa_scroll,
                                $this->blockquote_text => "Mini Jeu de rôle",
                                $this->blockquote_text_a =>
                                    [
                                        $this->blockquote_text_a_href => "https://github.com/GerlariMin/M1-CPP",
                                        $this->blockquote_text_a_tooltip => "Mini Projet C++"
                                    ],
                                $this->blockquote_footer => "Conception d'un mini jeu de rôle au tour par tour en C++.",
                                $this->blockquote_footer_cite => false
                            ]
                    ]
            ];
    }

    /**
     * Retourne un tableau formaté contenant les données sur mes projet durant ma L3 Professionnelle à l'UPEC
     *
     * @return array
     */
    private function texteInformatiqueProjetsL3Pro():array
    {
        return
            [
                $this->header_id => "informatique-l3-pro",
                $this->header_fontawesome => $this->fa_folder_open,
                $this->header_titre => "Informatique - Projets L3 Pro",
                $this->collapse_id => "informatique-l3-pro",
                $this->accordion_span => false,
                $this->blocquote =>
                    [
                        0 =>
                            [
                                $this->blockquote_fontawesome => $this->fa_window_restore,
                                $this->blockquote_text => "LoutreBay",
                                $this->blockquote_text_a => false,
                                $this->blockquote_footer => "Conception de ce site Web adaptatif utilisant BootStrap, HTML et Mustache.",
                                $this->blockquote_footer_cite => false
                            ],
                        1 =>
                            [
                                $this->blockquote_fontawesome => $this->fa_android,
                                $this->blockquote_text => "MonkeyBall",
                                $this->blockquote_text_a => false,
                                $this->blockquote_footer => "Conception d'une application Android avec Cordova.",
                                $this->blockquote_footer_cite => false
                            ]
                    ]
            ];
    }

    /**
     * Retourne un tableau formaté contenant les données sur mes projets durant mon DUT à l'IUT de Villetaneuse
     *
     * @return array
     */
    private function texteInformatiqueDUT():array
    {
        return
            [
                $this->header_id => "informatique-dut",
                $this->header_fontawesome => $this->fa_folder_open,
                $this->header_titre => "Informatique - Projets DUT",
                $this->collapse_id => "informatique-dut",
                $this->accordion_span => false,
                $this->blocquote =>
                    [
                        0 =>
                            [
                                $this->blockquote_fontawesome => $this->fa_window_restore,
                                $this->blockquote_text => "Site Web - Ludéma",
                                $this->blockquote_text_a => false,
                                $this->blockquote_footer => "Site Web internet complet avec architecture MVC (HTML, CSS, PHP) et base de données (SQL), pour la Start-Up Ludéma",
                                $this->blockquote_footer_cite => "Semestre 3"
                            ],
                        1 =>
                            [
                                $this->blockquote_fontawesome => $this->fa_search,
                                $this->blockquote_text => "Crawler et moteur d'inférence - Alien6",
                                $this->blockquote_text_a => false,
                                $this->blockquote_footer => "Conception d'un crawler et d'un moteur d'inférence récupérant des données via SAP (AngularJS, CasperJS), pour la Start-Up Alien6",
                                $this->blockquote_footer_cite => "Semestre 3"
                            ],
                        2 =>
                            [
                                $this->blockquote_fontawesome => $this->fa_chess_king,
                                $this->blockquote_text => "Jeu d'échecs",
                                $this->blockquote_text_a => false,
                                $this->blockquote_footer => "Conception d'un jeu d'échecs en Java avec une interface 2D (JFrame)",
                                $this->blockquote_footer_cite => "Semestre 2"
                            ],
                        3 =>
                            [
                                $this->blockquote_fontawesome => $this->fa_chess_king,
                                $this->blockquote_text => "Jeu MMORPG",
                                $this->blockquote_text_a => false,
                                $this->blockquote_footer => "Conception d'un jeu de type MMORGPG en Java avec une interface minimale",
                                $this->blockquote_footer_cite => "Semestre 2"
                            ],
                        4 =>
                            [
                                $this->blockquote_fontawesome => $this->fa_building,
                                $this->blockquote_text => "Jeu gratte-ciel",
                                $this->blockquote_text_a => false,
                                $this->blockquote_footer => "Conception d'un jeu gratte-ciel en C",
                                $this->blockquote_footer_cite => "Semestre 1"
                            ],
                        5 =>
                            [
                                $this->blockquote_fontawesome => $this->fa_window_restore,
                                $this->blockquote_text => "RetroGames ",
                                $this->blockquote_text_a =>
                                    [
                                        $this->blockquote_text_a_href => "https://github.com/GerlariMin/RetroGames",
                                        $this->blockquote_text_a_tooltip => "RetroGames"
                                    ],
                                $this->blockquote_footer => "Conception d'un site internet multipages à thème uniquement en HTML et CSS, projet d'introduction au développemment Web",
                                $this->blockquote_footer_cite => "Semestre 1"
                            ]
                    ]
            ];
    }

    /**
     * Retourne un tableau formaté contenant les données sur mes projets personnels
     *
     * @return array
     */
    private function texteInformatiqueProjetsPersonnels():array
    {
        return
            [
                $this->header_id => "informatique-projet-perso",
                $this->header_fontawesome => $this->fa_folder_open,
                $this->header_titre => "Informatique - Projets Personnels",
                $this->collapse_id => "informatique-projet-perso",
                $this->accordion_span => false,
                $this->blocquote =>
                    [
                        0 =>
                            [
                                $this->blockquote_fontawesome => $this->fa_docker,
                                $this->blockquote_text => "Docker PortFolio",
                                $this->blockquote_text_a =>
                                    [
                                        $this->blockquote_text_a_href => "https://github.com/GerlariMin/Docker-PortFolio",
                                        $this->blockquote_text_a_tooltip => "Docker-PortFolio"
                                    ],
                                $this->blockquote_footer => "Projet descriptif de création de conteneurs pour mettre en place le site web sur une machine locale sans installation particulière.",
                                $this->blockquote_footer_cite => "Notion vue pendant le cursus ETGL"
                            ],
                        1 =>
                            [
                                $this->blockquote_fontawesome => $this->fa_mobile,
                                $this->blockquote_text => "Ionic IMC",
                                $this->blockquote_text_a =>
                                    [
                                        $this->blockquote_text_a_href => "https://github.com/GerlariMin/Ionic-IMC",
                                        $this->blockquote_text_a_tooltip => "Ionic-IMC"
                                    ],
                                $this->blockquote_footer => "Développement hybride d'une application de calcul d'IMC. Projet initialisé dans le cadre d'un cours d'initiation au développement hybride avec le framework Ionic, amélioré afin d'être plus ergonomique et de reprendre les bases étudiées durant la semaine de cours.",
                                $this->blockquote_footer_cite => "Notion vue pendant le cursus ETGL"
                            ],
                        2 =>
                            [
                                $this->blockquote_fontawesome => $this->fa_blog,
                                $this->blockquote_text => "PortFolio",
                                $this->blockquote_text_a =>
                                    [
                                        $this->blockquote_text_a_href => "https://github.com/GerlariMin/PortFolioV3",
                                        $this->blockquote_text_a_tooltip => "PortFolio"
                                    ],
                                $this->blockquote_footer => "Conception de ce site Web adaptatif utilisant BootStrap, HTML et Mustache (non intégré sur la version finale hébergée en ligne)",
                                $this->blockquote_footer_cite => "Première version publiée en 2019"
                            ]
                    ]
            ];
    }

    /**
     * Retourne un tableau formaté contenant les données sur mes expériences professionnelles n'ayant aucun lien avec mon domaine d'étude
     *
     * @return array
     */
    private function texteAutres():array
    {
        return
            [
                $this->header_id => "autres",
                $this->header_fontawesome => $this->fa_search_plus,
                $this->header_titre => "Autres",
                $this->collapse_id => "autres",
                $this->accordion_span => false,
                $this->blocquote =>
                    [
                        0 =>
                            [
                                $this->blockquote_fontawesome => $this->fa_seedling,
                                $this->blockquote_text => "Agent contractuel - Carrefour Market",
                                $this->blockquote_text_a => false,
                                $this->blockquote_footer => "Saisonnier au rayon fruits et légumes",
                                $this->blockquote_footer_cite => "Juillet/ Août 2018"
                            ],
                        1 =>
                            [
                                $this->blockquote_fontawesome => $this->fa_clipboard_list,
                                $this->blockquote_text => "Agent contractuel - Ministère",
                                $this->blockquote_text_a => false,
                                $this->blockquote_footer => "Vacataire au ministère de l'Éducation Nationale, de l'Enseignement Supérieur et de la Recherche",
                                $this->blockquote_footer_cite => "Juillet 2016"
                            ],
                        2 =>
                            [
                                $this->blockquote_fontawesome => $this->fa_clipboard_list,
                                $this->blockquote_text => "Agent contractuel - Ministère",
                                $this->blockquote_text_a => false,
                                $this->blockquote_footer => "Vacataire au ministère de l'Enseignement Supérieur et de la Recherche",
                                $this->blockquote_footer_cite => "Juillet 2015"
                            ]
                    ]
            ];
    }

    public function texteAccordion(): array
    {
        return
            [
                0 => $this->texteInformatiqueProfessionnel(),
                1 => $this->texteInformatiqueProjetsETGL(),
                2 => $this->texteInformatiqueProjetsM1Pro(),
                3 => $this->texteInformatiqueProjetsL3Pro(),
                4 => $this->texteInformatiqueDUT(),
                5 => $this->texteInformatiqueProjetsPersonnels(),
                6 => $this->texteAutres()
            ];
    }
}