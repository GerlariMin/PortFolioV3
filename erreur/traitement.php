<?php

    class Traitement_Erreur
    {

        private Render $render;
        private $config;

        /**
         * Traitement_Erreur constructor.
         * @param $print
         */
        public function __construct($print)
        {
            $this->render = $print;
            global $config;
            $this->config = $config;
        }

        /**
         * @param $typeErreur
         * @return string
         */
        public function traitement_typeErreur($typeErreur)
        {
            $erreur = "";
            switch($typeErreur)
            {
                case '404':
                    $erreur = "Page introuvable";
                    break;
                case '401':
                    $erreur = "Acces interdit";
                    break;
                case '403':
                    $erreur = "Dossier non accessible";
                    break;
                case '405':
                    $erreur = "Erreur serveur interne";
                    break;
                default:
                    $erreur = "";
                    break;
            }
            return $erreur;
        }

        /**
         * @param null $typeErreur
         */
        public function traitement_toRender($typeErreur = null)
        {
            // Si l'index a été appelé depuis le fichier .htaccess
            if($typeErreur)
            {
                $data['type-erreur'] = htmlspecialchars($typeErreur);
                $data['message-erreur'] = htmlspecialchars($this->traitement_typeErreur($typeErreur));
            }

            $data['chemin'] = $this->config['variables']['chemin'];
            $data['erreur'] = true;
            
            $this->render->action_render($data);
        }

    }

?>