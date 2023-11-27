<?php

use Symfony\Component\Dotenv\Dotenv;

    $dotenv = new Dotenv();

    // loads .env, .env.local
    // $data = $dotenv->loadEnv(__DIR__.'/../../../.env');
    $dotenv->loadEnv(dirname(__DIR__, 3). '/.env');