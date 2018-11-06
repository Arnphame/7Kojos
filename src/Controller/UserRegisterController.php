<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserRegisterController extends AbstractController
{
    /**
     * @Route("/register", name="user_register")
     */
    public function index()
    {
        return $this->render('UserArea/register.html.twig', [
            'controller_name' => 'UserRegisterController',
        ]);
    }
}
