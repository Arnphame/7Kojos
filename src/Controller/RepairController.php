<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RepairController extends AbstractController
{
    /**
     * @Route("/staff/repairOrder/add", name="AddRepairOrder")
     */
    public function AddRepairOrder()
    {
        return $this->render('StaffArea/AddRepairOrder.html.twig', [
            'controller_name' => 'RepairController',
        ]);
    }
    /**
     * @Route("/staff/repairOrder/edit", name="EditRepairOrder")
     */
    public function EditRepairOrder()
    {
        return $this->render('StaffArea/EditRepairOrder.html.twig', [
            'controller_name' => 'RepairController',
        ]);
    }
    /**
     * @Route("/staff/repairOrder/remove", name="RemoveRepairOrder")
     */
    public function RemoveRepairOrder()
    {
        return $this->render('StaffArea/RemoveRepairOrder.html.twig', [
            'controller_name' => 'RepairController',
        ]);
    }
	
	/**
     * @Route("/user/search", name="repairSearch")
     */
    public function repairSearch()
    {
        return $this->render('UserArea/repairSearch.html.twig', [
            'controller_name' => 'RepairController',
        ]);
    }
	
	/**
     * @Route("/staff/repairOrder/filter", name="Filter")
     */
    public function Filter()
    {
        return $this->render('StaffArea/Filter.html.twig', [
            'controller_name' => 'RepairController',
        ]);
    }
    
}