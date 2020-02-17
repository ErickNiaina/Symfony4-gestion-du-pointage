<?php

namespace App\Service;

use App\Entity\ConstP;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;


class ConstService
{
    public function __construct(EntityManagerInterface $em,TokenStorageInterface $tokenStorage) 
    {
        $this->em = $em;
        $this->tokenStorage = $tokenStorage;
    }

    public function findHourEnterMorning(){
        $findconf = $this->em->getRepository(ConstP::class)->findOneBy(array('name' => 'HEURE_ENTREE_MATIN'));
        return $findconf;
    }

    public function findHourEnterAft(){
        $findconf = $this->em->getRepository(ConstP::class)->findOneBy(array('name' => 'HEURE_ENTREE_APREM'));
        return $findconf;
    }


    public function findHourExitMorning(){
        $findconf = $this->em->getRepository(ConstP::class)->findOneBy(array('name' => 'HEURE_SORTIE_MATIN'));
        return $findconf;
    }

    public function findHourExitAft(){
        $findconf = $this->em->getRepository(ConstP::class)->findOneBy(array('name' => 'HEURE_SORTIE_APREM'));
        return $findconf;
    }

    public function modifHeureConfig(Request $request,ConstService $constservice){

        $hourEnter_morn= $request->request->get('heureEntreeMatin');
        $minEntr_morn = $request->request->get('minEntreeMatin');
        $hourExit_morn = $request->request->get('heuresortieMatin');
        $minExit_morn = $request->request->get('minsortieMatin');

        $hourEnter_aft = $request->request->get('heureEntreeAprem');
        $minEnter_aft = $request->request->get('minEntreeAprem');
        $hourExit_aft = $request->request->get('heuresortieAprem');
        $minExit_aft = $request->request->get('minsortieAprem');

        $hoursEnterMorn = $constservice->findHourEnterMorning();
        $hoursEnterAft = $constservice->findHourEnterAft();
        $hourExitMorn = $constservice->findHourExitMorning();
        $hourExitAft = $constservice->findHourExitAft();

       $hoursEnterMorn->setValue("$hourEnter_morn".":"."$minEntr_morn");
       $hourExitMorn->setValue("$hourExit_morn".":"."$minExit_morn");
       $hoursEnterAft->setValue("$hourEnter_aft".":"."$minEnter_aft");
       $hourExitAft->setValue("$hourExit_aft".":"."$minExit_aft");


       $testHoursEnterMorn = date("H:i", strtotime($hoursEnterMorn->getValue()));
       $testHoursExitMorn = date("H:i", strtotime($hourExitMorn->getValue()));
       $testHoursEnterAft = date("H:i", strtotime($hoursEnterAft->getValue()));
       $testHoursExitAft = date("H:i", strtotime($hourExitAft->getValue()));


       if (($testHoursEnterMorn < $testHoursExitMorn) && ($testHoursEnterAft < $testHoursExitAft)) 
      {
        
        $this->em->persist($hoursEnterMorn);
        $this->em->persist($hourExitMorn);
        $this->em->persist($hoursEnterAft);
        $this->em->persist($hourExitAft);
        $this->em->flush();
        
      }

    }




    

}