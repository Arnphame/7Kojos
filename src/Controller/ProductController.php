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
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;
use App\Entity\MB;
use App\Form\MBType;
use App\Form\ProductType;
use Knp\Component\Pager\PaginatorInterface;

class ProductController extends AbstractController
{
    /**
     * @Route("/admin/products", name="ProductsList")
     */
    public function ProductsList()
    {
        $rep = $this->getDoctrine()->getRepository('App:Product');
        $products = $rep->findAll();

        $cpus = $this->getDoctrine()->getRepository(CPU::class)->findAll();
        $mbs = $this->getDoctrine()->getRepository(MB::class)->findAll();
        $rams = $this->getDoctrine()->getRepository(RAM::class)->findAll();
        $storages = $this->getDoctrine()->getRepository(Storage::class)->findAll();
        $gpus = $this->getDoctrine()->getRepository(GPU::class)->findAll();
        $psus = $this->getDoctrine()->getRepository(PSU::class)->findAll();
        $chassis = $this->getDoctrine()->getRepository(Chassis::class)->findAll();
        $cpucoolers = $this->getDoctrine()->getRepository(CPUCooler::class)->findAll();
        $chassiscoolers = $this->getDoctrine()->getRepository(ChassisCooler::class)->findAll();

        return $this->render(
            'AdminArea/products.html.twig',
            array('products' => $products,
                'cpus' => $cpus,
                'mbs' => $mbs,
                'rams' => $rams,
                'storages' => $storages,
                'gpus' => $gpus,
                'psus' => $psus,
                'chassis' => $chassis,
                'cpucoolers' => $cpucoolers,
                'chassiscoolers' => $chassiscoolers,
            )
        );
    }

    /**
     * @Route("/admin/products/selected", name="AddProduct2")
     */
    public function AddProduct(Request $request)
    {
        $type = $request->query->get('type');
        if ($type == "MB") {
            $mb = new MB();
            $form = $this->createForm(MBType::class, $mb);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
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
        if ($type == "RAM") {
            $x = new RAM();
            $form = $this->createForm(RAMType::class, $x);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
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
        if ($type == "Storage") {
            $x = new Storage();
            $form = $this->createForm(StorageType::class, $x);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
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
        if ($type == "CPU") {
            $x = new CPU();
            $form = $this->createForm(CPUType::class, $x);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
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
        if ($type == "GPU") {
            $x = new GPU();
            $form = $this->createForm(GPUType::class, $x);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
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
        if ($type == "PSU") {
            $x = new PSU();
            $form = $this->createForm(PSUType::class, $x);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
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
        if ($type == "Chassis") {
            $x = new Chassis();
            $form = $this->createForm(ChassisType::class, $x);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
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
        if ($type == "CPUCooler") {
            $x = new CPUCooler();
            $form = $this->createForm(CPUCoolerType::class, $x);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
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
        if ($type == "ChassisCooler") {
            $x = new ChassisCooler();
            $form = $this->createForm(ChassisCoolerType::class, $x);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
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
        $mb = $this->getDoctrine()->getRepository(MB::class)->findOneBy(['productNumber' => $id]);
        $ram = $this->getDoctrine()->getRepository(RAM::class)->findOneBy(['productNumber' => $id]);
        $storage = $this->getDoctrine()->getRepository(Storage::class)->findOneBy(['productNumber' => $id]);
        $cpu = $this->getDoctrine()->getRepository(CPU::class)->findOneBy(['productNumber' => $id]);
        $gpu = $this->getDoctrine()->getRepository(GPU::class)->findOneBy(['productNumber' => $id]);
        $psu = $this->getDoctrine()->getRepository(PSU::class)->findOneBy(['productNumber' => $id]);
        $case = $this->getDoctrine()->getRepository(Chassis::class)->findOneBy(['productNumber' => $id]);
        $cpucooler = $this->getDoctrine()->getRepository(CPUCooler::class)->findOneBy(['productNumber' => $id]);
        $casecooler = $this->getDoctrine()->getRepository(ChassisCooler::class)->findOneBy(['productNumber' => $id]);
        $em = $this->getDoctrine()->getManager();

        if (!$product) {
            return $this->render(
                'AdminArea/products.html.twig',
                array('error' => 'No product with $id found')
            );
        }
        if ($mb) {
            $form = $this->createForm(MBType::class, $product);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $date = date('Y-m-d H:i:s');
                $product->setLastEditDate(new \DateTime($date));
                $em->flush();

                return $this->redirectToRoute('ProductsList');
            }
            return $this->render(
                'AdminArea/EditProduct.html.twig',
                array('form' => $form->createView(),
                    'error' => 'No product with $id found',
                    'product' => $product,
                    'mb' => $mb,
                ));
        }
        if ($ram) {
            $form = $this->createForm(RAMType::class, $product);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $date = date('Y-m-d H:i:s');
                $product->setLastEditDate(new \DateTime($date));
                $em->flush();

                return $this->redirectToRoute('ProductsList');
            }
            return $this->render(
                'AdminArea/EditProduct.html.twig',
                array('form' => $form->createView(),
                    'error' => 'No product with $id found',
                    'product' => $product,
                    'ram' => $ram,
                ));
        }
        if ($storage) {
            $form = $this->createForm(StorageType::class, $product);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $date = date('Y-m-d H:i:s');
                $product->setLastEditDate(new \DateTime($date));
                $em->flush();

                return $this->redirectToRoute('ProductsList');
            }
            return $this->render(
                'AdminArea/EditProduct.html.twig',
                array('form' => $form->createView(),
                    'error' => 'No product with $id found',
                    'product' => $product,
                    'storage' => $storage,
                ));
        }
        if ($cpu) {
            $form = $this->createForm(CPUType::class, $product);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $date = date('Y-m-d H:i:s');
                $product->setLastEditDate(new \DateTime($date));
                $em->flush();

                return $this->redirectToRoute('ProductsList');
            }
            return $this->render(
                'AdminArea/EditProduct.html.twig',
                array('form' => $form->createView(),
                    'error' => 'No product with $id found',
                    'product' => $product,
                    'cpu' => $cpu,
                ));
        }
        if ($gpu) {
            $form = $this->createForm(GPUType::class, $product);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $date = date('Y-m-d H:i:s');
                $product->setLastEditDate(new \DateTime($date));
                $em->flush();

                return $this->redirectToRoute('ProductsList');
            }
            return $this->render(
                'AdminArea/EditProduct.html.twig',
                array('form' => $form->createView(),
                    'error' => 'No product with $id found',
                    'product' => $product,
                    'gpu' => $gpu,
                ));
        }
        if ($psu) {
            $form = $this->createForm(PSUType::class, $product);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $date = date('Y-m-d H:i:s');
                $product->setLastEditDate(new \DateTime($date));
                $em->flush();

                return $this->redirectToRoute('ProductsList');
            }
            return $this->render(
                'AdminArea/EditProduct.html.twig',
                array('form' => $form->createView(),
                    'error' => 'No product with $id found',
                    'product' => $product,
                    'psu' => $psu,
                ));
        }
        if ($case) {
            $form = $this->createForm(ChassisType::class, $product);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $date = date('Y-m-d H:i:s');
                $product->setLastEditDate(new \DateTime($date));
                $em->flush();

                return $this->redirectToRoute('ProductsList');
            }
            return $this->render(
                'AdminArea/EditProduct.html.twig',
                array('form' => $form->createView(),
                    'error' => 'No product with $id found',
                    'product' => $product,
                    'case' => $case,
                ));
        }
        if ($cpucooler) {
            $form = $this->createForm(CPUCoolerType::class, $product);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $date = date('Y-m-d H:i:s');
                $product->setLastEditDate(new \DateTime($date));
                $em->flush();

                return $this->redirectToRoute('ProductsList');
            }
            return $this->render(
                'AdminArea/EditProduct.html.twig',
                array('form' => $form->createView(),
                    'error' => 'No product with $id found',
                    'product' => $product,
                    'cpucooler' => $cpucooler,
                ));
        }
        if ($casecooler) {
            $form = $this->createForm(ChassisCoolerType::class, $product);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $date = date('Y-m-d H:i:s');
                $product->setLastEditDate(new \DateTime($date));
                $em->flush();

                return $this->redirectToRoute('ProductsList');
            }
            return $this->render(
                'AdminArea/EditProduct.html.twig',
                array('form' => $form->createView(),
                    'error' => 'No product with $id found',
                    'product' => $product,
                    'casecooler' => $casecooler,
                ));
        }
        return $this->redirectToRoute('ProductsList');
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
        $rep = $this->getDoctrine()->getRepository('App:Product');
        $products = $rep->findAll();

        $cpus = $this->getDoctrine()->getRepository(CPU::class)->findAll();
        $mbs = $this->getDoctrine()->getRepository(MB::class)->findAll();
        $rams = $this->getDoctrine()->getRepository(RAM::class)->findAll();
        $storages = $this->getDoctrine()->getRepository(Storage::class)->findAll();
        $gpus = $this->getDoctrine()->getRepository(GPU::class)->findAll();
        $psus = $this->getDoctrine()->getRepository(PSU::class)->findAll();
        $chassis = $this->getDoctrine()->getRepository(Chassis::class)->findAll();
        $cpucoolers = $this->getDoctrine()->getRepository(CPUCooler::class)->findAll();
        $chassiscoolers = $this->getDoctrine()->getRepository(ChassisCooler::class)->findAll();
        return $this->render('AdminArea/ProductsReport.html.twig',
            array('products' => $products,
                'cpus' => $cpus,
                'mbs' => $mbs,
                'rams' => $rams,
                'storages' => $storages,
                'gpus' => $gpus,
                'psus' => $psus,
                'chassis' => $chassis,
                'cpucoolers' => $cpucoolers,
                'chassiscoolers' => $chassiscoolers,
        ));
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
     * @Route("/staff/search", name="ProductSearchBy")
     */
    public function ProductsSearchBy(Request $request)
    {
        $error = "";
        $searchBy = $request->query->get('by');
        dump($searchBy);
        $repository = $this->getDoctrine()->getRepository(Product::class);

        $product = $repository->findBy(['productNumber' => $searchBy]);
        if ($product) {
            return $this->render('StaffArea/ProductSearchBy.html.twig', [
                'controller_name' => 'ProductController',
                'product' => $product,
            ]);
        } else {
            $product = $repository->findBy(['name' => $searchBy]);
            if ($product) {
                return $this->render('StaffArea/ProductSearchBy.html.twig', [
                    'controller_name' => 'ProductController',
                    'product' => $product,
                ]);
            }
        }
        return $this->render('StaffArea/ProductSearch.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    /**
     * @Route("/staff/products/buy/{id}", name="ProductBuy")
     */
    public function ProductsBuy(Request $request, $id)
    {
        $product = $this->getDoctrine()->getRepository(Product::class)->findOneBy(['productNumber' => $id]);

        if ($product) {
            $form = $this->createFormBuilder()
                ->add('amount', NumberType::class)
                ->getForm();

            $form->handleRequest($request);

            $success = "";
            if ($form->isSubmitted() && $form->isValid()) {

                $data = $form->getData();
                dump($data['amount']);
                $q = $product->getQuantity() + $data['amount'];
                $em = $this->getDoctrine()->getManager();
                $product->setQuantity($q);
                $em->flush();
                $success = "Product bought successfully.";
                return $this->redirectToRoute('ProductSearch');
            }
            return $this->render('StaffArea/productsBuy.html.twig', [
                'controller_name' => 'ProductController',
                'form' => $form->createView(),
                'product' => $product,
            ]);
        }
        return $this->redirectToRoute('ProductSearch');
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
     * @Route("/products/list/compare/{product}", name="compare_components")
     */
    public function Compare(Request $request, $product)
    {
        $compareObjects = $request->get('selected');
        $product1 = $this->getDoctrine()->getRepository(Product::class)->findOneBy(['productNumber' => $compareObjects[0]]);
        $product2 = $this->getDoctrine()->getRepository(Product::class)->findOneBy(['productNumber' => $compareObjects[1]]);
        if ($product == "cpu") {
            $cpu1 = $this->getDoctrine()->getRepository(CPU::class)->findOneBy(['productNumber' => $compareObjects[0]]);
            $cpu2 = $this->getDoctrine()->getRepository(CPU::class)->findOneBy(['productNumber' => $compareObjects[1]]);
            if ($product1 && $product2) {
                return $this->render('UserArea/ComponentsCompare.html.twig', [
                    'controller_name' => 'ProductController',
                    'product1' => $product1,
                    'product2' => $product2,
                    'cpu1' => $cpu1,
                    'cpu2' => $cpu2,
                ]);
            }
        }
        $this->redirectToRoute("choose_cpu");
    }
}
