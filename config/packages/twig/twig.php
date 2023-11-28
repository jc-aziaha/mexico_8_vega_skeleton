<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;


// $container->set(Environment::class, \DI\value(function() {
//     $loader = new FilesystemLoader(dirname(__DIR__, 3) . "/templates");
//     $twig   = new Environment($loader, [
//         'cache' => dirname(__DIR__, 3) . "/var/cache/twig",
//         'auto_reload' => true
//     ]);

//     return $twig;
// }));