<?php

    /**
     * --------------------------------------------------------------------
     *                      Amorçeur de l'application
     * 
     * Ses rôles: 
     * 
     *      1- Charger l'autoloader de composer
     *      2- Charger les variables d'environnement
     *      3- Charger un conteneur de services
     *      4- Charger le loggueur
     *      5- Charger le débogueur
     * --------------------------------------------------------------------
     */


    //  1- Chargement de l'autoloader de composer (psr-4)
    require __DIR__ . "/../vendor/autoload.php";


    // 2- Chargement des variables d'environnement
    require __DIR__ . "/packages/environment/dotenv.php";


    // 3- Chargement du conteneur de services (psr-11)
    $container = require __DIR__ . "/packages/di/container.php";


    // 4- Chargement du loggueur (psr-3)
    require __DIR__ . "/packages/logger/monolog.php";


    // 5- Chargement du débogueur
    require __DIR__ . "/packages/error_handler/whoops.php";


    // 6- Chargement du moteur de template twig
    require __DIR__ . "/packages/twig/twig.php";




