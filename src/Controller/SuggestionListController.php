<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\SuggestionList;
use App\Form\SuggestionListType;

class SuggestionListController extends AbstractController
{
	/**
     * @Route("/user/suggestions", name="SuggestionsList")
     */
    public function SuggestionsList()
    {
        $rep = $this->getDoctrine()->getRepository('App:SuggestionList');
        $suggestions = $rep->findAll();

        return $this->render(
            'UserArea/suggestions.html.twig',
            array('suggestions' => $suggestions)
        );
    }
    
    /**
     * @Route("/user/suggestions/add", name="AddSuggestion")
     */
    public function AddSuggestion(Request $request)
    {
        $suggestion = new SuggestionList();
        $form = $this->createForm(SuggestionListType::class, $suggestion);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {        
            $em = $this->getDoctrine()->getManager();
            $em->persist($suggestion);
            $em->flush();
            
            return $this->redirectToRoute('SuggestionsList');
        }
        return $this->render(
            'UserArea/AddSuggestion.html.twig',
            array('form' => $form->createView())
        );
    }
}