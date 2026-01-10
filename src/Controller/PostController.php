<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostType;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

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
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $post = new Post;
        $form = $this->createForm(PostType::class, $post);

        $form->handleRequest($request);

        // If the form values are valid and the form is submitted
        if ($form->isSubmitted() && $form->isValid())
        {
            $entityManager->persist($post);
            $entityManager->flush();

            // Display a success message
            $this->addFlash(
                'notice',
                'The post has been created successfully'
            );

            return $this->redirectToRoute('post_show', [
                'id' => $post->getId()
            ]);
        }

        return $this->render('post/new.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route(path: '/post/{id<\d+>}/edit', name: 'post_edit')]
    public function edit(Post $post, Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PostType::class, $post);

        $form->handleRequest($request);

        // If the form values are valid and the form is submitted
        if ($form->isSubmitted() && $form->isValid())
        {
            $entityManager->flush();

            // Display a success message
            $this->addFlash(
                'notice',
                'The post has been updated successfully'
            );

            return $this->redirectToRoute('post_show', [
                'id' => $post->getId()
            ]);
        }

        return $this->render('post/edit.html.twig', [
            'form' => $form,
        ]);
    }
}
