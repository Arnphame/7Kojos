<?php

namespace App\Controller;

use App\Entity\ProductTypes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;
use App\Form\ProductType;

class ProductController extends AbstractController
{
    /**
     * @Route("/admin/products", name="ProductsList")
     */
    public function ProductsList()
    {
        $rep = $this->getDoctrine()->getRepository('App:Product');
        $products = $rep->findAll();

        return $this->render(
            'AdminArea/products.html.twig',
            array('products' => $products)
        );
    }
        /**
     * @Route("/admin/products/add", name="AddProduct")
     */
    public function AddProduct(Request $request)
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $date = date('Y-m-d H:i:s');
            $product->setAddDate(new \DateTime($date));

            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();

            return $this->redirectToRoute('ProductsList');
        }
        return $this->render(
            'AdminArea/AddProduct.html.twig',
            array('form' => $form->createView())
        );
    }
    /**
     * @Route("/admin/products/edit/{id}", name="EditProduct")
     */
    public function EditProduct($id, Request $request)
    {
        $product = $this->getDoctrine()->getRepository(Product::class)->findOneBy(['productNumber' => $id]);
        $em = $this->getDoctrine()->getManager();

        if(!$product){
            return $this->render(
                'AdminArea/products.html.twig',
                array('error' => 'No product with $id found')
            );
        }
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $date = date('Y-m-d H:i:s');
            $product->setLastEditDate(new \DateTime($date));
            $em->flush();

            return $this->redirectToRoute('ProductsList');
        }
        return $this->render(
            'AdminArea/AddProduct.html.twig',
            array('form' => $form->createView(),
                'error' => 'No product with $id found',
                'product' => $product,
            ));
    }
    /**
     * @Route("/admin/products/delete/{id}", name="RemoveProduct")
     */
    public function RemoveProduct($id, Request $request)
    {
        $product = $this->getDoctrine()->getRepository(Product::class)->findOneBy(['productNumber' => $id]);

        if ($product) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($product);
            $em->flush();
        }
        return $this->redirectToRoute('ProductsList');
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
    /**
     * @Route("/products/list/cpu", name="choose_cpu")
     */
    public function choose_cpu()
    {
        return $this->render('UserArea/choose_cpu.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    /**
     * @Route("/products/compare", name="compare_components")
     */
    public function Compare()
    {
        return $this->render('UserArea/ComponentsCompare.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
}
