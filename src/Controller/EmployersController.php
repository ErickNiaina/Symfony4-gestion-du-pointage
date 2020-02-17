<?php

namespace App\Controller;

use App\Service\PointageService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EmployersController extends AbstractController
{
    /**
     * @Route("/employers/list", name="employers")
     */
    public function getAllEmployers(PointageService $pointageofemployers)
    {
        $listOfEmployers = $pointageofemployers->getAllEmployers();
        
        return $this->render('pointage/index.html.twig', [
            'listOfEmployers' => $listOfEmployers,
        ]);
    }
}
