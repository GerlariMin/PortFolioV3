<?php

    class Traitement_Accueil
    {

        private Render $render;
        private PDO $bdd;

        /**
         * Traitement_Accueil constructor.
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
        private function traitement_line_bdd(): array
        {
            $requete = "SELECT * FROM accueil;";

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
         * @return string[][]
         */
        private function traitement_line(): array
        {
            return 
                [
                    0 => 
                        [
                            'line_id' => "1",
                            'line_left_content' => "Morgan MINBIELLE",
                            'line_right_content' => "Morgan MINBIELLE",
                            'line_span_class' => "spanSlow"
                        ],
                    1 => 
                        [
                            'line_id' =>  "2",
                            'line_left_content' => "Alternant / Développeur",
                            'line_right_content' => "Alternant / Développeur",
                            'line_span_class' => "spanFast"
                        ],
                    2 => 
                        [
                            'line_id' => "3",
                            'line_left_content' => "UPEC / Ecole Polytechnique",
                            'line_right_content' => "UPEC / Ecole Polytechnique",
                            'line_span_class' => "spanSlow"
                        ],
                    3 => 
                        [
                            'line_id' => "4",
                            'line_left_content' => "Master M1 Pro",
                            'line_right_content' => "Master M1 Pro",
                            'line_span_class' => "spanFast"
                        ]
                ];
        }

        public function traitement_toRender()
        {
            $data['line'] = $this->traitement_line();
            
            $data['chemin'] = "../";
            $data['accueil'] = true;
            
            $this->render->action_render($data);
        }

    }

?>