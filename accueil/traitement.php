<?php

    class Traitement_Accueil
    {

        private $render;
        private $bdd;

        public function __construct($print, $db)
        {
            $this->render = $print;
            $this->bdd = $db;
        }

        private function traitement_line()
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
                //retournera une erreur (fonction définie dans BDDClass)
                self::ErreurSurBdd($e);
            }
            //on retourne le resultat sous forme de tableau associatif
            return $requete->fetchAll(PDO::FETCH_ASSOC);
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