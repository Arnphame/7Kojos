<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CouponController extends AbstractController
{
    /**
     * @Route("/admin/coupon", name="coupon")
     */
    public function index()
    {
        return $this->render('/AdminArea/coupons.html.twig', [
            'controller_name' => 'CouponController',
        ]);
    }

    /**
     * @Route("/admin/add_coupon", name="add_coupon")
     */
    public function AddCoupon()
    {
        return $this->render('/AdminArea/AddCoupon.html.twig', [
            'controller_name' => 'CouponController',
        ]);
    }
}
