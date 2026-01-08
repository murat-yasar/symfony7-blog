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
        // Display data for debugging
        // $posts = $repository->findAll();
        // dump($posts);    // Alt: dd($posts);     // for debugging (debug and die)

        return $this->render('post/index.html.twig', [
            'posts' => $repository->findAll(),
        ]);
    }

    #[Route('/post/{id<\d+>}')]
    public function show($id, PostRepository $repository): Response
    {
        $post = $repository->findOneBy(['id' => $id]);

        return $this->render('post/show.html.twig', ['post' => $post]);
    }
}
