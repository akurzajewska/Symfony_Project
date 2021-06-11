<?php

declare(strict_types=1);

namespace App\Controller;


use App\Entity\Customer;
use JMS\Serializer\Annotation\ReadOnly;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver;

class CustomerController extends AbstractController
{
    public function indexAction(Request $request)
    {
        $customers = $this->getDoctrine()->getRepository(Customer::class)->findAll();

        return $this->json($customers);
    }

    public function createAction (Request $request) : Response
    {
        return $this->json('');
    }
}