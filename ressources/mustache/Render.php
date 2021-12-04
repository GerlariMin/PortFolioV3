<?php

    /**
     * Class Render
     */
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
        public function __construct(string $chemin = "")
        {
            $this->mustache = new Mustache_Engine(
                [
                    'loader' => new Mustache_Loader_CascadingLoader(
                        [
                            new Mustache_Loader_FilesystemLoader($chemin . 'ressources/mustache'),
                            new Mustache_Loader_FilesystemLoader($chemin . 'ressources/mustache/svg'),
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

        /**
         * Fonction permettant d'afficher le contenu Mustache d'une page, avec les données contenues dans la variable $data
         * @param array $data
         */
        public function actionRendu(array $data = [])
        {
            //On extrait les données à afficher
            extract($data);
            //On affiche les données voulues
            echo $this->mustache->render("Body", $data);
        }

    }

?>