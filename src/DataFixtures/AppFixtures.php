<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Post;
use DateTimeImmutable;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Create a test post
        $post = new Post();
        $post->setTitle('Title One');
        $post->setContent('This is the first content.');
        $post->setDatetime(new DateTimeImmutable());

        $manager->persist($post);

        // Create a second test post
        $post = new Post();
        $post->setTitle('Title Two');
        $post->setContent('This is the second content.');
        $post->setDatetime(new DateTimeImmutable());

        $manager->persist($post);

        $manager->flush();
    }
}
