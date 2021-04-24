[PortFolio Morgan MINBIELLE](https://monportfolio-mm.000webhostapp.com/accueil/)
========

> Auteur: [Morgan MINBIELLE](https://monportfolio-mm.000webhostapp.com/accueil/)
> 
> Temps de lecture: ~ 7 minutes
> 
> `Version: 3.0`

---

## Table des matières
- [Résumé](#Résumé)
- [Détails](#Détails)
- [Arborescence](#Arborescence)
- [Code](#Code)
- [Versions](#Versions)
- [TODO](#TODO)
- [Composer](#Composer)

---

## Résumé

Troisième version de mon PortFolio sur laquelle j'ai voulu mettre en place une nouvelle structure en place (inspirée de ce que j'ai appris au sein de mon alternance).   
Elle diffère de la version antérieure, qui elle était basée sur la structure [**_MVC_**](https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4678736-comment-fonctionne-une-architecture-mvc#:~:text=%20Comment%20fonctionne%20une%20architecture%20MVC%20%3F%20,qui%20prend%20des%20d%C3%A9cisions.%20C%27est%20en...%20More%20) que j'avais étudié lors de mon **DUT** et sur Mustache que j'ai vu en **L3**.  
Il s'agit d'une présentation sommaire de mes compétences, mon parcours et mes loisirs.

## Détails

Chaque onglet (**`Accueil`, `Présentation`, `Parcours`, `Expériences`, `Compétences`, `Contact`, `CV`**)[^1] correspond à un répertoire éponyme.  
**Chaque répertoire contient une _vue_** (dans le répertoire **`mustache/`**), **un _index_** (qui permet d'utiliser les bonnes ressources et variables pour afficher la page voulue), **une classe contenant ce qu'il faut afficher** (**_texte.php_**) **et une classe de traitement** (**_traitement.php_**) qui récupère les bons textes et les intègre au tableau formaté pour correspondre à l'affichage [**_Mustache_**](https://mustache.github.io/mustache.5.html) voulu (via des balises précisent).  
Les ressources communes sont dans le répertoire `ressources/`.  
L'ensembles des sources que j'ai utilisé sont visibles dans les commentaires du code (visibiles également en visitant le site web, en activant l'outils de développeur du navigateur pour voir le code affiché, accessible avec la touche **_`F12`_**[^2]).

## Arborescence

- `accueil/`
    - `css/`
        - accueil.css
    - `js/`
        - accueil.js
    - `mustache/`
        - accueil.mustache
    - index.php
    - texte.php
    - traitement.php
- `competences/`
    - `mustache/`
        - competences.mustache
    - index.php
    - texte.php
    - traitement.php
- `contact/`
    - `css/`
        - contact.css
    - `js/`
        - contact.js
    - `mustache/`
        - contact.mustache
    - index.php
    - texte.php
    - traitement.php
- `cv/`
    - `css/`
        - cv.css
    - `js/`
        - cv.js
    - `mustache/`
        - cv.mustache
    - index.php
    - traitement.php
- `erreur/`
    - `css/`
        - erreur.css
    - `js/`
        - bas.js
        - droid_sans_bold.typeface.js
        - erreur.js
        - FontUtils.js
        - pnltri.js
        - TextGeometry.js
        - three.min.js
        - TweenMax.min.js
    - `mustache/`
        - erreur.mustache
    - index.php
    - traitement.php
- `experiences/`
    - `mustache/`
        - experiences.mustache
    - index.php
    - traitement.php
- `parcours/`
    - `css/`
        - parcours.css
        - test.css
    - `mustache/`
        - parcours.mustache
    - index.php
    - traitement.php
- `presentation/`
    - `mustache/`
        - presentation.mustache
    - index.php
    - traitement.php
- `ressources/`
    - `config/`
        - config.inc.php
    - `documentation/`
        - `html/`
            - (fichiers générés par doxygen)
    - `images/`
        - (images utiles pour le site)
    - `js/`
        - sweetalert.min.js
    - `mustache/`
        - `svg/`
            - svg-abstract-timekeeper.mustache
            - svg-default.mustache
            - svg-diamond-sunset.mustache
            - svg-dragon-scales.mustache
            - svg-potruding-squares.mustache
            - svg-rainbow-vortex.mustache
            - svg-subbtle-prism.mustache
            - svg-sun-tornado.mustache
        - Body.mustache
        - Footer.mustache
        - Head.mustache
        - Navbar.mustache
        - Render.php
    - `pdf/`
        - (fichiers utiles pour le site)
    - `php/`
        - fichiers_communs.php
    - `vendor/`
    - composer.json
    - composer.lock
- `tests/`
- .htaccess
- index.php
- README.md

## Code [^3]

---

### Code commun

#### index.php

```PHP
if(array_key_first($_GET))
{
    switch(strtolower(array_key_first($_GET)))
    {
        case 'accueil':
            header("Location: ./accueil/");
            break;

        case 'competences':
            header("Location: ./competences/");
            break;

        case 'contact':
            header("Location: ./contact/");
            break;

        case 'cv':
            header("Location: ./cv/");
            break;

        case 'experiences':
            header("Location: ./experiences/");
            break;

        case 'parcours':
            header("Location: ./parcours/");
            break;

        case 'presentation':
            header("Location: ./presentation/");
            break;

        default:
            header("Location: ./erreur/");
            break;
    }
}
else
{
    header("Location: ./accueil/");
    exit();
}
```

#### Render.php

```PHP
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
     * @param array $data
     */
    public function action_render($data = [])
    {
        //On extrait les données à afficher
        extract($data);

        echo $this->mustache->render("Body", $data);
    }

}
```

#### fichiers_communs.php

```PHP
include("../ressources/config/config.inc.php");
global $config;

include($config['variables']['chemin'] . "ressources/vendor/autoload.php");
include($config['variables']['chemin'] . "ressources/mustache/Render.php");

include("traitement.php");

$render = new Render($config['variables']['chemin']);
```

---

### Code type répertoire (**_`accueil/`_**)

#### accueil/index.php

```PHP
include("../ressources/php/fichiers_communs.php");
include("texte.php");

global $render;

$traitement = new TreatmentHome($render);
$traitement->treatmentToRender();
```

#### accueil/texte.php

```PHP
class TextHome
{
    /**
     * @var String line_id
     */
    private String $line_id = "line_id";
    /**
     * @var String line_left_content
     */
    private String $line_left_content = "line_left_content";
    /**
     * @var String line_right_content
     */
    private String $line_right_content = "line_right_content";
    /**
     * @var String line_span_class
     */
    private String $line_span_class = "line_span_class";
    /**
     * @var string spanFast
     */
    private String $spanFast = "spanFast";
    /**
     * @var string spanSlow
     */
    private String $spanSlow = "spanSlow";

    /**
     * Retourne un tableau formaté pour les différentes balises Mustache de la page d'accueil.
     *
     * @param $config
     * @return array[]
     */
    public function textLine($config): array
    {
        return
            [
                0 =>
                    [
                        $this->line_id => "1",
                        $this->line_left_content => $config['auteur']['nomComplet'],
                        $this->line_right_content => $config['auteur']['nomComplet'],
                        $this->line_span_class => $this->spanSlow
                    ],
                1 =>
                    [
                        $this->line_id =>  "2",
                        $this->line_left_content => $config['auteur']['titre'],
                        $this->line_right_content => $config['auteur']['titre'],
                        $this->line_span_class => $this->spanFast
                    ],
                2 =>
                    [
                        $this->line_id => "3",
                        $this->line_left_content => $config['auteur']['etablissement'],
                        $this->line_right_content => $config['auteur']['etablissement'],
                        $this->line_span_class => $this->spanSlow
                    ],
                3 =>
                    [
                        $this->line_id => "4",
                        $this->line_left_content => $config['auteur']['annee'],
                        $this->line_right_content => $config['auteur']['annee'],
                        $this->line_span_class => $this->spanFast
                    ]
            ];
    }

}
```

#### accueil/traitement.php

```PHP
class TreatmentHome
{

    /**
     * @var Render render
     */
    private Render $render;
    /**
     * @var array config
     */
    private array $config;
    /**
     * @var TextHome text
     */
    private TextHome $text;

    /**
     * Traitement_Accueil constructor.
     *
     * @param $print
     */
    public function __construct($print)
    {
        $this->render = $print;
        global $config;
        $this->config = $config;
        $this->text = new TextHome();
    }

    /**
     * Retourne un tableau formaté pour les différentes balises Mustache de la page d'accueil.
     *
     * @return array
     */
    private function treatmentLine(): array
    {
        return $this->text->textLine($this->config);
    }

    /**
     * Affichage de la page d'accueil.
     */
    public function treatmentToRender(): void
    {
        $data['line'] = $this->treatmentLine();
        
        $data['chemin'] = $this->config['variables']['chemin'];
        $data['accueil'] = true;

        $this->render->action_render($data);
    }

}
```

#### accueil/mustache/accueil.mustache

```HTML
<!-- Fichier CSS associé -->
<link rel="stylesheet" href="css/accueil.css"/>

<!-- Code HTML -->
<div class="wrap">

    {{#line}}
    <div class="line" id="line_{{line_id}}">

        <div class="left">
            <div class="content">
                <span class="{{line_span_class}}">{{line_left_content}}</span>
            </div>
        </div><!--
                    Ne pas faire de retour charriot en dehors du commentaire (entre la div left et right), car cela déformera l'animation.
            --><div class="right">
        <div class="content">
            <span class="{{line_span_class}}">{{line_right_content}}</span>
        </div>
    </div>

    </div>
    {{/line}}

</div>

<!-- Fichier JavaScript associé -->
<script src="js/accueil.js"></script>
```

---

### Vues communes

#### Head.mustache

```HTML
<html class="h-100 w-100">

<head>
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0"> -->
    <title>Morgan MINBIELLE</title>
    <link rel="icon" type="image/png" href="{{chemin}}ressources/images/site.png">

    <script type="text/javascript" src="{{chemin}}ressources/vendor/components/jquery/jquery.js"></script>
    <script type="text/javascript" src="{{chemin}}ressources/vendor/components/jqueryui/jquery-ui.js"></script>

    <link rel="stylesheet" href="{{chemin}}ressources/vendor/twbs/bootstrap/dist/css/bootstrap.css"/>
    <link rel="stylesheet" href="{{chemin}}ressources/vendor/fortawesome/font-awesome/css/all.css"/>

    <script src="{{chemin}}ressources/vendor/fortawesome/font-awesome/js/all.js"></script>
    <script type="text/javascript" src="{{chemin}}ressources/vendor/twbs/bootstrap/dist/js/bootstrap.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</head>

<body class="h-100 w-100 bg-dark text-white">
```

#### Navbar.mustache

```HTML
    <nav class="navbar navbar-expand-lg nav-masthead navbar-dark bg-dark" style="border-bottom: 1px solid white;">

    <div class="container-fluid">

        <b>
            <a class="navbar-brand" href="{{chemin}}accueil/" style="padding-right: 1.5em; border-right: 1px solid;">
                Accueil
            </a>
        </b>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link {{#presentation}}active{{/presentation}}" aria-current="page" href="{{chemin}}presentation/">Présentation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{#parcours}}active{{/parcours}}" href="{{chemin}}parcours/">Parcours</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{#experiences}}active{{/experiences}}" href="{{chemin}}experiences/">Expériences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{#competences}}active{{/competences}}" href="{{chemin}}competences/">Compétences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{#contact}}active{{/contact}}" href="{{chemin}}contact/">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{#cv}}active{{/cv}}" href="{{chemin}}cv/">CV</a>
                </li>

            </ul>

        </div>

        <a class="btn btn-outline-success" href="{{chemin}}ressources/documentation/html/files.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Documentation Doxygen">Doc</a>

    </div>

</nav>
```

#### Body.mustache

```mustache
{{>Head}}

    {{>Navbar}}

    {{#accueil}}
        {{>accueil}}
    {{/accueil}}

    {{#competences}}
        {{>competences}}
    {{/competences}}

    {{#contact}}
        {{>contact}}
    {{/contact}}

    {{#cv}}
        {{>cv}}
    {{/cv}}

    {{#erreur}}
        {{>erreur}}
    {{/erreur}}

    {{#experiences}}
        {{>experiences}}
    {{/experiences}}

    {{#parcours}}
        {{>parcours}}
    {{/parcours}}

    {{#presentation}}
        {{>presentation}}
    {{/presentation}}

{{>Footer}}
```

#### Footer.mustache

```HTML
    </body>

</html>
```

## Versions

> `v3.0` `Bootstrap 4.6` `CSS 3` `Doxygen` `fontawesome 5.15` `HTML 5` `JavaScript` `jquery` `jquery-ui` `Mustache` `PHP 7.4/8` `PHPUnit`
> [Code source](https://github.com/GerlariMin/PortFolioV1)
> [URL](https://monportfolio-mm.000webhostapp.com/accueil/)

> `v2.0` `Bootstrap 4.6` `composer` `CSS 3` `fontawesome 5.12` `JavaScript` `jquery` `jquery-ui` `Mustache` `MVC` `PHP 5`
> [Code source](https://github.com/GerlariMin/PortFolioV2)
> [~~URL~~]()

> `v1.0` `Bootstrap 4.3` `CSS 3` `fontawesome 5.10` `HTML 5` `JavaScript` `jquery` `jquery-ui` `Mustache`
> [Code source](https://github.com/GerlariMin/PortFolioV1)
> [URL](https://gerlarimin.github.io/PortFolioV1/)

## TODO

Pages

- [x] Accueil
- [x] Présentation
- [x] Parcours
- [x] Expériences
- [x] Compétences
- [x] Contact
- [x] CV
- [x] Documentation
- [ ] Projets

Autres
- [x] PHP 7.4
- [x] Mustache
- [ ] Classes de textes
- [ ] Nettoyer config.inc.php
- [ ] Tests PHPUnit

## Composer

```JSON
{
  "require": {
    "php": ">=7.4",
    "components/jquery": ">=3.5.1",
    "components/jqueryui": ">=1.12.1",
    "twbs/bootstrap": ">= 3.4.1",
    "mustache/mustache": ">=2.13.0",
    "fortawesome/font-awesome": ">=5.12"
  },
  "require-dev": {
    "phpunit/phpunit": "^9.5"
  },
  "name": "portfolio/portfolio-mm",
  "description": "Site Web personalisé."
}
```

[^1]: Liste des onglets principaux du site. D'autres onglets peuvent être présent sur le [site](https://monportfolio-mm.000webhostapp.com/accueil/)
[^2]: Peut varier en fonction du navigateur utilisé.
[^3]: Contient des extraits de code représentatif, l'ensemble des fichiers sont consultables sur le [répertoire Git](https://github.com/GerlariMin/PortFolioV3). L'emplacement exacte du fichier se trouver dans la section **_`Arborescence`_** du README.
