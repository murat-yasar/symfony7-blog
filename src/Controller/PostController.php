<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\PostRepository;

final class PostController extends AbstractController
{
    #[Route('/posts', name: 'post_index')]
    public function index(PostRepository $repository): Response
    {
        // Find all the data from DB
        $posts = $repository->findAll();

        // dump($posts);    // for debugging
        dd($posts);     // for debugging (debug and die)

        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }
}
