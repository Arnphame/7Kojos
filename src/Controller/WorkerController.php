<?php

namespace App\Controller;

use App\Entity\WorkerTypes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Worker;
use App\Form\WorkerType;

class WorkerController extends AbstractController
{  
    /**
     * @Route("/admin/workers", name="WorkersList")
     */
    public function WorkersList()
    {
        $rep = $this->getDoctrine()->getRepository('App:Worker');
        $workers = $rep->findAll();

        return $this->render(
            'AdminArea/workers.html.twig',
            array('workers' => $workers)
        );
    }

    /**
     * @Route("/admin/workers/add", name="AddWorker")
     */
    public function AddWorker(Request $request)
    {
        $worker = new Worker();
        $form = $this->createForm(WorkerType::class, $worker);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $date = date('Y-m-d H:i:s');
            //$product->setAddDate(new \DateTime($date));
        
            $em = $this->getDoctrine()->getManager();
            $em->persist($worker);
            $em->flush();
            
            return $this->redirectToRoute('WorkersList');
        }
        return $this->render(
            'AdminArea/AddWorker.html.twig',
            array('form' => $form->createView())
        );
    }

     /**
     * @Route("/admin/workers/edit/{id}", name="EditWorker")
     */
    public function EditWorker($id, Request $request)
    {
        $worker = $this->getDoctrine()->getRepository(Worker::class)->findOneBy(['id' => $id]);
        $em = $this->getDoctrine()->getManager();

        if(!$worker)
        {
            return $this->render(
                'AdminArea/workers.html.twig',
                array('error' => 'No worker with $id found')
            );
        }
        $form = $this->createForm(WorkerType::class, $worker);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $date = date('Y-m-d H:i:s');
        //    $product->setLastEditDate(new \DateTime($date));
            $em->flush();
            
            return $this->redirectToRoute('WorkersList');
        }
        return $this->render(
            'AdminArea/AddWorker.html.twig',
            array('form' => $form->createView(),
                'error' => 'No worker with $id found',
                'worker' => $worker,
            ));
    }

    /**
     * @Route("/admin/workers/delete/{id}", name="RemoveWorker")
     */
    public function RemoveWorker($id, Request $request)
    {
        $worker = $this->getDoctrine()->getRepository(Worker::class)->findOneBy(['id' => $id]);

        if ($worker) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($worker);
            $em->flush();
        }
        return $this->redirectToRoute('WorkersList');
    }
}
