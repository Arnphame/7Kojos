<?php

namespace App\Controller;

use App\Entity\Chassis;
use App\Entity\ChassisCooler;
use App\Entity\CPU;
use App\Entity\CPUCooler;
use App\Entity\GPU;
use App\Entity\PSU;
use App\Entity\RAM;
use App\Entity\Storage;
use App\Form\ChassisCoolerType;
use App\Form\ChassisType;
use App\Form\CPUCoolerType;
use App\Form\CPUType;
use App\Form\GPUType;
use App\Form\PSUType;
use App\Form\RAMType;
use App\Form\StorageType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;
use App\Entity\MB;
use App\Form\MBType;
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
     * @Route("/admin/products/selected", name="AddProduct2")
     */
    public function AddProduct(Request $request)
    {
        $type = $request->query->get('type');
        if($type == "MB"){
            $mb = new MB();
            $form = $this->createForm(MBType::class, $mb);

            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){
                $date = date('Y-m-d H:i:s');
                $mb->setAddDate(new \DateTime($date));

                $em = $this->getDoctrine()->getManager();
                $em->persist($mb);
                $em->flush();

                return $this->redirectToRoute('ProductsList');
            }
            return $this->render(
                'AdminArea/AddProductMB.html.twig',
                array('form' => $form->createView())
            );
        }
        if($type == "RAM"){
            $x = new RAM();
            $form = $this->createForm(RAMType::class, $x);

            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){
                $date = date('Y-m-d H:i:s');
                $x->setAddDate(new \DateTime($date));

                $em = $this->getDoctrine()->getManager();
                $em->persist($x);
                $em->flush();

                return $this->redirectToRoute('ProductsList');
            }
            return $this->render(
                'AdminArea/AddProductRAM.html.twig',
                array('form' => $form->createView())
            );
        }
        if($type == "Storage"){
            $x = new Storage();
            $form = $this->createForm(StorageType::class, $x);

            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){
                $date = date('Y-m-d H:i:s');
                $x->setAddDate(new \DateTime($date));

                $em = $this->getDoctrine()->getManager();
                $em->persist($x);
                $em->flush();

                return $this->redirectToRoute('ProductsList');
            }
            return $this->render(
                'AdminArea/AddProductStorage.html.twig',
                array('form' => $form->createView())
            );
        }
        if($type == "CPU"){
            $x = new CPU();
            $form = $this->createForm(CPUType::class, $x);

            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){
                $date = date('Y-m-d H:i:s');
                $x->setAddDate(new \DateTime($date));

                $em = $this->getDoctrine()->getManager();
                $em->persist($x);
                $em->flush();

                return $this->redirectToRoute('ProductsList');
            }
            return $this->render(
                'AdminArea/AddProductCPU.html.twig',
                array('form' => $form->createView())
            );
        }
        if($type == "GPU"){
            $x = new GPU();
            $form = $this->createForm(GPUType::class, $x);

            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){
                $date = date('Y-m-d H:i:s');
                $x->setAddDate(new \DateTime($date));

                $em = $this->getDoctrine()->getManager();
                $em->persist($x);
                $em->flush();

                return $this->redirectToRoute('ProductsList');
            }
            return $this->render(
                'AdminArea/AddProductGPU.html.twig',
                array('form' => $form->createView())
            );
        }
        if($type == "PSU"){
            $x = new PSU();
            $form = $this->createForm(PSUType::class, $x);

            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){
                $date = date('Y-m-d H:i:s');
                $x->setAddDate(new \DateTime($date));

                $em = $this->getDoctrine()->getManager();
                $em->persist($x);
                $em->flush();

                return $this->redirectToRoute('ProductsList');
            }
            return $this->render(
                'AdminArea/AddProductPSU.html.twig',
                array('form' => $form->createView())
            );
        }
        if($type == "Chassis"){
            $x = new Chassis();
            $form = $this->createForm(ChassisType::class, $x);

            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){
                $date = date('Y-m-d H:i:s');
                $x->setAddDate(new \DateTime($date));

                $em = $this->getDoctrine()->getManager();
                $em->persist($x);
                $em->flush();

                return $this->redirectToRoute('ProductsList');
            }
            return $this->render(
                'AdminArea/AddProductChassis.html.twig',
                array('form' => $form->createView())
            );
        }
        if($type == "CPUCooler"){
            $x = new CPUCooler();
            $form = $this->createForm(CPUCoolerType::class, $x);

            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){
                $date = date('Y-m-d H:i:s');
                $x->setAddDate(new \DateTime($date));

                $em = $this->getDoctrine()->getManager();
                $em->persist($x);
                $em->flush();

                return $this->redirectToRoute('ProductsList');
            }
            return $this->render(
                'AdminArea/AddProductCPUCooler.html.twig',
                array('form' => $form->createView())
            );
        }
        if($type == "ChassisCooler"){
            $x = new ChassisCooler();
            $form = $this->createForm(ChassisCoolerType::class, $x);

            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){
                $date = date('Y-m-d H:i:s');
                $x->setAddDate(new \DateTime($date));

                $em = $this->getDoctrine()->getManager();
                $em->persist($x);
                $em->flush();

                return $this->redirectToRoute('ProductsList');
            }
            return $this->render(
                'AdminArea/AddProductChassisCooler.html.twig',
                array('form' => $form->createView())
            );
        }
        return $this->redirectToRoute('ProductsList');
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
        $cpus = $this->getDoctrine()->getRepository(CPU::class)->findAll();
        $products = $this->getDoctrine()->getRepository(Product::class)->findAll();
        return $this->render('UserArea/choose_cpu.html.twig', [
            'controller_name' => 'ProductController',
            'products' => $products,
            'cpus' => $cpus,
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
