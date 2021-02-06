<?php

    /**
     * Class Traitement_Contact
     */
    class Traitement_Contact
    {

        private Render $render;
        private $config;

        /**
         * Traitement_Contact constructor.
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
        public function traitement_card()
        {
            return
                [
                    0 =>
                        [
                            "card-h5" =>
                                [
                                    "card-h5-fontawesome" => "fas fa-envelope-open",
                                    "card-h5-text" => "Adresse E-Mail"
                                ],
                            "card-p" =>
                                [
                                    "card-p-text" => "Cliquez sur ce bouton pour m'envoyer un e-mail depuis votre messagerie."
                                ],
                            "card-btn" =>
                                [
                                    "card-btn-href" => "mailto:m.minbielle@outlook.fr",
                                    "card-btn-color" => "light",
                                    "card-btn-target" => false,
                                    "card-btn-text" => "M'envoyer un e-mail"
                                ]
                        ],
                    1 =>
                        [
                            "card-h5" =>
                                [
                                    "card-h5-fontawesome" => "fab fa-linkedin",
                                    "card-h5-text" => "Profil LinkedIn"
                                ],
                            "card-p" =>
                                [
                                    "card-p-text" => "Cliquez sur ce bouton pour visionner mon profil LinkedIn sur un autre onglet."
                                ],
                            "card-btn" =>
                                [
                                    "card-btn-href" => "https://www.linkedin.com/in/morgan-minbielle-5619b8178/",
                                    "card-btn-color" => "light",
                                    "card-btn-target" => true,
                                    "card-btn-text" => "Voir mon profil"
                                ]
                        ]
                ];
        }

        public function traitement_toRender()
        {
            $data['card'] = $this->traitement_card();

            $data['chemin'] = $this->config['variables']['chemin'];
            $data['contact'] = true;
            
            $this->render->action_render($data);
        }

    }

?>