<?php

    /**
     * Class Traitement_Presentation
     */
    class Traitement_Presentation
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
         * Traitement_Presentation constructor.
         * @param $print
         */
        public function __construct($print)
        {
            $this->render = $print;
            global $config;
            $this->config = $config;
        }

        /**
         * Retourne l'âge courant en fonction de la date actuelle de manière automatique.
         *
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
         * Retourne un tableau formaté pour les différentes balises Mustache pour l'affichage dubloc caroussel de la page de presentation.
         *
         * @return array
         */
        public function traitement_caroussel()
        {
            return $this->config['presentation']['caroussel'];
        }

        /**
         * Retourne un tableau formaté pour les différentes balises Mustache pour l'affichage du bloc accroche de la page de presentation.
         *
         * @return string[][]
         */
        public function traitement_accroche()
        {
            $age = $this->traitement_age($this->config['auteur']['naissance']);
            return
                [
                    "accroche-p" =>
                        [
                            0 => "Bonjour, je suis Morgan MINBIELLE, " . $age . " ans, étudiant en Master Informatique Professionnel (parcours logiciels sûrs), en alternance au sein de la DSI de l'École Polytechnique.",
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
         * Retourne un tableau formaté pour les différentes balises Mustache pour l'affichage du bloc featurette de la page de presentation.
         *
         * @return array[]
         */
        public function traitement_featurette()
        {
            return $this->config['presentation']['featurette'];
        }

        /**
         * Retourne un tableau formaté pour les différentes balises Mustache pour l'affichage du bloc gallerie de la page de presentation.
         *
         * @return string[][][]
         */
        public function traitement_gallerie()
        {
            return $this->config['presentation']['gallerie'];
        }

        /**
         * Affichage de la page de présentation.
         */
        public function traitement_toRender()
        {
            $data['accroche'] = $this->traitement_accroche();
            $data['carousel'] = $this->traitement_caroussel();
            $data['featurette'] = $this->traitement_featurette();
            $data['gallerie'] = $this->traitement_gallerie();

            $data['chemin'] = $this->config['variables']['chemin'];
            $data['presentation'] = true;
            
            $this->render->actionRendu($data);
        }

    }

?>