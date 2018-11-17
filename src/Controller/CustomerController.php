<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CustomerController extends AbstractController
{
    /**
     * @Route("/admin/customers/add", name="AddCustomer")
     */
    public function AddCustomer()
    {
        return $this->render('AdminArea/AddCustomer.html.twig', [
            'controller_name' => 'CustomerController',
        ]);
    }
    /**
     * @Route("/admin/customers/edit", name="EditCustomer")
     */
    public function EditCustomer()
    {
        return $this->render('AdminArea/EditCustomer.html.twig', [
            'controller_name' => 'CustomerController',
        ]);
    }
    /**
     * @Route("/admin/customers/remove", name="RemoveCustomer")
     */
    public function RemoveCustomer()
    {
        return $this->render('AdminArea/RemoveCustomer.html.twig', [
            'controller_name' => 'CustomerController',
        ]);
    }
	/**
     * @Route("/admin/reports/customers", name="CustomersOrderReport")
     */
    public function CustomersOrderReport()
    {
        return $this->render('AdminArea/CustomersOrderReport.html.twig', [
            'controller_name' => 'CustomerController',
        ]);
    }
}
