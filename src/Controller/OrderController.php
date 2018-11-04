<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    /**
     * @Route("/staff/order", name="order")
     */
    public function index()
    {
        return $this->render('StaffArea/order.html.twig', [
            'controller_name' => 'OrderController',
        ]);
    }
    /**
     * @Route("/staff/order/confirm", name="confirmOrder")
     */
    public function orderConfirmation()
    {
        return $this->render('StaffArea/confirmOrder.html.twig', [
            'controller_name' => 'OrderController',
        ]);
    }
}
