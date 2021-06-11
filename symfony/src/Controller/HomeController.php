<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{

    public function homepage(): Response
    {
        return $this->render("welcome.html.twig", ['day'=>date('l')]);
    }
}
