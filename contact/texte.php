<?php

    /**
     * Classe TexteContact
     * Contient l'ensemble du texte à afficher pour la page contact.
     */
    class TexteContact
    {
        /**
         * @var string
         */
        private String $card_h5 = "card-h5";
        /**
         * @var string
         */
        private String $card_h5_fontawesome = "card-h5-fontawesome";
        /**
         * @var string
         */
        private String $card_h5_text = "card-h5-text";
        /**
         * @var string
         */
        private String $card_p = "card-p";
        /**
         * @var string
         */
        private String $card_p_text = "card-p-text";
        /**
         * @var string
         */
        private String $card_btn = "card-btn";
        /**
         * @var string
         */
        private String $card_btn_href = "card-btn-href";
        /**
         * @var string
         */
        private String $card_btn_color = "card-btn-color";
        /**
         * @var string
         */
        private String $card_btn_target = "card-btn-target";
        /**
         * @var string
         */
        private String $card_btn_text = "card-btn-text";

        /**
         * Retourne un tableau formaté pour les différentes balises Mustache de la page Contacts.
         *
         * @return array[]
         */
        private function texteCard():array
        {
            return
            [
                0 =>
                    [
                        $this->card_h5 =>
                            [
                                $this->card_h5_fontawesome => "fas fa-envelope-open",
                                $this->card_h5_text => "Adresse E-Mail"
                            ],
                        $this->card_p =>
                            [
                                $this->card_p_text => "Cliquez sur ce bouton pour m'envoyer un e-mail depuis votre messagerie."
                            ],
                        $this->card_btn =>
                            [
                                $this->card_btn_href => "mailto:m.minbielle@outlook.fr",
                                $this->card_btn_color => "light",
                                $this->card_btn_target => false,
                                $this->card_btn_text => "M'envoyer un e-mail"
                            ]
                    ],
                1 =>
                    [
                        $this->card_h5 =>
                            [
                                $this->card_h5_fontawesome => "fab fa-linkedin",
                                $this->card_h5_text => "Profil LinkedIn"
                            ],
                        $this->card_p =>
                            [
                                $this->card_p_text => "Cliquez sur ce bouton pour visionner mon profil LinkedIn sur un autre onglet."
                            ],
                        $this->card_btn =>
                            [
                                $this->card_btn_href => "https://www.linkedin.com/in/morgan-minbielle-5619b8178/",
                                $this->card_btn_color => "light",
                                $this->card_btn_target => true,
                                $this->card_btn_text => "Voir mon profil"
                            ]
                    ]
            ];
        }

        /**
         * Retourne le tableau formaté final utilisé pour générer le rendu intégral.
         *
         * @return array
         */
        public function texteFinal(): array
        {
            return
                [
                    "card" => $this->texteCard(),
                ];
        }
    }