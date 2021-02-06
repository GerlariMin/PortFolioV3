<?php

    class Traitement_Parcours
    {

        private Render $render;
        private $config;

        /**
         * Traitement_Parcours constructor.
         * @param $print
         */
        public function __construct($print)
        {
            $this->render = $print;
            global $config;
            $this->config = $config;
        }

        /**
         * @return array[]
         */
        public function traitement_featurette(): array
        {
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
            return 
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
                        "lead" => "Dplôme obtenu avec la mention Très Bien.",
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
                        "lead" => "Dplôme obtenu sans mention.",
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
        }

        public function traitement_toRender()
        {
            $data['featurette'] = $this->traitement_featurette();

            $data['chemin'] = $this->config['variables']['chemin'];
            $data['parcours'] = true;
            
            $this->render->action_render($data);
        }

    }

?>