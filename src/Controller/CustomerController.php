<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Customer;
use App\Form\CustomerType;

class CustomerController extends AbstractController
{
    /**
     * @Route("/admin/customers", name="CustomersList")
     */
    public function CustomersList()
    {
        $rep = $this->getDoctrine()->getRepository('App:Customer');
        $customers = $rep->findAll();

        return $this->render(
            'AdminArea/customers.html.twig',
            array('customers' => $customers)
        );
    }
    
    /**
     * @Route("/admin/customers/add", name="AddCustomer")
     */
    public function AddCustomer(Request $request)
    {
        $customer = new Customer();
        $form = $this->createForm(CustomerType::class, $customer);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($customer);
            $em->flush();
            
            return $this->redirectToRoute('CustomersList');
        }
        return $this->render(
            'AdminArea/AddCustomer.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
     * @Route("/admin/customers/edit/{id}", name="EditCustomer")
     */
    public function EditCustomer($id, Request $request)
    {
        $customer = $this->getDoctrine()->getRepository(Customer::class)->findOneBy(['id' => $id]);
        $em = $this->getDoctrine()->getManager();

        if(!$customer)
        {
            return $this->render(
                'AdminArea/customers.html.twig',
                array('error' => 'No customer with $id found')
            );
        }
        $form = $this->createForm(CustomerType::class, $customer);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em->flush();
            
            return $this->redirectToRoute('CustomersList');
        }
        return $this->render(
            'AdminArea/AddCustomer.html.twig',
            array('form' => $form->createView(),
                'error' => 'No customer with $id found',
                'customer' => $customer,
            ));
    }

    /**
     * @Route("/admin/customers/delete/{id}", name="RemoveCustomer")
     */
    public function RemoveCustomer($id, Request $request)
    {
        $customer = $this->getDoctrine()->getRepository(Customer::class)->findOneBy(['id' => $id]);

        if ($customer)
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove($customer);
            $em->flush();
        }
        return $this->redirectToRoute('CustomersList');
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
