<?php

namespace App\Service;

use App\Entity\Employers;
use App\Entity\Pointages;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;


class PointageService
{
    public function __construct(EntityManagerInterface $em,TokenStorageInterface $tokenStorage) 
    {
        $this->em = $em;
        $this->tokenStorage = $tokenStorage;
    }


    public function getAllEmployers(){
        $employers = $this->em->getRepository(Employers::class)->findAll();
        return $employers;
    }

    public function deletingPointage($id){
        $deletepointage = $this->em->getRepository(Pointages::class)->deletePointage($id);
        return $deletepointage;
    }


    public function getAllOfPointage(){
        $pointageOfEmployers = $this->em->getRepository(Pointages::class)->listPointageOfEmployers();
        return $pointageOfEmployers;
    }


    public function getOnePointages($id){
        $onePointageOfEmployers = $this->em->getRepository(Pointages::class)->getOnePointageEmployer($id);
        return $onePointageOfEmployers;
    }

    public function getOnePointagesForId($id){
        $onePointageForId = $this->em->getRepository(Pointages::class)->getOnePointageForId($id);
        return $onePointageForId;
    }

    public function findPointage($rowid)
    {
        $editpointage = $this->em->getRepository(Pointages::class)->find($rowid);
        return $editpointage;
    }

    public function getOneForIdEmployers($id)
    {
        $idEmployers = $this->em->getRepository(Pointages::class)->getOnePointageForIdEmployer($id);
        return $idEmployers;
    }

    public function updateToFullPointage($fkemployer){
        $editpointage= $this->em->getRepository(Pointages::class)->editToFullPointage($fkemployer);
        return $editpointage;
    }

    public function listOfPoitageForIdEmployers($id){
        $list = $this->em->getRepository(Pointages::class)->getAllPointageForIdEmployers($id);
        return $list;

    }

    public function AddPointage(Request $request)
    {
        $idEmployers = $request->request->get('fk_employer');
        $stat = $request->request->get('etat');
        $date = $request->request->get('date');
        $time = $request->request->get('time');
        $note = $request->request->get('note');
        $description = $request->request->get('description');

        $idUser = $this->tokenStorage->getToken()->getUser()->getrowid();

        $status = (array) $stat;
        $pointage = new Pointages();
        $pointage->setFkEmployer($idEmployers);
        $pointage->setPointageArrivee(\DateTime::createFromFormat("d/m/Y H:i",("$date"."$time")));
        $pointage->setFkUserAuthor($idUser);
        $pointage->setCreeLe(\DateTime::createFromFormat("d/m/Y H:i",("$date"."$time")));
        $pointage->setDescription($description);
        $pointage->setEtat($status);
        $pointage->setActif(true);
        

        foreach ($pointage->getEtat() as $key => $statusPointage) {
            if ($statusPointage == 'Entrée') {
            $pointage->setNoteArrivee($note);
            }elseif($statusPointage == 'Sortie'){
                $pointage->setNoteDepart($note);
            }
        }
        
        $this->em->persist($pointage);
        $this->em->flush(); 
    }


    /*public function editCompletedPointage(Request $request)
    {
        $idEmployers = $request->request->get('fk_employer');
        $stat = $request->request->get('etat');
        $date = $request->request->get('date');
        $time = $request->request->get('time');
        $note = $request->request->get('note');
        $description = $request->request->get('description');
        
        $idUser = $this->tokenStorage->getToken()->getUser()->getrowid();

        $status = (array) $stat;

        $pointageList =  $this->em->getRepository(Pointages::class)->getOnePointageForIdEmployer($idEmployers);

        foreach ($pointageList as $key => $value) {
            $obj = (object) $value;
            foreach ($obj->po_etat as $key => $value) {
               if (($obj->po_fkEmployer == $idEmployers) && ($value == 'Entrée') && ($stat !== $value)) {
                    
                foreach ($pointageList as $key => $value) {
                   $obj = (object) $value;
                   
                    $pointage = new Pointages();
                    $pointage->setFkEmployer($obj->po_fkEmployer);
                    $pointage->setPointageArrivee($obj->po_pointageArrivee);
                    $pointage->setFkUserAuthor($obj->po_fkUserAuthor);
                    $pointage->setNoteArrivee($obj->po_noteArrivee);
                    $pointage->setCreeLe($obj->po_creeLe);
                    $pointage->setDescription($description);
                    $pointage->setEtat($status);
                    $pointage->setFkUserModif($idUser);
                    $pointage->setPointageDepart(\DateTime::createFromFormat("d/m/Y H:i",("$date"."$time")));
                    $pointage->setModifieLe(\DateTime::createFromFormat("d/m/Y H:i",("$date"."$time")));
                    $pointage->setNoteDepart($note);
                    $pointage->setActif(true);

                    
                    
                    $pointArrivee =  ((array) $obj->po_pointageArrivee)['date'];
                    
                    $getDateDepart = $pointage->getPointageDepart();
                    $pointDepart = ((array) $getDateDepart)['date'];

                   
                    $datetime1 = strtotime($pointArrivee);
                    $datetime2 = strtotime($pointDepart);
                    $interval  = abs($datetime2 - $datetime1);
                    $minutes   = round($interval / 60);

                    
                    if($pointArrivee < $pointDepart)
                    {
                        $pointage->setTotalMinute($minutes);
                        $editOff = $this->em->getRepository(Pointages::class)->editToFullPointage($obj->po_fkEmployer);
                 
                        $this->em->persist($pointage);
                        $this->em->flush(); 
                    }
                    else
                    {
                        echo 'pointage return to negative form';
                    }
                    
                }

               }
               elseif(($obj->po_fkEmployer == $idEmployers) && ($value == 'Sortie') && $stat !== $value)
               {
                    $pointage->AddPointage($request);
                    
               }
               elseif(($obj->po_fkEmployer == $idEmployers) && ($value == $stat))
               {
                   echo 'faite un nouveau pointage car tu fais un pointage'.' '.$value;
               }
            }     
       }
    }*/


    





}