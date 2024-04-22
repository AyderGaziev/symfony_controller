<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use function Symfony\Component\String\u;

class VynilController extends AbstractController
{
    #[Route('/')]
    public function homepage()
    {
        $tracks = [
            ['song' => 'Test', 'artist' => 'Test'],
            ['song' => 'Test', 'artist' => 'Test'],
            ['song' => 'Test', 'artist' => 'Test'],
            ['song' => 'Test', 'artist' => 'Test'],
            ['song' => 'Test', 'artist' => 'Test'],
        ];
        return $this->render('vinyl/homepage.html.twig', [
            'title' => 'PB and Jams',
            'tracks' => $tracks
        ]);
    }

    #[Route('/browse/{slug}')]
    public function browse($slug = null)
    {
        if ($slug){

            $title = "Genres" . u(str_replace('-', ' ', $slug))->title(true);
        } else {
            $title = "All Genres";
        }
        return new Response($title);
    }
}