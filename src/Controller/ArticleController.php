<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="home c ")
     */
    public function homepage(): Response
    {
        return new Response("Homepage");
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug): Response
    {
        $comments = [
            "test 1",
            "test 2",
            "test 3"
        ];

        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace("-", " ", $slug)),
            'comments' => $comments
        ]);
    }
}
