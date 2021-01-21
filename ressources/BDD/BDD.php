<?php

    class BDD
    {

        private static $instance = null;

        private $pdo;

        private function __construct($dsnPDO, $usernamePDO, $passwordPDO, $optionPDO)
        {
            //On essaye les instruction dans le bloc try afin de récupérer les exceptions si il y à un problème
            try 
            {
                //Connexion à la base de données
                $this->pdo = new PDO($dsnPDO, $usernamePDO, $passwordPDO, $optionPDO);
            } 
            //Si jamais on attrape un problème lors de la connexion
            catch (PDOException $e) 
            {
                //on créé une variable $erreur qui affichera que la connexion a échoué et le motif de cet échec
                $erreur = "Connexion échouée " . $e->getMessage(); //$e.getMessage() permet de connaître le problème exact lors de la connexion
                //on affiche cette erreur dans le fichier des log
                error_log($erreur);
                var_dump($erreur);
            }
    
        }

        public static function get_BDD($dsnPDO, $usernamePDO, $passwordPDO, $optionPDO)
        {            
            //Si la classe n'a pas encore été instanciée
            if (is_null(self::$instance))
            {
                //On l'instancie
                self::$instance = new BDD($dsnPDO, $usernamePDO, $passwordPDO, $optionPDO); 
            }
            //On retourne l'instance
            return self::$instance->pdo;
        }
            
    }

?>