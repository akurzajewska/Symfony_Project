<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class WelcomeController extends AbstractController
{

    public function welcome(): Response
    {
        return $this->render('welcome.html.twig', ['day'=>date('l')]);
    }
}
