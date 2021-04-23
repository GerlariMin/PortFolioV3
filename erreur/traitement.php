<?php

    /**
     * Class Traitement_Erreur
     */
    class Traitement_Erreur
    {

        /**
         * @var Render
         */
        private Render $render;
        /**
         * @var array
         */
        private array $config;

        /**
         * Traitement_Erreur constructor.
         *
         * @param $print
         */
        public function __construct($print)
        {
            $this->render = $print;
            global $config;
            $this->config = $config;
        }

        /**
         * Gestion du message d'erreur en fonction du type d'erreur rencontré (erreur 401, 403, 404, ...).
         *
         * @param $typeErreur
         * @return string
         */
        public function traitement_typeErreur($typeErreur): string
        {
            switch($typeErreur)
            {
                case '401':
                    $erreur = "Acces interdit";
                    break;
                case '403':
                    $erreur = "Dossier non accessible";
                    break;
                case '404':
                    $erreur = "Page introuvable";
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
         * Affichage de la page d'erreur.
         *
         * @param null $typeErreur
         */
        public function traitement_toRender($typeErreur = null): void
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