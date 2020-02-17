<?php

namespace App\Controller;

use App\Service\ConstService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ConstController extends AbstractController
{





    
    /**
     * @Route("/config/heure", name="config_heure", methods={"GET","POST"})
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * 
     */
    public function getAllConfig(ConstService $constservice,Request $request){

        $arg1 = $request;
        $arg2 = $constservice;

        $constservice->modifHeureConfig($arg1,$arg2);
        $hoursEnterMorn = $constservice->findHourEnterMorning();
        $hoursEnterAft = $constservice->findHourEnterAft();
        $hourExitMorn = $constservice->findHourExitMorning();
        $hourExitAft = $constservice->findHourExitAft();
        
        $testHoursEnterMorn = date("H:i", strtotime($hoursEnterMorn->getValue()));
        $testHoursExitMorn = date("H:i", strtotime($hourExitMorn->getValue()));
        $testHoursEnterAft = date("H:i", strtotime($hoursEnterAft->getValue()));
        $testHoursExitAft = date("H:i", strtotime($hourExitAft->getValue()));

        
        if (($testHoursEnterMorn < $testHoursExitMorn) && ($testHoursEnterAft < $testHoursExitAft))
        {
            $this->addFlash('success', 'Configuration saved');
            return $this->redirectToRoute('pointage_configuration_Access');
          
        } 
        else
        {
            $this->addFlash('danger', 'Problème pour la date de sortie,verifier cette date');
            return $this->redirectToRoute('pointage_configuration_Access');
        }
       
    }
    

}
