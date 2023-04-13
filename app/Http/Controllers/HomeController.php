<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function realisations()
    {
        $sites = [
            [
                'nom' => 'Site du pôle gestion des milieux naturels en Grand Est',
                'url' => 'https://gestion-milieux-grandest.fr/',
                'image' => 'images/realisations/pole_gestion.png',
                'description' => "Site internet et boîte à outils du pôle gestion des milieux naturels en Grand Est"
            ],
            [
                'nom' => 'Site du Conservatoire d\'espaces naturels de Lorraine',
                'url' => 'https://cen-lorraine.fr',
                'image' => 'images/realisations/site_cen.JPG',
                'description' => "Site Web du Conservatoire d'espaces naturels de Lorraine"
            ],
            [
                'nom' => 'PRAM Grand Est',
                'url' => 'https://app.pram-grandest.fr/',
                'image' => 'images/realisations/site_pram.JPG',
                'description' => "Application cartographique du PRAM Grand Est"
            ],
            // [
            //     'nom' => 'F J Rénovation',
            //     'url' => 'https://f-j-renovation.fr',
            //     'image' => 'images/realisations/fjrenovation.png',
            //     'description' => "Site Web pour Frédéric Jung, entrepreneur dans le batiment"
            // ],
            [
                'nom' => 'Marine ostéopathe',
                'url' => 'https://marine-osteopathe.fr',
                'image' => 'images/realisations/marine.png',
                'description' => "Site internet pour Marine Robert, ostéopathe à Weyersheim"
            ],
            [
                'nom' => 'AJS Saverne',
                'url' => 'https://ajs-saverne.fr',
                'image' => 'images/realisations/ajs.png',
                'description' => "Site Web pour l'association des jeunes séniors de Saverne"
            ]
        ];

        $applications = [
            [
                'nom' => 'Intranet - CENL',
                'image' => 'images/realisations/intranet_cen.JPG',
                'description' => "Intranet du CEN Lorraine : annuaire, agenda partagé, chat, et accès aux diverses applications internes à l'association."
            ],
            [
                'nom' => 'Application de congés - CENL',
                'image' => 'images/realisations/conges_cen.JPG',
                'description' => "Logiciel de demandes, suivi et gestion des congés, avec système de validation hiérarchique."
            ],
            [
                'nom' => 'Suivi de projet et suivi du temps de travail - CENL',
                'image' => 'images/realisations/tps_cen.JPG',
                'description' => "Logiciel de programmation de projet, et suivi du temps de travail des salariès."
            ]
        ];

        return response()->json(compact('sites', 'applications'));
    }

    public function services()
    {
        return view('services');
    }

    public function aPropos()
    {
        $experiences = [
            [
                'poste' => "Concepteur développeur informatique",
                'date' => "Février 2021 - Aujourd'hui",
                'entreprise' => "CEN LORRAINE",
                'description' => 
                "Création d’applications internes sous Laravel et VueJs, notamment la mise en place 
                d’un extranet, un logiciel de congés, une application de suivi et de gestion de 
                projet, des applications cartographiques avec leaflet, un CMS interne, ainsi qu’un 
                outil de gestion pour les conservatoires d’espaces naturels du Grand Est.",
                'competences' => 
                [
                    'Analyse des besoins', 'Conception', 'Développement Front-end et Back-end', 'Test et mise en production', 'Support technique', 'Veille technologique'
                ]
            ],
            [
                'poste' => "Concepteur développeur informatique",
                'date' => "Janvier 2019 - Janvier 2021",
                'entreprise' => "GRAND EST AUTOMOBILES",
                'description' => 
                "Création d'applications internes pour le groupe : un logiciel d'embauche et de suivi des collaborateurs pour les ressources humaines, une application de suivi et de gestion des projets marketing, un logiciel d'inventaire pour faciliter la gestion des concessions et d'autres applications spécifiques au fonctionnement de l'entreprise.",
                'competences' => 
                [
                    'Analyse des besoins', 'Conception', 'Développement Front-end et Back-end', 'Test et mise en production', 'Support technique', 'Veille technologique'
                ]
            ],
            [
                'poste' => "Formateur en développement web",
                'date' => "Septembre 2018 - Janvier 2019",
                'entreprise' => "CENTRE DE FORMATION ALAJI",
                'description' => "Apprentissage des bases du développement Web (Html, Css, Javascript, Php) pour des élèves novices.",
                'competences' => 
                [
                    'Création de cours', 'Création de contenus et d\'exercices', 'Accompagnement des élèves dans la recherche et le suivi de stage'
                ]
            ],
            [
                'poste' => "Stage développeur web",
                'date' => "Avril 2018 - Mai 2018",
                'entreprise' => "VILLE DE SAVERNE",
                'description' => "Dans le cadre d'un stage en développement web à la communauté de communes de Saverne :",
                'competences' => 
                [
                    'Création de plusieurs modules Wordpress'
                ]
            ],
            [
                'poste' => "Stage développeur web",
                'date' => "Mars 2017",
                'entreprise' => "JOHN STEEL COLMAR",
                'description' => "Dans le cadre d'un stage en développement web au sein de l'entreprise John Steel à Colmar :",
                'competences' => 
                [
                    'Création d`\'un monitoring de back-up'
                ]
            ],
            [
                'poste' => "Enseignant de la conduite",
                'date' => "Juillet 2013 - Décembre 2017",
                'entreprise' => "CONDUITE ACTUELLE",
                'description' => "Apprentissage de la conduite, cours de code, suivi pédagogique.",
                'competences' => []
            ]
        ];
        return response()->json(compact('experiences'));
    }

    public function technologies()
    {
        $technologies = [
            [
                'type' => 'Frameworks',
                'data' =>
                [
                    [
                        'nom' => 'LARAVEL',
                        'img' => 'images/logo/laravel.png',
                        'url' => 'https://laravel.com/',
                    ],
                    [
                        'nom' => 'VUE JS',
                        'img' => 'images/logo/vuejs.png',
                        'url' => 'https://vuejs.org/',
                    ],
                    [
                        'nom' => 'CODEIGNITER',
                        'img' => 'images/logo/codeigniter.webp',
                        'url' => 'https://www.codeigniter.com/',
                    ],
                ],
            ],
            [
                'type' => 'Langage de programmation',
                'data' =>
                [
                    [
                        'nom' => 'PHP',
                        'img' => 'images/logo/php.png',
                        'url' => 'https://www.php.net/',
                    ],
                    [
                        'nom' => 'JAVASCRIPT',
                        'img' => 'images/logo/js.png',
                        'url' => 'https://developer.mozilla.org/fr/docs/Web/JavaScript',
                    ],
                    [
                        'nom' => 'JQUERY',
                        'img' => 'images/logo/jquery.png',
                        'url' => 'https://jquery.com/',
                    ],
                    [
                        'nom' => 'HTML',
                        'img' => 'images/logo/html.png',
                        'url' => 'https://developer.mozilla.org/fr/docs/Web/HTML',
                    ],
                    [
                        'nom' => 'CSS',
                        'img' => 'images/logo/css.png',
                        'url' => 'https://developer.mozilla.org/fr/docs/Web/CSS',
                    ]
                ]
            ],
            [
                'type' => 'Base de données',
                'data' =>
                [
                    [
                        'nom' => 'POSTGRESQL',
                        'img' => 'images/logo/postgresql.png',
                        'url' => 'https://www.postgresql.org/',
                    ],
                    [
                        'nom' => 'MYSQL',
                        'img' => 'images/logo/mysql.webp',
                        'url' => 'https://www.mysql.com/fr/',
                    ]
                ]
            ],
            [
                'type' => 'CMS et autres',
                'data' =>
                [
                    [
                        'nom' => 'WORDPRESS',
                        'img' => 'images/logo/wordpress.jpg',
                        'url' => 'https://fr.wordpress.org/',
                    ],
                    [
                        'nom' => 'LEAFLET',
                        'img' => 'images/logo/leaflet.png',
                        'url' => 'https://leafletjs.com/',
                    ]
                ]
            ],
        ];

        return response()->json(compact('technologies'));
    }


    public function technologiesFavorites()
    {
        $technologies = [
            [
                'nom' => 'LARAVEL',
                'img' => 'images/logo/laravel.png',
                'url' => 'https://laravel.com/',
            ],
            [
                'nom' => 'VUE JS',
                'img' => 'images/logo/vuejs.png',
                'url' => 'https://vuejs.org/',
            ],
            [
                'nom' => 'POSTGRESQL',
                'img' => 'images/logo/postgresql.png',
                'url' => 'https://www.postgresql.org/',
            ],           
        ];

        return response()->json(compact('technologies'));
    }

}