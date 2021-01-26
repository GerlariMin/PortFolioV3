<?php

    class Render
    {
        /**
         * @var Mustache_Engine
         */
        private Mustache_Engine $mustache;

        /**
         * Render constructor.
         * @param string $chemin
         */
        public function __construct($chemin = "")
        {
            $this->mustache = new Mustache_Engine(
                [
                    'loader' => new Mustache_Loader_CascadingLoader(
                        [
                            new Mustache_Loader_FilesystemLoader($chemin . 'ressources/mustache'),
                            new Mustache_Loader_FilesystemLoader($chemin . 'accueil/mustache'),
                            new Mustache_Loader_FilesystemLoader($chemin . 'competences/mustache'),
                            new Mustache_Loader_FilesystemLoader($chemin . 'contact/mustache'),
                            new Mustache_Loader_FilesystemLoader($chemin . 'cv/mustache'),
                            new Mustache_Loader_FilesystemLoader($chemin . 'erreur/mustache'),
                            new Mustache_Loader_FilesystemLoader($chemin . 'experiences/mustache'),
                            new Mustache_Loader_FilesystemLoader($chemin . 'parcours/mustache'),
                            new Mustache_Loader_FilesystemLoader($chemin . 'presentation/mustache')
                        ]
                    )
                ]
            );
        }

        public function action_render($data = [])
        {
            //On extrait les données à afficher
            extract($data);

            echo $this->mustache->render("Body", $data);
        }

    }

?>