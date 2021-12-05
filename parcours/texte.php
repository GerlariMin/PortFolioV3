<?php

/**
 * Classe TexteParcours
 * Contient l'ensemble du texte à afficher pour la page descriptive de mon parcours.
 */

class TexteParcours
{
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

    /**
     * Variables correspondant aux balises Mustache de la page.
     */

    /**
     * @var string active
     */
    private String $active = "active";
    /**
     * @var string blockquote
     */
    private String $blockquote = "blockquote";
    /**
     * @var string blockquote_cite
     */
    private String $blockquote_cite = "blockquote-cite";
    /**
     * @var string blockquote_fontawesome
     */
    private String $blockquote_fontawesome = "blockquote-fontawesome";
    /**
     * @var string blockquote_footer
     */
    private String $blockquote_footer = "blockquote-footer";
    /**
     * @var string blockquote_titre
     */
    private String $blockquote_titre = "blockquote-titre";
    /**
     * @var string divider
     */
    private String $divider = "divider";
    /**
     * @var string dsi
     */
    private String $dsi = "Direction des Systèmes d'Informations (DSI)";
    /**
     * @var string fa_briefcase
     */
    private String $fa_briefcase = "fas fa-briefcase";
    /**
     * @var string fa_chalkboard
     */
    private String $fa_chalkboard = "fas fa-chalkboard";
    /**
     * @var string fa_chalkboard_teacher
     */
    private String $fa_chalkboard_teacher = "fas fa-chalkboard-teacher";
    /**
     * @var string fa_graduation_cap
     */
    private String $fa_graduation_cap = "fas fa-graduation-cap";
    /**
     * @var string featuring_heading
     */
    private String $featuring_heading = "featuring-heading";
    /**
     * @var string featuring_heading_fontawesome
     */
    private String $featuring_heading_fontawesome = "featuring-heading-fontawesome";
    /**
     * @var string featuring_heading_titre
     */
    private String $featuring_heading_titre = "featuring-heading-titre";
    /**
     * @var string featuring_heading_span
     */
    private String $featuring_heading_span = "featuring-heading-span";
    /**
     * @var string lead
     */
    private String $lead = "lead";
    /**
     * @var string list_active
     */
    private String $list_active = "list-active";
    /**
     * @var string list_id
     */
    private String $list_id = "list-id";
    /**
     * @var string list_titre
     */
    private String $list_titre = "list-titre";
    /**
     * @var string polytechnique
     */
    private String $polytechnique = "École Polytechnique";
    /**
     * @var string reverse
     */
    private String $reverse = "reverse";
    /**
     * @var string svg
     */
    private String $svg = "svg";
    /**
     * @var string svg_id
     */
    private String $svg_id = "svg-id";
    /**
     * @var string svg_rainbow_vortex
     */
    private String $svg_rainbow_vortex = "svg-rainbow-vortex";
    /**
     * @var string svg_subbtle_prism
     */
    private String $svg_subbtle_prism = "svg-subbtle-prism";
    /**
     * @var string svg_text
     */
    private String $svg_text = "svg-text";
    /**
     * @var string svg_text_color
     */
    private String $svg_text_color = "svg-text-color";
    /**
     * @var string tabcontent
     */
    private String $tabcontent = "tabcontent";
    /**
     * @var string tablist
     */
    private String $tablist = "tablist";
    /**
     * @var string tablist_id
     */
    private String $tablist_id = "tablist-id";
    /**
     * @var string tablist_ul
     */
    private String $tablist_ul = "tablist-ul";
    /**
     * @var string tab_pane_h2
     */
    private String $tab_pane_h2 = "tab-pane-h2";
    /**
     * @var string tab_pane_id
     */
    private String $tab_pane_id = "tab-pane-id";
    /**
     * @var string tab_pane_li
     */
    private String $tab_pane_li = "tab-pane-li";
    /**
     * @var string tab_pane_ul
     */
    private String $tab_pane_ul = "tab-pane-ul";

    /**
     * @return array
     */
    private function texteETGL():array
    {
        return
            [
                $this->reverse => true,
                $this->featuring_heading =>
                    [
                        $this->featuring_heading_fontawesome => $this->fa_chalkboard_teacher,
                        $this->featuring_heading_titre => "Master Expert en Ingénierie et Développement de Logiciel (RNCP ETGL)",
                        $this->featuring_heading_span => "CFA AFORP Issy-les-Moulineaux - 2021/ 2023"
                    ],
                $this->lead => "Actuellement en première année de la formation qui s'effectue en 2 ans.",
                $this->tablist =>
                    [
                        $this->tablist_id => "m1-tablist",
                        $this->tablist_ul =>
                            [
                                0 =>
                                    [
                                        $this->list_active => true,
                                        $this->list_id => "etgl-alternance",
                                        $this->list_titre => "Alternance"
                                    ]
                            ],
                        $this->tabcontent =>
                            [
                                0 =>
                                    [
                                        $this->active => true,
                                        $this->tab_pane_id => "m1-alternance",
                                        $this->blockquote =>
                                            [
                                                $this->blockquote_fontawesome => $this->fa_briefcase,
                                                $this->blockquote_titre => $this->dsi,
                                                $this->blockquote_footer => $this->polytechnique,
                                                $this->blockquote_cite => "2021/ 2023"
                                            ],
                                        $this->tab_pane_ul => false
                                    ]
                            ]
                    ],
                $this->tablist => false,
                $this->svg =>
                    [
                        $this->svg_id => "etgl",
                        $this->svg_rainbow_vortex => true,
                        $this->svg_text_color => "ffffff",
                        $this->svg_text => "ETGL"
                    ],
                $this->divider => false
            ];
    }

    /**
     * @return array
     */
    private function texteM1Pro():array
    {
        return
            [
                $this->reverse => false,
                $this->featuring_heading =>
                    [
                        $this->featuring_heading_fontawesome => $this->fa_chalkboard,
                        $this->featuring_heading_titre => "M1 - Master Informatique parcours Logiciels Sûrs",
                        $this->featuring_heading_span => "Université Paris-Est Créteil (UPEC) - 2020/ 2021"
                    ],
                $this->lead => "Master (M1), en alternance au sein de l'Ecole Polytechnique.",
                $this->tablist =>
                    [
                        $this->tablist_id => "m1-tablist",
                        $this->tablist_ul =>
                            [
                                0 =>
                                    [
                                        $this->list_active => true,
                                        $this->list_id => "m1-alternance",
                                        $this->list_titre => "Alternance"
                                    ],
                                1 =>
                                    [
                                        $this->list_active => false,
                                        $this->list_id => "m1-contenu-pedagogique",
                                        $this->list_titre => "Contenu pédagogique"
                                    ],
                                2 =>
                                    [
                                        $this->list_active => false,
                                        $this->list_id => "m1-competences",
                                        $this->list_titre => "Compétences"
                                    ]
                            ],
                        $this->tabcontent =>
                            [
                                0 =>
                                    [
                                        $this->active => true,
                                        $this->tab_pane_id => "m1-alternance",
                                        $this->blockquote =>
                                            [
                                                $this->blockquote_fontawesome => $this->fa_briefcase,
                                                $this->blockquote_titre => $this->dsi,
                                                $this->blockquote_footer => $this->polytechnique,
                                                $this->blockquote_cite => "2020/ 2021"
                                            ],
                                        $this->tab_pane_ul => false
                                    ],
                                1 =>
                                    [
                                        $this->active => false,
                                        $this->tab_pane_id => "m1-contenu-pedagogique",
                                        $this->blockquote => false,

                                        $this->tab_pane_ul =>
                                            [
                                                0 =>
                                                    [
                                                        $this->tab_pane_h2 => false,
                                                        $this->tab_pane_li =>
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
                                        $this->active => false,
                                        $this->tab_pane_id => "m1-competences",
                                        $this->blockquote => false,
                                        $this->tab_pane_ul =>
                                            [
                                                0 =>
                                                    [
                                                        $this->tab_pane_h2 => false,
                                                        $this->tab_pane_li =>
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
                $this->svg =>
                    [
                        $this->svg_id => "master",
                        $this->svg_subbtle_prism => true,
                        $this->svg_text_color => "FF4000",
                        $this->svg_text => "M1 Pro"
                    ],
                $this->divider => true
            ];
    }

    /**
     * @return array
     */
    private function texteL3Pro():array
    {
        return
            [
                $this->reverse => true,
                $this->featuring_heading =>
                    [
                        $this->featuring_heading_fontawesome => $this->fa_graduation_cap,
                        $this->featuring_heading_titre => "L3 - Licence Professionnelle Informatique conception, développement et test de logiciels parcours Sécurité de l'Information (LPI SI)",
                        $this->featuring_heading_span => "Université Paris-Est Créteil (UPEC) - 2019/ 2020"
                    ],
                $this->lead => "Diplôme obtenu avec la mention Très Bien.",
                $this->tablist =>
                    [
                        $this->tablist_id => "l3-tablist",
                        $this->tablist_ul =>
                            [
                                0 =>
                                    [
                                        $this->list_active => true,
                                        $this->list_id => "l3-alternance",
                                        $this->list_titre => "Alternance"
                                    ],
                                1 =>
                                    [
                                        $this->list_active => false,
                                        $this->list_id => "l3-programme",
                                        $this->list_titre => "Programme"
                                    ]
                            ],
                        $this->tabcontent =>
                            [
                                0 =>
                                    [
                                        $this->active => true,
                                        $this->tab_pane_id => "l3-alternance",
                                        $this->blockquote =>
                                            [
                                                $this->blockquote_fontawesome => $this->fa_briefcase,
                                                $this->blockquote_titre => $this->dsi,
                                                $this->blockquote_footer => $this->polytechnique,
                                                $this->blockquote_cite => "2019/ 2020"
                                            ],
                                        $this->tab_pane_ul => false
                                    ],
                                1 =>
                                    [
                                        $this->active => false,
                                        $this->tab_pane_id => "l3-programme",
                                        $this->blockquote => false,

                                        $this->tab_pane_ul =>
                                            [
                                                0 =>
                                                    [
                                                        $this->tab_pane_h2 => "UE 1 : CONNAISSANCES GENERALES",
                                                        $this->tab_pane_li =>
                                                            [
                                                                0 => "Expression et communication en anglais",
                                                                1 => "Droit informatique",
                                                                2 => "Expression et communication en français",
                                                                3 => "Intelligence économique"
                                                            ]
                                                    ],
                                                1 =>
                                                    [
                                                        $this->tab_pane_h2 => "UE 2 : INFORMATIQUE GENERALE",
                                                        $this->tab_pane_li =>
                                                            [
                                                                0 => "Modèle de conception",
                                                                1 => "Ingénierie du logiciel",
                                                                2 => "Programmation Web",
                                                                3 => "Bases de données avancées"
                                                            ]
                                                    ],
                                                2 =>
                                                    [
                                                        $this->tab_pane_h2 => "UE 3 : INFORMARTIQUE DE LA SPECIALITE",
                                                        $this->tab_pane_li =>
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
                                                        $this->tab_pane_h2 => "UE 4 : EXPERIENCES PROFESSIONNELLES",
                                                        $this->tab_pane_li =>
                                                            [
                                                                0 => "Projet tuteurés",
                                                                1 => "Stage / Entreprise"
                                                            ]
                                                    ]
                                            ],
                                    ]
                            ]
                    ],
                $this->svg =>
                    [
                        $this->svg_id => "l3",
                        $this->svg_rainbow_vortex => true,
                        $this->svg_text_color => "ffffff",
                        $this->svg_text => "L3 Pro"
                    ],
                $this->divider => true
            ];
    }

    /**
     * @return array[]
     */
    private function texteTablistDUT():array
    {
        return
        [
            [
                $this->tablist_id => "l3-tablist",
                $this->tablist_ul =>
                    [
                        0 =>
                            [
                                $this->list_active => true,
                                $this->list_id => "dut-stage",
                                $this->list_titre => "Stage"
                            ],
                        1 =>
                            [
                                $this->list_active => false,
                                $this->list_id => "dut-programme-informatique",
                                $this->list_titre => "Progamme (Informatique)"
                            ],
                        2 =>
                            [
                                $this->list_active => false,
                                $this->list_id => "dut-programme-autre",
                                $this->list_titre => "Progamme (Autre)"
                            ]
                    ],
                $this->tabcontent =>
                    [
                        0 =>
                            [
                                $this->active => true,
                                $this->tab_pane_id => "dut-stage",
                                $this->blockquote =>
                                    [
                                        $this->blockquote_fontawesome => $this->fa_briefcase,
                                        $this->blockquote_titre => "Direction Informatique et des Technologies de l'Informations (DITI)",
                                        $this->blockquote_footer => "Mairie d'Aubervilliers",
                                        $this->blockquote_cite => "Avril/ Juin 2019"
                                    ],
                                $this->tab_pane_ul => false
                            ],
                        1 =>
                            [
                                $this->active => false,
                                $this->tab_pane_id => "dut-programme-informatique",
                                $this->blockquote => false,

                                $this->tab_pane_ul =>
                                    [
                                        0 =>
                                            [
                                                $this->tab_pane_h2 => "Systèmes informatiques",
                                                $this->tab_pane_li =>
                                                    [
                                                        0 => "Architecture des ordinateurs",
                                                        1 => "Systèmes d'exploitation",
                                                        2 => "Réseaux"
                                                    ]
                                            ],
                                        1 =>
                                            [
                                                $this->tab_pane_h2 => "Outils et Méthodes du Génie Logiciel",
                                                $this->tab_pane_li =>
                                                    [
                                                        0 => "Modélisation avec UML",
                                                        1 => "Génie logiciel",
                                                        2 => "Utilisation de Système de Gestion de Base de Données"
                                                    ]
                                            ],
                                        2 =>
                                            [
                                                $this->tab_pane_h2 => "Programmation",
                                                $this->tab_pane_li =>
                                                    [
                                                        0 => "Méthode de conception et pratique de la programmation",
                                                        1 => "Programmation objet",
                                                        2 => "Programmation Web"
                                                    ]
                                            ],
                                        3 =>
                                            [
                                                $this->tab_pane_h2 => "Projet",
                                                $this->tab_pane_li =>
                                                    [
                                                        0 => "Synthèse entre les aspects techniques et méthodologiqes",
                                                        1 => "Travail en équipe"
                                                    ]
                                            ]
                                    ],
                            ],

                        2 =>
                            [
                                $this->active => false,
                                $this->tab_pane_id => "dut-programme-autre",
                                $this->blockquote => false,

                                $this->tab_pane_ul =>
                                    [
                                        0 =>
                                            [
                                                $this->tab_pane_h2 => "Mathématiques",
                                                $this->tab_pane_li =>
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
                                                $this->tab_pane_h2 => "Économie et gestion des organisations",
                                                $this->tab_pane_li =>
                                                    [
                                                        0 => "Activités des organisations et processus de gestion",
                                                        1 => "Économie",
                                                        2 => "Méthodes et outils d’aide à la décision",
                                                        3 => "Gestion des systèmes d’informations"
                                                    ]
                                            ],
                                        2 =>
                                            [
                                                $this->tab_pane_h2 => "Langues, expression et communication",
                                                $this->tab_pane_li =>
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
            ]
        ];
    }

    /**
     * @return array
     */
    private function texteDUT():array
    {
        return
            [
                $this->reverse => false,
                $this->featuring_heading =>
                    [
                        $this->featuring_heading_fontawesome => $this->fa_graduation_cap,
                        $this->featuring_heading_titre => "DUT Informatique",
                        $this->featuring_heading_span => "IUT de Villetaneuse (Université Paris 13) - 2016/ 2019"
                    ],
                $this->lead => "Diplôme obtenu sans mention.",
                $this->tablist => $this->texteTablistDUT(),
                $this->svg =>
                    [
                        $this->svg_id => "dut",
                        $this->svg_subbtle_prism => true,
                        $this->svg_text_color => "FF4000",
                        $this->svg_text => "DUT"
                    ],
                $this->divider => true
            ];
    }

    /**
     * @return array
     */
    private function texteBACS():array
    {
        return
            [
                $this->reverse => true,
                $this->featuring_heading =>
                    [
                        $this->featuring_heading_fontawesome => $this->fa_graduation_cap,
                        $this->featuring_heading_titre => "Baccalauréat Scientifique options Science de l'Ingénieur (SI) et Informatique et Science du Numérique (ISN)",
                        $this->featuring_heading_span => "Lycée polyvalent Maximilien Perret - 2015/ 2016"
                    ],
                $this->lead => "Diplôme obtenu avec la mention Assez Bien.",
                $this->tablist => false,
                $this->svg =>
                    [
                        $this->svg_id => "bac",
                        $this->svg_rainbow_vortex => true,
                        $this->svg_text_color => "ffffff",
                        $this->svg_text => "BAC S"
                    ],
                $this->divider => false
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
                "featurette" =>
                [
                    0 => $this->texteETGL(),
                    1 => $this->texteM1Pro(),
                    2 => $this->texteL3Pro(),
                    3 => $this->texteDUT(),
                    4 => $this->texteBACS()
                ]
            ];
    }
}