<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WorkerController extends AbstractController
{
    /**
     * @Route("/admin/workers/add", name="AddWorker")
     */
    public function AddWorker()
    {
        return $this->render('AdminArea/AddWorker.html.twig', [
            'controller_name' => 'WorkerController',
        ]);
    }
    /**
     * @Route("/admin/workers/edit", name="EditWorker")
     */
    public function EditWorker()
    {
        return $this->render('AdminArea/EditWorker.html.twig', [
            'controller_name' => 'WorkerController',
        ]);
    }
    /**
     * @Route("/admin/workers/remove", name="RemoveWorker")
     */
    public function RemoveWorker()
    {
        return $this->render('AdminArea/RemoveWorker.html.twig', [
            'controller_name' => 'WorkerController',
        ]);
    }
}
