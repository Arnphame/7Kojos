<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SuggestionController extends AbstractController
{
	/**
     * @Route("/user/suggestions/suggestion", name="PostSuggestion")
     */
    public function PostSuggestion()
    {
        return $this->render('UserArea/PostSuggestion.html.twig', [
            'controller_name' => 'SuggestionController',
        ]);
    }   
}