<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use function Symfony\Component\String\u;

class VynilController
{
    #[Route('/')]
    public function homepage()
    {
        return new Response('Title: PB and Jams');
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