<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/admin/products/add", name="AddProduct")
     */
    public function AddProduct()
    {
        return $this->render('AdminArea/AddProduct.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    /**
     * @Route("/admin/products/edit", name="EditProduct")
     */
    public function EditProduct()
    {
        return $this->render('AdminArea/EditProduct.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    /**
     * @Route("/admin/products/remove", name="RemoveProduct")
     */
    public function RemoveProduct()
    {
        return $this->render('AdminArea/RemoveProduct.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    /**
     * @Route("/admin/reports/products", name="ProductsReport")
     */
    public function ProductsReport()
    {
        return $this->render('AdminArea/ProductsReport.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    /**
     * @Route("/staff/products", name="ProductSearch")
     */
    public function ProductsSearch()
    {
        return $this->render('StaffArea/ProductSearch.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    /**
     * @Route("/products", name="sortProducts")
     */
    public function SortProducts()
    {
        return $this->render('UserArea/SortProducts.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
}
