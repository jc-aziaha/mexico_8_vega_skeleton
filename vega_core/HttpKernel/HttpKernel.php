<?php
namespace VegaCore\HttpKernel;

use VegaCore\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

    abstract class HttpKernel implements HttpKernelInterface
    {
        /**
         * Cette méthode du noyau lui permet de soumettre la requête du client pour traitement
         * et de retourner la réponse correspondante.
         *
         * @param Request $request
         * @return Response
         */
        public function handle(Request $request): Response
        {
            $response = new Response(
                'Hello World',
                Response::HTTP_OK,
                ['content-type' => 'text/html']
            );

            return $response;
        }
    }