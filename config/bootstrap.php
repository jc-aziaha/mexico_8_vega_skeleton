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


    //  1- Charger l'autoloader de composer (psr-4)
    require __DIR__ . "/../vendor/autoload.php";


    // 2- Chargement des variables d'environnement
    require __DIR__ . "/packages/environment/dotenv.php";

