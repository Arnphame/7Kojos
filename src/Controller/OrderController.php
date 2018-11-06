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

    /**
     * @Route("/payment", name="payment")
     */
    public function payForOrder()
    {
        return $this->render('UserArea/PayForOrder.html.twig', [
            'controller_name' => 'OrderController',
        ]);
    }

    /**
     * @Route("/payByBank/", name="payByBank")
     */
    public function payByBank()
    {
        return $this->render('UserArea/payByBank.html.twig', [
            'controller_name' => 'OrderController',
        ]);
    }

    /**
     * @Route("/payByPaypal", name="payByPaypal")
     */
    public function payByPaypal()
    {
        return $this->render('UserArea/payByPaypal.html.twig', [
            'controller_name' => 'OrderController',
        ]);
    }

    /**
     * @Route("/payByCreditCard", name="payByCreditCard")
     */
    public function payByCreditCard()
    {
        return $this->render('UserArea/payByCreditCard.html.twig', [
            'controller_name' => 'OrderController',
        ]);
    }
}
