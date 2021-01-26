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
         * @return array[]
         */
        public function traitement_bd_highlight(): array
        {
            return
                [
                    0 => 
                        [
                            "fontawesome" => "fas fa-envelope-open",
                            "p-text" => "E-Mail",
                            "footer-href" => "mailto:m.minbielle@outlook.fr",
                            "footer-href-target" => false,
                            "footer-text" => "m.minbielle@outlook.fr"
                        ],
                    1 =>
                        [
                            "fontawesome" => "fab fa-linkedin",
                            "p-text" => "LinkedIn",
                            "footer-href" => "https://www.linkedin.com/in/morgan-minbielle-5619b8178/",
                            "footer-href-target" => true,
                            "footer-text" => "www.linkedin.com/in/morgan-minbielle-5619b8178/"
                        ]
                ];
        }

        public function traitement_toRender()
        {
            $data['bd-highlight'] = $this->traitement_bd_highlight();

            $data['chemin'] = "../";
            $data['contact'] = true;
            
            $this->render->action_render($data);
        }

    }

?>