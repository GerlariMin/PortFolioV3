<?php

    global $config;

    /**                **
     * Variables utiles *
     **                **/

    $config['variables']['chemin'] = "../";

    /**       **
     * Accueil *
     **       **/

    // identité
    $config['auteur']['nomComplet'] = "Morgan MINBIELLE";
    $config['auteur']['nom'] = "MINBIELLE";
    $config['auteur']['prenom'] = "Morgan";
    // description
    $config['auteur']['titre'] = "Alternant développeur";
    $config['auteur']['etablissement'] = "UPEC / Ecole Polytechnique";
    $config['auteur']['annee'] = "Master M1 Pro";

    /**      **
     * Erreur *
     **      **/

    // erreur 401
    $config['erreur']['401'] = "Acces interdit";
    // erreur 402
    $config['erreur']['403'] = "Dossier non accessible";
    // erreur 403
    $config['erreur']['404'] = "Page introuvable";
    // erreur 404
    $config['erreur']['405'] = "Erreur serveur interne";
    // erreur 500
    $config['erreur']['500'] = "Erreur serveur interne";

    /**           **
     * Expériences *
     **           **/

    // accordion
    $config['experiences']['accordion'] =
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

    /**        **
     * Parcours *
     **        **/

    // featurette
    /*
        Dans la balise svg, on peut appeler differents motifs.

        Le motif par défaut qui s'appelle ainsi:
            "svg-default" =>
                [
                    "svg-stop1-rgb" => "255,0,0", // ou "255,255,0"
                    "svg-stop2-rgb" => "255,255,0", // ou "255,0,0"
                ],

        Les autres motifs s'appellent par:
            "nom-du-fichier-svg" => true
    */
    $config['parcours']['featurette'] =
        [
            0 =>
                [
                    "reverse" => false,
                    "featuring-heading" =>
                        [
                            "featuring-heading-fontawesome" => "fas fa-chalkboard-teacher",
                            "featuring-heading-titre" => "M1 - Master Informatique parcours Logiciels Sûrs",
                            "featuring-heading-span" => "Université Paris-Est Créteil (UPEC) - 2020/ 2021"
                        ],
                    "lead" => "Actuellement en première année de Master (M1), en alternance au sein de l'Ecole Polytechnique.",
                    "tablist" =>
                        [
                            "tablist-id" => "m1-tablist",
                            "tablist-ul" =>
                                [
                                    0 =>
                                        [
                                            "list-active" => true,
                                            "list-id" => "m1-alternance",
                                            "list-titre" => "Alternance"
                                        ],
                                    1 =>
                                        [
                                            "list-active" => false,
                                            "list-id" => "m1-contenu-pedagogique",
                                            "list-titre" => "Contenu pédagogique"
                                        ],
                                    2 =>
                                        [
                                            "list-active" => false,
                                            "list-id" => "m1-competences",
                                            "list-titre" => "Compétences"
                                        ]
                                ],
                            "tabcontent" =>
                                [
                                    0 =>
                                        [
                                            "active" => true,
                                            "tab-pane-id" => "m1-alternance",
                                            "blockquote" =>
                                                [
                                                    "blockquote-fontawesome" => "fas fa-briefcase",
                                                    "blockquote-titre" => "Direction des Systèmes d'Informations (DSI)",
                                                    "blockquote-footer" => "École Polytechnique",
                                                    "blockquote-cite" => "2020/ 2021"
                                                ],
                                            "tab-pane-ul" => false
                                        ],
                                    1 =>
                                        [
                                            "active" => false,
                                            "tab-pane-id" => "m1-contenu-pedagogique",
                                            "blockquote" => false,

                                            "tab-pane-ul" =>
                                                [
                                                    0 =>
                                                        [
                                                            "tab-pane-h2" => false,
                                                            "tab-pane-li" =>
                                                                [
                                                                    0 => "Langages de programmation : Java, J2E, C++, phyton, ocaml, erlang...",
                                                                    1 => "Outils de modélisation : Atelier B, Coq, Lustre, Prism, Uppaal",
                                                                    2 => "Technologie : test, temps réel, calcul parallèle"
                                                                ]
                                                        ]
                                                ],
                                        ],
                                    2 =>
                                        [
                                            "active" => false,
                                            "tab-pane-id" => "m1-competences",
                                            "blockquote" => false,
                                            "tab-pane-ul" =>
                                                [
                                                    0 =>
                                                        [
                                                            "tab-pane-h2" => false,
                                                            "tab-pane-li" =>
                                                                [
                                                                    0 => "Analyser des besoins utilisateurs",
                                                                    1 => "Analyser les opportunités et la faisabilité technologique de l’application",
                                                                    2 => "Élaborer et rédiger des cahiers des charges",
                                                                    3 => "Concevoir une architecture logicielle",
                                                                    4 => "Définir des protocoles et des scenarios de test",
                                                                    5 => "Intégrer et déployer des solutions",
                                                                    6 => "Utiliser des normes de sûreté",
                                                                    7 => "Évaluer des risques pouvant intervenir au cours de la réalisation",
                                                                    8 => "Définir des schémas d’organisation, des méthodes de travail, des normes et des procédures qualité",
                                                                    9 => "Élaborer des éléments de chiffrage (besoins humains, financiers...)"
                                                                ]
                                                        ]
                                                ],
                                        ]
                                ]
                        ],
                    "svg" =>
                        [
                            "svg-id" => "master",
                            "svg-subbtle-prism" => true,
                            "svg-text-color" => "FF4000",
                            "svg-text" => "M1 Pro"
                        ],
                    "divider" => true
                ],

            1 =>
                [
                    "reverse" => true,
                    "featuring-heading" =>
                        [
                            "featuring-heading-fontawesome" => "fas fa-graduation-cap",
                            "featuring-heading-titre" => "L3 - Licence Professionnelle Informatique conception, développement et test de logiciels parcours Sécurité de l'Information (LPI SI)",
                            "featuring-heading-span" => "Université Paris-Est Créteil (UPEC) - 2019/ 2020"
                        ],
                    "lead" => "Diplôme obtenu avec la mention Très Bien.",
                    "tablist" =>
                        [
                            "tablist-id" => "l3-tablist",
                            "tablist-ul" =>
                                [
                                    0 =>
                                        [
                                            "list-active" => true,
                                            "list-id" => "l3-alternance",
                                            "list-titre" => "Alternance"
                                        ],
                                    1 =>
                                        [
                                            "list-active" => false,
                                            "list-id" => "l3-programme",
                                            "list-titre" => "Programme"
                                        ]
                                ],
                            "tabcontent" =>
                                [
                                    0 =>
                                        [
                                            "active" => true,
                                            "tab-pane-id" => "l3-alternance",
                                            "blockquote" =>
                                                [
                                                    "blockquote-fontawesome" => "fas fa-briefcase",
                                                    "blockquote-titre" => "Direction des Systèmes d'Informations (DSI)",
                                                    "blockquote-footer" => "École Polytechnique",
                                                    "blockquote-cite" => "2019/ 2020"
                                                ],
                                            "tab-pane-ul" => false
                                        ],
                                    1 =>
                                        [
                                            "active" => false,
                                            "tab-pane-id" => "l3-programme",
                                            "blockquote" => false,

                                            "tab-pane-ul" =>
                                                [
                                                    0 =>
                                                        [
                                                            "tab-pane-h2" => "UE 1 : CONNAISSANCES GENERALES",
                                                            "tab-pane-li" =>
                                                                [
                                                                    0 => "Expression et communication en anglais",
                                                                    1 => "Droit informatique",
                                                                    2 => "Expression et communication en français",
                                                                    3 => "Intelligence économique"
                                                                ]
                                                        ],
                                                    1 =>
                                                        [
                                                            "tab-pane-h2" => "UE 2 : INFORMATIQUE GENERALE",
                                                            "tab-pane-li" =>
                                                                [
                                                                    0 => "Modèle de conception",
                                                                    1 => "Ingénierie du logiciel",
                                                                    2 => "Programmation Web",
                                                                    3 => "Bases de données avancées"
                                                                ]
                                                        ],
                                                    2 =>
                                                        [
                                                            "tab-pane-h2" => "UE 3 : INFORMARTIQUE DE LA SPECIALITE",
                                                            "tab-pane-li" =>
                                                                [
                                                                    0 => "Sécurité des réseaux (Cyber)",
                                                                    1 => "Sécurité des réseaux (Applicative)",
                                                                    2 => "Programmation Bid Data",
                                                                    3 => "Réalisation logiciel",
                                                                    4 => "Programmation mobile"
                                                                ]
                                                        ],
                                                    3 =>
                                                        [
                                                            "tab-pane-h2" => "UE 4 : EXPERIENCES PROFESSIONNELLES",
                                                            "tab-pane-li" =>
                                                                [
                                                                    0 => "Projet tuteurés",
                                                                    1 => "Stage / Entreprise"
                                                                ]
                                                        ]
                                                ],
                                        ]
                                ]
                        ],
                    "svg" =>
                        [
                            "svg-id" => "l3",
                            "svg-rainbow-vortex" => true,
                            "svg-text-color" => "ffffff",
                            "svg-text" => "L3 Pro"
                        ],
                    "divider" => true
                ],

            2 =>
                [
                    "reverse" => false,
                    "featuring-heading" =>
                        [
                            "featuring-heading-fontawesome" => "fas fa-graduation-cap",
                            "featuring-heading-titre" => "DUT Informatique",
                            "featuring-heading-span" => "IUT de Villetaneuse (Université Paris 13) - 2016/ 2019"
                        ],
                    "lead" => "Diplôme obtenu sans mention.",
                    "tablist" =>
                        [
                            "tablist-id" => "l3-tablist",
                            "tablist-ul" =>
                                [
                                    0 =>
                                        [
                                            "list-active" => true,
                                            "list-id" => "dut-stage",
                                            "list-titre" => "Stage"
                                        ],
                                    1 =>
                                        [
                                            "list-active" => false,
                                            "list-id" => "dut-programme-informatique",
                                            "list-titre" => "Progamme (Informatique)"
                                        ],
                                    2 =>
                                        [
                                            "list-active" => false,
                                            "list-id" => "dut-programme-autre",
                                            "list-titre" => "Progamme (Autre)"
                                        ]
                                ],
                            "tabcontent" =>
                                [
                                    0 =>
                                        [
                                            "active" => true,
                                            "tab-pane-id" => "dut-stage",
                                            "blockquote" =>
                                                [
                                                    "blockquote-fontawesome" => "fas fa-briefcase",
                                                    "blockquote-titre" => "Direction Informatique et des Technologies de l'Informations (DITI)",
                                                    "blockquote-footer" => "Mairie d'Aubervilliers",
                                                    "blockquote-cite" => "Avril/ Juin 2019"
                                                ],
                                            "tab-pane-ul" => false
                                        ],
                                    1 =>
                                        [
                                            "active" => false,
                                            "tab-pane-id" => "dut-programme-informatique",
                                            "blockquote" => false,

                                            "tab-pane-ul" =>
                                                [
                                                    0 =>
                                                        [
                                                            "tab-pane-h2" => "Systèmes informatiques",
                                                            "tab-pane-li" =>
                                                                [
                                                                    0 => "Architecture des ordinateurs",
                                                                    1 => "Systèmes d'exploitation",
                                                                    2 => "Réseaux"
                                                                ]
                                                        ],
                                                    1 =>
                                                        [
                                                            "tab-pane-h2" => "Outils et Méthodes du Génie Logiciel",
                                                            "tab-pane-li" =>
                                                                [
                                                                    0 => "Modélisation avec UML",
                                                                    1 => "Génie logiciel",
                                                                    2 => "Utilisation de Système de Gestion de Base de Données"
                                                                ]
                                                        ],
                                                    2 =>
                                                        [
                                                            "tab-pane-h2" => "Programmation",
                                                            "tab-pane-li" =>
                                                                [
                                                                    0 => "Méthode de conception et pratique de la programmation",
                                                                    1 => "Programmation objet",
                                                                    2 => "Programmation Web"
                                                                ]
                                                        ],
                                                    3 =>
                                                        [
                                                            "tab-pane-h2" => "Projet",
                                                            "tab-pane-li" =>
                                                                [
                                                                    0 => "Synthèse entre les aspects techniques et méthodologiqes",
                                                                    1 => "Travail en équipe"
                                                                ]
                                                        ]
                                                ],
                                        ],

                                    2 =>
                                        [
                                            "active" => false,
                                            "tab-pane-id" => "dut-programme-autre",
                                            "blockquote" => false,

                                            "tab-pane-ul" =>
                                                [
                                                    0 =>
                                                        [
                                                            "tab-pane-h2" => "Mathématiques",
                                                            "tab-pane-li" =>
                                                                [
                                                                    0 => "Bases mathématiques pour l’informatique : langages et automates, graphes",
                                                                    1 => "Algèbre linéaire",
                                                                    2 => "Analyse",
                                                                    3 => "Modélisation",
                                                                    4 => "Probabilités et statistiques",
                                                                    5 => "Études de cas"
                                                                ]
                                                        ],
                                                    1 =>
                                                        [
                                                            "tab-pane-h2" => "Économie et gestion des organisations",
                                                            "tab-pane-li" =>
                                                                [
                                                                    0 => "Activités des organisations et processus de gestion",
                                                                    1 => "Économie",
                                                                    2 => "Méthodes et outils d’aide à la décision",
                                                                    3 => "Gestion des systèmes d’informations"
                                                                ]
                                                        ],
                                                    2 =>
                                                        [
                                                            "tab-pane-h2" => "Langues, expression et communication",
                                                            "tab-pane-li" =>
                                                                [
                                                                    0 => "Préparation au travail en groupe",
                                                                    1 => "Préparation à la recherche d’emploi",
                                                                    2 => "Réflexion sur le rôle de l’informatique dans le monde du travail et dans la société",
                                                                    3 => "Acquisition de l’anglais de communication et langue de spécialité (anglais de l’informatique)"
                                                                ]
                                                        ]
                                                ],
                                        ]
                                ]
                        ],
                    "svg" =>
                        [
                            "svg-id" => "dut",
                            "svg-subbtle-prism" => true,
                            "svg-text-color" => "FF4000",
                            "svg-text" => "DUT"
                        ],
                    "divider" => true
                ],

            3 =>
                [
                    "reverse" => true,
                    "featuring-heading" =>
                        [
                            "featuring-heading-fontawesome" => "fas fa-graduation-cap",
                            "featuring-heading-titre" => "Baccalauréat Scientifique options Science de l'Ingénieur (SI) et Informatique et Science du Numérique (ISN)",
                            "featuring-heading-span" => "Lycée polyvalent Maximilien Perret - 2015/ 2016"
                        ],
                    "lead" => "Diplôme obtenu avec la mention Assez Bien.",
                    "tablist" => false,
                    "svg" =>
                        [
                            "svg-id" => "bac",
                            "svg-rainbow-vortex" => true,
                            "svg-text-color" => "ffffff",
                            "svg-text" => "BAC S"
                        ],
                    "divider" => false
                ]
        ];

    /**            **
     * Présentation *
     **            **/

    // naissance auteur
    $config['auteur']['naissance'] = '1997-03-27';
    // age courant auteur
    $config['auteur']['age'] = 0;
    // caroussel
    $config['presentation']['caroussel'] =
        [
            "carousel-id" => "carousel-presentation",
            "carousel-fade" => true,
            "carousel-indicators" =>
                [
                    0 =>
                        [
                            "slide-to" => "0",
                            "active" => true
                        ],
                    1 =>
                        [
                            "slide-to" => "1",
                            "active" => false
                        ],
                    2 =>
                        [
                            "slide-to" => "2",
                            "active" => false
                        ]
                ],
            "carousel-items" =>
                [
                    0 =>
                        [
                            "active" => true,
                            "data-bs-interval" => false,
                            "img" => "img-005.jpg",
                            "carousel-caption-text" => false,
                            "carousel-caption-h1" => false,
                            "carousel-caption-p" => false,
                            "carousel-caption-btn" =>
                                [
                                    "btn-color" => "danger",
                                    "btn-href" => "#featurette-technologie",
                                    "btn-text" => "Voir la section"
                                ]
                        ],
                    1 =>
                        [
                            "active" => false,
                            "data-bs-interval" => false,
                            "img" => "img-003.jpg",
                            "carousel-caption-text" => false,
                            "carousel-caption-h1" => false,
                            "carousel-caption-p" => false,
                            "carousel-caption-btn" =>
                                [
                                    "btn-color" => "info",
                                    "btn-href" => "#featurette-sport",
                                    "btn-text" => "Voir la section"
                                ]
                        ],
                    2 =>
                        [
                            "active" => false,
                            "data-bs-interval" => false,
                            "img" => "img-006.jpg",
                            "carousel-caption-text" => false,
                            "carousel-caption-h1" => false,
                            "carousel-caption-p" => false,
                            "carousel-caption-btn" =>
                                [
                                    "btn-color" => "light",
                                    "btn-href" => "#featurette-photo",
                                    "btn-text" => "Voir la section"
                                ]
                        ]
                ]
        ];

    // age auteur
    $age = null;

    // accroche
    $config['presentation']['accroche'] =
        [
            "accroche-p" =>
                [
                    0 => "Bonjour, je suis Morgan MINBIELLE, " . $age . " ans, étudiant en Master Informatique Professionnel (parcours logiciels sûrs), en alternance au sein de la DSI de l'École Polytechnique.",
                    1 => "Je suis diplômé d'une Licence Professionnelle Informatique (parcours sécurité des données), obtenu à l'UPEC et d'un DUT Informatique venant de l'IUT de Villetaneuse.",
                    2 => "Mon parcours d'études reflète mon intérêt pour le développement informatique en général (Web ou applicatif) et la façon dont on sécurise les programmes codés.",
                    3 => "Grâce au stage de DUT et aux choix des formations professionnelles (Licence et Master), j'ai pu mettre en pratique mes connaissances et compétences et en acquérir de nouvelles au sein d'une équipe.",
                    4 => "Curieux, aussi bien au niveau logiciel que matériel, je m'intéresse aux nouvelles technologies, langages et méthodes de développement en parallèle de mon cursus. De plus, mes études m'ont apporté la bonne pratique et la rigueur nécessaire au bon développement d'un programme et la façon de plannifier et gérer des projets de groupes. Ces projets portaient sur le développement Web ou logiciel.",
                    5 => "Lors de votre visite sur ce site, vous trouverez toutes les informations essentielles me concernant.",
                    6 => "Bonne visite !"
                ]
        ];

    // featurette
    $config['presentation']['featurette'] =
        [
            0 =>
                [
                    "featurette-id" => "featurette-technologie",
                    "featurette-reverse" => false,
                    "featurette-heading" =>
                        [
                            "featurette-heading-h2" => "Technologie",
                            "featurette-heading-span" => false
                        ],
                    "featurette-lead" =>
                        [
                            0 => "En dehors du développement, je suis l'actualité sur tout ce qui touche aux innovations technologiques.",
                            1=> "Qu'elles soient issues du monde informatique, automobile ou autre, ces innovations, qui ont ou auront un impact sur notre quotidien, représentent le summum de la technique humaine."
                        ],
                    "featurette-img" => "img-005.jpg",
                    "featurette-divider" => true
                ],
            1 =>
                [
                    "featurette-id" => "featurette-sport",
                    "featurette-reverse" => true,
                    "featurette-heading" =>
                        [
                            "featurette-heading-h2" => "Sport",
                            "featurette-heading-span" => false
                        ],
                    "featurette-lead" =>
                        [
                            0 => "Passionné du sport automobile, je suis les diverses compétitions mondiales, et plus précisement, la Formule 1 et Formule E.",
                            1 => "J'aime également le tennis, que je pratique régulièrement (en club et en loisir) et du vélo occasionnellement.",
                        ],
                    "featurette-img" => "img-003.jpg",
                    "featurette-divider" => true
                ],
            2 =>
                [
                    "featurette-id" => "featurette-photo",
                    "featurette-reverse" => false,
                    "featurette-heading" =>
                        [
                            "featurette-heading-h2" => "Photographie",
                            "featurette-heading-span" => "(amateur)"
                        ],
                    "featurette-lead" =>
                        [
                            0 => "Amateur de beaux clichés, j'ai pour passe-temps de prendre de belles photos et de m'essayer à la retouche pour faire ressortir certains éléments.",
                        ],
                    "featurette-img" => "img-006.jpg",
                    "featurette-divider" =>
                        [
                            "featurette-divider-final" => true
                        ]
                ],
        ];

    // gallerie
    $config['presentation']['gallerie'] =
        [
            0 =>
                [
                    "gallerie-ligne" =>
                        [
                            0 => "img-010.jpg",
                            1 => "img-013.jpg",
                            2 => "img-009.jpg"
                        ]
                ],
            1 =>
                [
                    "gallerie-ligne" =>
                        [
                            0 => "img-008.jpg",
                            1 => "img-012.jpg",
                            2 => "img-011.jpg"
                        ]
                ],
            2 =>
                [
                    "gallerie-ligne" =>
                        [
                            0 => "img-004.jpg",
                            1 => "img-001.jpg",
                            2 => "img-007.jpg"
                        ]
                ]
        ];

?>