<?php

/**
 * Classe TexteParcours
 * Contient l'ensemble du texte à afficher pour la page de présentation.
 */

class TextePresentation
{
    /**
     * Variables correspondant aux balises Mustache de la page.
     */

    /**
     * @var string
     */
    private String $accroche_p = "accroche-p";
    /**
     * @var string
     */
    private String $active = "active";
    /**
     * @var string
     */
    private String $btn_color = "btn-color";
    /**
     * @var string
     */
    private String $btn_href = "btn-href";
    /**
     * @var string
     */
    private String $btn_text = "btn-text";
    /**
     * @var string
     */
    private String $carousel_caption_btn = "carousel-caption-btn";
    /**
     * @var string
     */
    private String $carousel_caption_h1 = "carousel-caption-h1";
    /**
     * @var string
     */
    private String $carousel_caption_h1_color = "carousel-caption-h1-color";
    /**
     * @var string
     */
    private String $carousel_caption_p = "carousel-caption-p";
    /**
     * @var string
     */
    private String $carousel_caption_text = "carousel-caption-text";
    /**
     * @var string
     */
    private String $carousel_id = "carousel-id";
    /**
     * @var string
     */
    private String $carousel_items = "carousel-items";
    /**
     * @var string
     */
    private String $carousel_fade = "carousel-fade";
    /**
     * @var string
     */
    private String $carousel_indicators = "carousel-indicators";
    /**
     * @var array
     */
    private array $config;
    /**
     * @var string
     */
    private String $data_bs_interval = "data-bs-interval";
    /**
     * @var string
     */
    private String $gallerie_ligne = "gallerie-ligne";
    /**
     * @var string
     */
    private String $featurette_divider = "featurette-divider";
    /**
     * @var string
     */
    private String $featurette_divider_final = "featurette-divider-final";
    /**
     * @var string
     */
    private String $featurette_heading = "featurette-heading";
    /**
     * @var string
     */
    private String $featurette_heading_h2 = "featurette-heading-h2";
    /**
     * @var string
     */
    private String $featurette_heading_h2_color = "featurette-heading-h2-color";
    /**
     * @var string
     */
    private String $featurette_heading_span = "featurette-heading-span";
    /**
     * @var string
     */
    private String $featurette_id = "featurette-id";
    /**
     * @var string
     */
    private String $featurette_img = "featurette-img";
    /**
     * @var string
     */
    private String $featurette_lead = "featurette-lead";
    /**
     * @var string
     */
    private String $featurette_reverse = "featurette-reverse";
    /**
     * @var string
     */
    private String $img = "img";
    /**
     * @var string
     */
    private String $section = "Voir la section";
    /**
     * @var string
     */
    private String $slide_to = "slide-to";
    /**
     * @var TraitementPresentation
     */
    private TraitementPresentation $traitement;

    /**
     * @param TraitementPresentation $traitement
     * @param array $config
     */
    public function __construct(TraitementPresentation $traitement, array $config)
    {
        $this->traitement = $traitement;
        $this->config = $config;
    }

    /**
     * @return string[][]
     */
    private function texteAccroche():array
    {
        $this->config['auteur']['age'] = $this->traitement->traitementAge($this->config['auteur']['naissance']);
        return
            [
                $this->accroche_p =>
                    [
                        0 => "Bonjour, je suis Morgan MINBIELLE, " . $this->config['auteur']['age'] . " ans, étudiant en Master ETGL au CFA AFORP d'Issy-les-Moulineaux, en alternance au sein de la DSI de l'École Polytechnique.",
                        1 => "Je suis diplômé d'une Licence Professionnelle Informatique (parcours sécurité des données), obtenu à l'UPEC et d'un DUT Informatique venant de l'IUT de Villetaneuse.",
                        2 => "Mon parcours d'études reflète mon intérêt pour le développement informatique en général (Web ou applicatif) et la façon dont on sécurise les programmes codés.",
                        3 => "Grâce au stage de DUT et aux choix des formations professionnelles (Licence et Master), j'ai pu mettre en pratique mes connaissances et compétences et en acquérir de nouvelles au sein d'une équipe.",
                        4 => "Curieux, aussi bien au niveau logiciel que matériel, je m'intéresse aux nouvelles technologies, langages et méthodes de développement en parallèle de mon cursus. De plus, mes études m'ont apporté la bonne pratique et la rigueur nécessaire au bon développement d'un programme et la façon de plannifier et gérer des projets de groupes. Ces projets portaient sur le développement Web ou logiciel.",
                        5 => "Lors de votre visite sur ce site, vous trouverez toutes les informations essentielles me concernant.",
                        6 => "Bonne visite !"
                    ]
            ];
    }

    /**
     * @return array
     */
    private function texteCarousel():array
    {
        return
            [
                $this->carousel_id => "carousel-presentation",
                $this->carousel_fade => true,
                $this->carousel_indicators =>
                    [
                        0 =>
                            [
                                $this->slide_to => "0",
                                $this->active => true
                            ],
                        1 =>
                            [
                                $this->slide_to => "1",
                                $this->active => false
                            ],
                        2 =>
                            [
                                $this->slide_to => "2",
                                $this->active => false
                            ]
                    ],
                $this->carousel_items =>
                    [
                        0 =>
                            [
                                $this->active => true,
                                $this->data_bs_interval => false,
                                $this->img => "img-005.jpg",
                                $this->carousel_caption_text => false,
                                $this->carousel_caption_h1 => "Technologie",
                                $this->carousel_caption_h1_color => "danger",
                                $this->carousel_caption_p => false,
                                $this->carousel_caption_btn =>
                                    [
                                        $this->btn_color => "danger",
                                        $this->btn_href => "#featurette-technologie",
                                        $this->btn_text => $this->section
                                    ]
                            ],
                        1 =>
                            [
                                $this->active => false,
                                $this->data_bs_interval => false,
                                $this->img => "img-003.jpg",
                                $this->carousel_caption_text => false,
                                $this->carousel_caption_h1 => "Sport",
                                $this->carousel_caption_h1_color => "info",
                                $this->carousel_caption_p => false,
                                $this->carousel_caption_btn =>
                                    [
                                        $this->btn_color => "info",
                                        $this->btn_href => "#featurette-sport",
                                        $this->btn_text => $this->section
                                    ]
                            ],
                        2 =>
                            [
                                $this->active => false,
                                $this->data_bs_interval => false,
                                $this->img => "img-006.jpg",
                                $this->carousel_caption_text => false,
                                $this->carousel_caption_h1 => "Photographie",
                                $this->carousel_caption_h1_color => "light",
                                $this->carousel_caption_p => false,
                                $this->carousel_caption_btn =>
                                    [
                                        $this->btn_color => "light",
                                        $this->btn_href => "#featurette-photo",
                                        $this->btn_text => $this->section
                                    ]
                            ]
                    ]
            ];
    }

    /**
     * @return array[]
     */
    private function texteFeaturette():array
    {
        return
            [
                0 =>
                    [
                        $this->featurette_id => "featurette-technologie",
                        $this->featurette_reverse => false,
                        $this->featurette_heading =>
                            [
                                $this->featurette_heading_h2 => "Technologie",
                                $this->featurette_heading_h2_color => "danger",
                                $this->featurette_heading_span => false
                            ],
                        $this->featurette_lead =>
                            [
                                0 => "En dehors du développement, je suis l'actualité sur tout ce qui touche aux innovations technologiques.",
                                1=> "Qu'elles soient issues du monde informatique, automobile ou autre, ces innovations, qui ont ou auront un impact sur notre quotidien, représentent le summum de la technique humaine."
                            ],
                        $this->featurette_img => "img-005.jpg",
                        $this->featurette_divider => true
                    ],
                1 =>
                    [
                        $this->featurette_id => "featurette-sport",
                        $this->featurette_reverse => true,
                        $this->featurette_heading =>
                            [
                                $this->featurette_heading_h2 => "Sport",
                                $this->featurette_heading_h2_color => "info",
                                $this->featurette_heading_span => false
                            ],
                        $this->featurette_lead =>
                            [
                                0 => "Passionné du sport automobile, je suis les diverses compétitions mondiales, et plus précisement, la Formule 1 et Formule E.",
                                1 => "J'aime également le tennis, que je pratique régulièrement (en club et en loisir) et du vélo occasionnellement.",
                            ],
                        $this->featurette_img => "img-003.jpg",
                        $this->featurette_divider => true
                    ],
                2 =>
                    [
                        $this->featurette_id => "featurette-photo",
                        $this->featurette_reverse => false,
                        $this->featurette_heading =>
                            [
                                $this->featurette_heading_h2 => "Photographie",
                                $this->featurette_heading_h2_color => "light",
                                $this->featurette_heading_span => "(amateur)"
                            ],
                        $this->featurette_lead =>
                            [
                                0 => "Amateur de beaux clichés, j'ai pour passe-temps de prendre de belles photos et de m'essayer à la retouche pour faire ressortir certains éléments.",
                            ],
                        $this->featurette_img => "img-006.jpg",
                        $this->featurette_divider =>
                            [
                                $this->featurette_divider_final => true
                            ]
                    ],
            ];
    }

    /**
     * @return string[][][]
     */
    private function texteGallerie():array
    {
        return
            [
                0 =>
                    [
                        $this->gallerie_ligne =>
                            [
                                0 => "img-010.jpg",
                                1 => "img-013.jpg",
                                2 => "img-009.jpg"
                            ]
                    ],
                1 =>
                    [
                        $this->gallerie_ligne =>
                            [
                                0 => "img-008.jpg",
                                1 => "img-012.jpg",
                                2 => "img-011.jpg"
                            ]
                    ],
                2 =>
                    [
                        $this->gallerie_ligne =>
                            [
                                0 => "img-004.jpg",
                                1 => "img-001.jpg",
                                2 => "img-007.jpg"
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
            "accroche" => $this->texteAccroche(),
            "carousel" => $this->texteCarousel(),
            "featurette" => $this->texteFeaturette(),
            "gallerie" => $this->texteGallerie()
        ];
    }
}