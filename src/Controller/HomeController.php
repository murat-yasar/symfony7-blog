<?php

// Define Controller
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;     // Include Response component for responses
use Symfony\Component\Routing\Attribute\Route;     // Include Route component for routing

// Define class HomeController
class HomeController extends AbstractController
{

   #[Route('/')]     // Define route path

   // Create function index
   public function index (): Response
   {
      // Return the output with a response
      return $this->render('home/index.html.twig');
   }
}