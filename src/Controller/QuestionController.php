<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Hello Homepage!');
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function questions($slug)
    {
        return new Response("Question $slug!");
    }
}