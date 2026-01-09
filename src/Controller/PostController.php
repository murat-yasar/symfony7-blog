<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\PostRepository;
use App\Entity\Post;
use App\Form\PostType;

final class PostController extends AbstractController
{
    // List the posts
    #[Route(path: '/posts', name: 'post_index')]
    public function index(PostRepository $repository): Response
    {
        // Display data for debugging
        // $posts = $repository->findAll();
        // dump($posts);    // Alt: dd($posts);     // for debugging (debug and die)

        return $this->render('post/index.html.twig', [
            'posts' => $repository->findAll(),
        ]);
    }

    // Show a post
    #[Route(path: '/post/{id<\d+>}', name: 'post_show')]
    // public function show($id, PostRepository $repository): Response
    // {
    //     // $post = $repository->find($id);                        // Search by primary key
    //     $post = $repository->findOneBy(['id' => $id]);  // Search by any criteria

    //     if($post === null)
    //     {
    //         throw $this->createNotFoundException('Post not found');
    //     }

    //     return $this->render('post/show.html.twig', ['post' => $post]);
    // }

    // Alt Approach (Do not forget to use App\Entitiy\Post class)
    public function show(Post $post): Response
    {
        return $this->render('post/show.html.twig', ['post' => $post]);
    }

    // Create a new post
    #[Route(path: '/post/new', name: 'post_new')]
    public function new(): Response
    {
        $form = $this->createForm(PostType::class);
        return $this->render('post/new.html.twig', [
            'form' => $form,
        ]);
    }
}
