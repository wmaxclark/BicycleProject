<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    #[Route('/')]
    public function index(): Response
    {
        return new Response(
            '<html><body>Welcome to a basic bicycle application.</body></html>'
        );
    }
}