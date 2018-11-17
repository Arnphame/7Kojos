<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelpController extends AbstractController
{
	/**
     * @Route("/user/userHelp/basic", name="CommonQuestions")
     */
    public function CommonQuestions()
    {
        return $this->render('UserArea/CommonQuestions.html.twig', [
            'controller_name' => 'HelpController',
        ]);
    }
	/**
     * @Route("/user/userHelp/complicated", name="MostPopularProducts")
     */
    public function MostPopularProducts()
    {
        return $this->render('UserArea/MostPopularProducts.html.twig', [
            'controller_name' => 'HelpController',
        ]);
    }
}