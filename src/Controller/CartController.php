<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
	/**
     * @Route("/user/cart/cart", name="checkout")
     */
    public function checkout()
    {
        return $this->render('UserArea/checkout.html.twig', [
            'controller_name' => 'CartController',
        ]);
    }   
}