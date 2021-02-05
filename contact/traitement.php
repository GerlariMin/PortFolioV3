<?php

    class Traitement_Contact
    {

        private Render $render;
        private PDO $bdd;

        /**
         * Traitement_Contact constructor.
         * @param $print
         * @param $db
         */
        public function __construct($print, $db)
        {
            $this->render = $print;
            $this->bdd = $db;
        }

        /**
         * fonction pour une liaison avec une base de données
         * @return array
         */
        public function traitement_card_bdd()
        {
            $requete = "SELECT * FROM contact;";

            try
            {
                //on prépare la requête
                $requete = $this->bdd->prepare($requete);
                //on execute la requete
                $requete->execute();
            }
            catch (PDOException $e)
            {
                error_log($e->getMessage());
            }
            //on retourne le resultat sous forme de tableau associatif
            return $requete->fetchAll(PDO::FETCH_ASSOC);
        }

        /**
         * fonction pour une liaison avec une base de données
         * @param $tab
         * @return array
         */
        public function traitement_card_bdd_format($tab)
        {
            // On intialise le tableau formaté pour l'affichage
            $tab_format = [];
            // On récupère la taille du tableau
            $size_tab = count($tab);
            // On parcours la boucle et on remplit le tableau formaté final
            for($i = 0; $i < $size_tab; $i++)
            {
                // On attribut la valeur du booléen card-btn-target
                if($tab[$i]['card-btn-target'] === '0')
                {
                    $bool_target = false;
                }
                else
                {
                    $bool_target = true;
                }
                // Remplissage du tableau formaté
                $tab_format[$i] =
                    [
                        "card-h5" =>
                            [
                                "card-h5-fontawesome" => $tab[$i]['card-h5-fontawesome'],
                                "card-h5-text" => $tab[$i]['card-h5-text']
                            ],
                        "card-p" =>
                            [
                                "card-p-text" => $tab[$i]['card-p-text']
                            ],
                        "card-btn" =>
                            [
                                "card-btn-href" => $tab[$i]['card-btn-href'],
                                "card-btn-color" => $tab[$i]['card-btn-color'],
                                "card-btn-target" => $bool_target,
                                "card-btn-text" => $tab[$i]['card-btn-text']
                            ]
                    ];
            }
            // On retourne le tableau formaté
            return $tab_format;
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

            $data['chemin'] = "../";
            $data['contact'] = true;
            
            $this->render->action_render($data);
        }

    }

?>