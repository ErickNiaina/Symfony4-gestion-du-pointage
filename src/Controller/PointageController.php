<?php

namespace App\Controller;

use DateTime;
use ReflectionObject;
use App\Entity\Pointages;
use App\Form\PointageType;
use ___PHPSTORM_HELPERS\object;
use App\Service\PointageService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/of_erh/pointage")
 */
class PointageController extends AbstractController
{
    /**
     * @Route("/index", name="pointage_index", methods={"GET"})
     */
    public function index()
    {

        return $this->render('pointage/pointage.html.twig');
    }


    /**
     * @Route("/list", name="pointage_list", methods={"GET"})
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function getAllPointage(PointageService $pointage)
    {
        $pointageList = $pointage->getAllOfPointage();
        //$pointageModif = $pointage->getUserFkModifPointage();
    
            return $this->render('pointage/pointage_list.html.twig',[
                'listOfPointage' => $pointageList,
                //'userModif' => $pointageModif,
            ]);
    }


    /**
     * @Route("/view/pointage/number/{rowid}", name="pointage_view", methods={"GET"})
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function getOnePointageEmployers(PointageService $pointage,$rowid)
    {
        $onePointage = $pointage->getOnePointages($rowid);
       
        return $this->render('pointage/pointage_view.html.twig',[
            'onePointage' =>$onePointage,
        ]);
    }


    /**
     * @Route("/nouveau", name="pointage_new", methods={"GET"})
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function new(Request $request,PointageService $pointageofemployers)
    {
        $pointage = new Pointages();
        $form = $this->createForm(PointageType::class, $pointage);
        $form->handleRequest($request);
        
        $listOfEmployers = $pointageofemployers->getAllEmployers();

        return $this->render('pointage/pointage_add.html.twig',[
            'form' => $form->createView(),
            'listOfEmployers' => $listOfEmployers,
        ]);
    }


    /**
     * @Route("/register", name="pointage_register", methods={"POST"})
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function registerPointage(Request $request,PointageService $pointages){

        
       
        $idEmployers = $request->request->get('fk_employer');
        $stat = $request->request->get('etat');
        $date = $request->request->get('date');
        $time = $request->request->get('time');
        $note = $request->request->get('note');
        $description = $request->request->get('description');
        $submittedToken = $request->request->get('token');
        $idUser = $this->getUser()->getrowid();

        $status = (array) $stat;

        
        $pointageList = $pointages->getOneForIdEmployers($idEmployers);
        
        
        if ($this->isCsrfTokenValid('add-item', $submittedToken)) {

            if(empty($stat) || empty($idEmployers) || empty($date) || empty($time)) {
                $this->addFlash('danger', 'Completez les champs obligatoires (*)');
                return $this->redirectToRoute('pointage_new');
            }

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
                        
                            $pointages->updateToFullPointage($obj->po_fkEmployer);
                                
                                $em = $this->getDoctrine()->getManager();
                                $em->persist($pointage);
                                $em->flush();

                                $this->addFlash('success', 'Pointage save successfully');
                                
                                return $this->redirectToRoute('pointage_list');

                        }
                        else
                        {
                            $this->addFlash('danger', 'Verifier votre date de pointage  Depart impossible');
                            return $this->redirectToRoute('pointage_new');
                        }
                        
                    }

                   }
                   elseif(($obj->po_fkEmployer == $idEmployers) && ($value == 'Sortie') && $stat !== $value)
                   {
                        $pointages->AddPointage($request);
                        return $this->redirectToRoute('pointage_list');
                   }
                   elseif ((empty($value)) && $stat == 'Sortie')
                   {
                    $this->addFlash('danger', 'Vous devez entrer dans la liste');
                    return $this->redirectToRoute('pointage_new');
                   }
                   elseif(($obj->po_fkEmployer == $idEmployers) && ($value == $stat))
                   {
                    $this->addFlash('danger', 'Attention,ton dernier pointage est '.' '.$value);
                    return $this->redirectToRoute('pointage_new');
                   }
                }     
           }
           if ((empty($pointageList)) && $stat !== 'Sortie') 
            {
                $pointages->AddPointage($request); 
                $this->addFlash('success', 'Pointage save successfully');
                return $this->redirectToRoute('pointage_list'); 

            }else{
                $this->addFlash('danger', 'Vous devez entrer dans la liste de Pointage : Entrée');
                return $this->redirectToRoute('pointage_new');
            }
        }
        return new Response('');
    }


    /**
     * @Route("/{rowid}/delete", name="pointage_delete", methods={"GET"})
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function deletedPointage($rowid,PointageService $pointage)
    {
       $pointage->deletingPointage($rowid);
       return $this->redirectToRoute('pointage_list');
    }
    




    /**
     * @Route("/modifier/{rowid}/?lang:en", name="pointage_edit", methods={"GET","POST"})
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function edit($rowid,PointageService $pointage)
    {
        $result = $pointage->getOnePointagesForId($rowid);
        $pointageList = $pointage->getAllOfPointage();
        
        return $this->render('pointage/pointage_edit.html.twig',[
            'onepointage' => $result,
            'listEmployer' => $pointageList,
        ]);
    }

    /**
     * @Route("/savemodif/{rowid}/?lang:en", name="pointage_update", methods={"GET","POST"})
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function updatePointage(PointageService $pointageservice,$rowid,Request $request){

        $editpointage = $pointageservice->findPointage($rowid);

        $idEmployers = $request->request->get('fk_employer');
        $timeEnter = $request->request->get('pointageA_heure');
        $noteEnter = $request->request->get('note_arrivee');
        $timeExit = $request->request->get('pointageD_heure');
        $noteExit = $request->request->get('note_depart');
        $description = $request->request->get('description');
        $submittedToken = $request->request->get('token');
        $idUser = $this->getUser()->getrowid();
        $dateD = date("d/m/Y");
        
    
        $dateArrivee = $editpointage->getPointageArrivee();
        $dateSortie = $editpointage->getPointageDepart();
        
        if ($this->isCsrfTokenValid('add-item', $submittedToken)) {

            if ($dateArrivee && $timeEnter == NULL) {
                $editpointage->setPointageArrivee($dateArrivee);
            }else{
                $editpointage->setPointageArrivee((\DateTime::createFromFormat("H:i",("$timeEnter"))));
            }
            $editpointage->setFkEmployer($idEmployers);
            $editpointage->setNoteArrivee($noteEnter);
            $editpointage->setNoteDepart($noteExit);
            $editpointage->setDescription($description);
           

            if(!empty($editpointage->getPointageDepart()) && !empty($timeExit))
            {
                $editpointage->setPointageDepart((\DateTime::createFromFormat("H:i",("$timeExit"))));
            }
            elseif(!empty($editpointage->getPointageDepart()) && empty($timeExit))
            {
                $editpointage->setPointageDepart($dateSortie);
            }
            elseif($timeExit != NULL && empty($editpointage->getPointageDepart()))
            {
                $editpointage->setPointageDepart(\DateTime::createFromFormat("d/m/Y H:i",("$dateD"."$timeExit")));
                $editpointage->setFkUserModif($idUser);
                $editpointage->setModifieLe(\DateTime::createFromFormat("d/m/Y H:i",("$dateD"."$timeExit")));
                $default = 'Sortie';
                $stat = array ($default);
                $editpointage->setEtat($stat);
            }
                $pointArrivee =  ((array) $editpointage->getPointageArrivee())['date'];
            if (!empty($editpointage->getPointageDepart())) {
                    $getDateDepart = $editpointage->getPointageDepart();
                    $pointDepart = ((array) $getDateDepart)['date'];
                 
                

                if($pointArrivee > $pointDepart)
                {
                    $this->addFlash('dangerModif', 'Erreur de Modification par rapport à la date Depart');
                    return $this->redirectToRoute('pointage_list');
                }


                $datetime1 = strtotime($pointArrivee);
                $datetime2 = strtotime($pointDepart);
                $interval  = abs($datetime2 - $datetime1);
                $minutes   = round($interval / 60);

                if($pointArrivee < $pointDepart)
                {
                    $editpointage->setTotalMinute($minutes);
                }  
            } 

            $em = $this->getDoctrine()->getManager();
            $em->persist($editpointage);
            $em->flush();
        }
        return $this->redirectToRoute('pointage_list'); 
    }



    /**
     * @Route("/fullof/employer", name="pointage_employer", methods={"GET"})
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function fullpointageofEmployer(PointageService $pointageservice){
       $listOfEmployers = $pointageservice->listOfPoitageForIdEmployers(1);
       var_dump($listOfEmployers);
        return new Response('');
    }



    
}
