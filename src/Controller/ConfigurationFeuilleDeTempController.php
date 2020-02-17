<?php

namespace App\Controller;

use DateTime;
use App\Service\ConstService;
use App\Service\FeuilleService;
use App\Service\PointageService;
use App\Entity\Pointagesfeuilletemps;
use App\Service\HolidayService ;
use Symfony\Component\Translation\Interval;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
/**
 * @Route("/of_erh/pointage")
 */
class ConfigurationFeuilleDeTempController extends AbstractController
{
    
    /**
     * @Route("/feuilleTemps", name="pointage_feuilleTemps", methods={"GET","POST"})
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function feuilleTemps(PointageService $pointageofemployerservice,FeuilleService $feuilleservice)
    {
        $listOfEmployers = $pointageofemployerservice->getAllEmployers();
        $daysMonth = $feuilleservice->DayTravel();
        $feuilleTemp = $feuilleservice->getAllTemps();


        if (!empty($feuilleTemp)) {
            $lisTemp =  $feuilleservice->getAllFeuilleTemps($feuilleTemp[0]['ft_fkEmployer']);
            $idEmployers = $feuilleTemp[0]['ft_fkEmployer'];
            $delayMorn = $feuilleservice->compteOfDelayMorn($idEmployers);
            $delayMorn = implode("",$delayMorn);
            $delayMorn = intval($delayMorn);
            $delayAft = $feuilleservice->compteOfDelayAfter($idEmployers);
            $delayAft = implode("",$delayAft);
            $delayAft = intval($delayAft);
            
            $recupereHmin = $feuilleservice->getAllFeuilleTemps($idEmployers);
            $somme = 0;
            for ($i=0; $i <count($recupereHmin) ; $i++) {  
                $somme = $somme + $recupereHmin[$i]['ft_totalMinute'];  
            }

            $hoursSupli = $feuilleservice->getHourSupli($idEmployers);
            $totalHour = 0;
            for ($i=0; $i <count($hoursSupli) ; $i++) { 
               $totalHour = $totalHour + $hoursSupli[$i]['ft_totalMinute'];
            }

            $Hourcong = $feuilleservice->getHourCong($idEmployers);
            $hourholyday = 0;
            for ($i=0; $i <count($Hourcong) ; $i++) { 
                $hourholyday = $hourholyday + $Hourcong[$i]['ft_totalMinute'];
            }

            $abs = $feuilleservice->compteNbAbs($idEmployers);
            $abs = implode("",$abs);
            $abs = intval($abs);


            $conge = $feuilleservice->getNbCong($idEmployers);
            $conge = implode("",$conge);
            $conge = intval($conge);
        }
        else{
            $somme = 0;
            $totalHour = 0;
            $abs = 0;
            $conge = 0;
            $hourholyday = 0;
            $delayMorn = 0;
            $delayMorn = intval($delayMorn);
            $delayAft = 0;
            $delayAft = intval($delayAft);
            $lisTemp = [
                [
                    'em_rowid'=>'Aucun',
                    'em_prenom'=>'Aucun',
                    'ft_description'=>'',
                    'ft_date'=>'',
                    'ft_pointageArrivee'=>'',
                    'ft_pointageDepart'=>'',
                    'ft_totalMinute'=>0,
                    'ft_etat'=>''
                ]
            ];
        }
            
         
        /*$datenow = date("Y-m-d", strtotime("first day of this month"));
        var_dump($datenow);die;*/
        return $this->render('pointage/pointage_feuilleTemps.html.twig',[

            'listEmployer' => $listOfEmployers,
            'listTemp' => $lisTemp,
            'heureTotal' => $daysMonth,
            'nbdelayMorn' => $delayMorn,
            'nbdelayAft' => $delayAft,
            'sommeTotalMinute' => $somme,
            'heureTotal' => $daysMonth,
            'totalSupli' => $totalHour,
            'absent' => $abs,
            'conge' =>$conge,
            'hourholyday' => $hourholyday,
                
        ]);
    }

    /** 
     * @Route("add/feuilleTemps/recherche", name="generated_feuilleDeTemps", methods={"POST"})
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
    */
    public function addFeuilleTemp(Request $request,FeuilleService $feuilleservice,PointageService $pointageofemployerservice,
        ConstService $constservice,HolidayService $holidayService)
    {
        $result = $feuilleservice->addFeuilleDeTemp($request,$feuilleservice,$pointageofemployerservice,$constservice,$holidayService);
        
        $idEmployers = $request->request->get('fk_employer');
        $monthSelected = $request->request->get('month');
        $yearSelected = $request->request->get('year');
            

        if((!empty($monthSelected) && empty($yearSelected)) || (empty($monthSelected) && !empty($yearSelected))){
            $this->addFlash('danger', 'FeuilleDeTemp not created , Employers not found And Verify your date');
            return $this->redirectToRoute('pointage_feuilleTemps');
        }
        
        $listOfEmployers = $pointageofemployerservice->getAllEmployers();
        $listPointageForId = $pointageofemployerservice->listOfPoitageForIdEmployers($idEmployers);

        $intervalDate  = $feuilleservice->getAllFeuilleTempsForMonthsYear("$yearSelected","$monthSelected",$idEmployers);
        
        if (!empty($intervalDate)) {
            $prenom =  $intervalDate[0]['em_prenom'];
            $idemployer = $intervalDate[0]['ft_fkEmployer'];
            $date1 = date('Y-m');
            $date1 = "$yearSelected-$monthSelected";
            setlocale (LC_TIME, 'fr_FR.utf8','fra'); //recuperer date en français
            $date = (strftime("%B",strtotime($date1)));
            $monthView = ucfirst($date); 
            $yearView =  $yearSelected;     
        }
        if(empty($monthSelected) && empty($yearSelected) || (!empty($monthSelected)) && (empty($yearSelected))){
            $monthView = null; 
            $yearView =  null; 
        }
            
        $daysMonth = $feuilleservice->DayTravel();
        
        $delayMorn = $feuilleservice->compteOfDelayMorn($idEmployers);
        $delayMorn = implode("",$delayMorn);
        $delayMorn = intval($delayMorn);
        $delayAft = $feuilleservice->compteOfDelayAfter($idEmployers);
        $delayAft = implode("",$delayAft);
        $delayAft = intval($delayAft);
        
        $recupereHmin = $feuilleservice->getAllFeuilleTemps($idEmployers);
        $somme = 0;
        for ($i=0; $i <count($recupereHmin) ; $i++) {  
            $somme = $somme + $recupereHmin[$i]['ft_totalMinute'];  
        }

        $hoursSupli = $feuilleservice->getHourSupli($idEmployers);
        $totalHour = 0;
        for ($i=0; $i <count($hoursSupli) ; $i++) { 
           $totalHour = $totalHour + $hoursSupli[$i]['ft_totalMinute'];
        }

        $Hourcong = $feuilleservice->getHourCong($idEmployers);
        $hourholyday = 0;
        for ($i=0; $i <count($Hourcong) ; $i++) { 
            $hourholyday = $hourholyday + $Hourcong[$i]['ft_totalMinute'];
        }
        
        //var_dump($Hourcong);die;



        $abs = $feuilleservice->compteNbAbs($idEmployers);
        $abs = implode("",$abs);
        $abs = intval($abs);


        $conge = $feuilleservice->getNbCong($idEmployers);
        $conge = implode("",$conge);
        $conge = intval($conge);
    //var_dump($totalHour);
    //var_dump($conge);die;
        if(empty($result) && empty($intervalDate))
        {
            if (!empty($idEmployers)) {
                $this->addFlash('success', 'FeuilleDeTemp save successfully');

                return $this->redirectToRoute('pointage_feuilleTemps');
            }
            
        }else{
            if (!empty($intervalDate)) {
                return $this->render('pointage/pointage_feuilleTemps.html.twig',[
                    'intervalDate' => $intervalDate,
                    'listEmployer' => $listOfEmployers,
                    'nbdelayMorn' => $delayMorn,
                    'nbdelayAft' => $delayAft,
                    'sommeTotalMinute' => $somme,
                    'heureTotal' => $daysMonth,
                    'totalSupli' => $totalHour,
                    'absent' => $abs,
                    'conge' =>$conge,
                    'hourholyday' => $hourholyday,
                    'sessionName' =>$prenom,
                    'sessionid' => $idemployer,
                    'sessiondate' => $monthView,
                    'sessionYear' => $yearView,

                ]);
            }
            return $this->render('pointage/pointage_feuilleTemps.html.twig',[

                'listOfTemp' => $result,
                'listEmployer' => $listOfEmployers,
                'intervalDate' => $intervalDate,
                'nbdelayMorn' => $delayMorn,
                'nbdelayAft' => $delayAft,
                'sommeTotalMinute' => $somme,
                'heureTotal' => $daysMonth,
                'totalSupli' => $totalHour,
                'absent' => $abs,
                'conge' =>$conge,
                'hourholyday' => $hourholyday,
                'sessiondate' => $monthView,
                'sessionYear' => $yearView,
            ]);
        }   
    }


    /** 
     * @Route("number/months", name="nb_dayInmonths", methods={"GET"})
     * 
    */
    public function DayTravelMonth(FeuilleService $feuilleservice){
        $weekend = $feuilleservice->weekEnd();
        var_dump($weekend);
        
    return new Response('');
    }



    /**
     * 
     */
    
    

        

}
