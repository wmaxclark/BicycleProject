<?php
namespace App\Controller;

use App\Entity\Bicycle;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Controller for handling all requests in the application
 * 
 * @author William Clark <w.max.clark@gmail.com>
 */
class DefaultController
{
    #[Route('/')]
    public function index(): Response
    {
        $bicycle = new Bicycle();
        
        return new Response(
            '<html><body>Welcome to a basic bicycle application.
            <br/>
            The application has generated a representation of a bicycle.
            </body></html>'
        );
    }
}