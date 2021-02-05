<?php

    class Traitement_Presentation
    {

        private Render $render;
        private PDO $bdd;

        /**
         * Traitement_Presentation constructor.
         * @param $print
         * @param $db
         */
        public function __construct($print, $db)
        {
            $this->render = $print;
            $this->bdd = $db;
        }

        /**
         * @param $date
         * @return false|int|string
         */
        public function traitement_age($date)
        {
            $age = (int) date('Y') - (int) $date;

            if (date('md') < date('md', strtotime($date)))
            {
                return $age - 1;
            }

            return $age;
        }

        /**
         * @return array
         */
        public function traitement_caroussel()
        {
            return
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
        }

        /**
         * @return string[][]
         */
        public function traitement_accroche()
        {
            $age_courant = $this->traitement_age('1997-03-27');
            return
                [
                    "accroche-p" =>
                        [
                            0 => "Bonjour, je suis Morgan MINBIELLE, " . $age_courant . " ans, étudiant en Master Informatique Professionnel (parcours logiciels sûrs), en alternance au sein de la DSI de l'École Polytechnique.",
                            1 => "Je suis diplômé d'une Licence Professionnelle Informatique (parcours sécurité des données), obtennu à l'UPEC et d'un DUT Informatique venant de l'IUT de Villetaneuse.",
                            2 => "Mon parcours d'études reflète mon intérêt pour le développement informatique en général (Web ou applicatif) et la façon dont on sécurise les programmes codés.",
                            3 => "Grâce au stage de DUT et au choix des formations professionnelles (Licence et Master), j'ai pu mettre en pratique mes connaissances et compétences et en acquérir de nouvelles au sein d'une équipe.",
                            4 => "Curieux, aussi bien au niveau logiciel que matériel, je m'intéresse aux nouvelles technologies, langages et méthodes de développement en parallèle de mon cursus. De plus, mes études m'ont apporté la bonne pratique et la rigueur nécessaire au bon développement d'un programme et la façon de plannifier et gérer des projets de groupes. Ces projets portaient sur le développement Web ou logiciel.",
                            5 => "Lors de votre visite sur ce site, vous trouverez toutes les informations essentielles me concernant.",
                            6 => "Bonne visite !"
                        ]
                ];
        }

        /**
         * @return array[]
         */
        public function traitement_featurette()
        {
            return
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
                                    1=> "Quelles soient issues du monde informatique, automobile ou autre, ces innovations, qui ont ou auront un impact sur notre quotidien, représentent le summum de la technique humaine."
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
                                    1 => "J'aime également le tennis, que je pratique régulièrement (en club et en loisir) et du vélo occasionnellement",
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
                                    0 => "Amateur de beaux clichés, j'ai pour passe temps de prendre de belles photos lors de mon quotidien et de m'essayer à la retouche pour faire ressortir certains éléments.",
                                ],
                            "featurette-img" => "img-006.jpg",
                            "featurette-divider" =>
                                [
                                    "featurette-divider-final" => true
                                ]
                        ],
                ];
        }

        /**
         * @return string[][][]
         */
        public function traitement_gallerie()
        {
            return
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
        }

        public function traitement_toRender()
        {
            $data['accroche'] = $this->traitement_accroche();
            $data['carousel'] = $this->traitement_caroussel();
            $data['featurette'] = $this->traitement_featurette();
            $data['gallerie'] = $this->traitement_gallerie();

            $data['chemin'] = "../";
            $data['presentation'] = true;
            
            $this->render->action_render($data);
        }

    }

?>