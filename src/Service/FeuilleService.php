<?php

namespace App\Service;

use DateTime;
use App\Entity\Pointagesfeuilletemps;
use App\Repository\PointagesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Luracast\Restler\Data\Object;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;


class FeuilleService
{
    public function __construct(EntityManagerInterface $em,TokenStorageInterface $tokenStorage) 
    {
        $this->em = $em;
        $this->tokenStorage = $tokenStorage;
    }

    public function newdateNow(){
        /*$now = new DateTime();
        $end = new DateTime($now->format('Y-m-t'));

        $dateloading = ((array) $now)['date'];
        $convertDatenow = date("Y-m-d",strtotime($dateloading));*/ //recuperation de 1er avec format

        $convertDatenow = date("Y-m-d", strtotime("first day of this month"));
        
        return $convertDatenow;
    }

    
    public function lastmonths(){
        $now = new DateTime();
        $end = new DateTime($now->format('Y-m-t'));

        $lastmonths = ((array) $end)['date'];
        $convertLastMonth = date("Y-m-d",strtotime($lastmonths));

        return $convertLastMonth;
    }

    public function DayTravel(){//recuperer jour ouvré dans un mois
        $dateActuelle = date('Y-m-d');
        $mois = $dateActuelle;
        $monato=substr($mois,5,2)*1;
        $jaro=substr($mois,0,4)*1;
        $moisTime=mktime(0,0,0,$monato,1,$jaro);
        $nbJoursDuMois=date('t',$moisTime)*1;
        $nbOuvrables=$nbJoursDuMois;
        while($nbJoursDuMois > 0){
            $jour=mktime(0,0,0,$monato,$nbJoursDuMois--,$jaro);
            if (date('N',$jour) > 5){$nbOuvrables--;}
            }
        return $nbOuvrables;
            
    }

    public function convertFormatDateBetween($date){

        if (!empty($date)) {
            $timestamp = strtotime($date);
            if ($timestamp === FALSE) {
                 $timestamp = strtotime(str_replace('/', '-', $date));
             }
                 $date = date('Y-d-m', $timestamp);
                return $date;
          }
         
    }

    public function convertFormatDateTimezone($date){

        if (!empty($date)) {
            $timestamp = strtotime($date);
            if ($timestamp === FALSE) {
                 $timestamp = strtotime(str_replace('/', '-', $date));
             }
                 $date = date('Y-m-d', $timestamp);
                return $date;
          }  
    }

    public function getDatesBetween($dStart, $dEnd) {
        $iStart = strtotime ($dStart);
        $iEnd = strtotime ($dEnd);

        
        if (false === $iStart || false === $iEnd) {
            return false;
        }
        $aStart = explode ('-', $dStart);
        $aEnd = explode ('-', $dEnd);
       
        if (count ($aStart) !== 3 || count ($aEnd) !== 3) {
            return false;
        }
        if (false === checkdate ($aStart[1], $aStart[2], $aStart[0]) || false === checkdate ($aEnd[1], $aEnd[2], $aEnd[0]) || $iEnd <= $iStart) {
            return false;
        }
        for ($i = $iStart; $i < $iEnd + 86400; $i = strtotime ('+1 day', $i) ) {
            $sDateToArr = strftime ('%Y-%m-%d', $i);
            $sYear = substr ($sDateToArr, 0, 4);
            $sMonth = substr ($sDateToArr, 5, 2);
            $aDates[] =   $sDateToArr;
        }
        if (isset ($aDates) && !empty ($aDates)) {
            return $aDates;
        } else {
            return false;
        }
    }


    public function getFeuilleAbsent($idEmployers){
        $findAbsent = $this->em->getRepository(Pointagesfeuilletemps::class)->findOneBy(array('fkEmployer' => $idEmployers,
        'description' => NULL));
        return $findAbsent;
    }

    public function getFeuilleTempBetweenDate($start,$end,$id){
        $interval = $this->em->getRepository(Pointagesfeuilletemps::class)->getByDate($start,$end,$id);
        return $interval;
    }

    public function findOneFeuilleTemp($date,$id){
        $findTemp = $this->em->getRepository(Pointagesfeuilletemps::class)->finOneFeuilleTemp($date,$id);
        return $findTemp;
    }

    public function getTime($date){
        $datetime = new DateTime($date);
        return $datetime -> format('H:i');
    }

    public function intCompare($timeString){
        $comp = str_replace(':', '', $timeString);
        $intComp = intval($comp);
        return $intComp;
    }

    public function compteOfDelayMorn($idEmployers){
        $delay = $this->em->getRepository(Pointagesfeuilletemps::class)->getCompteDelayMorn($idEmployers);
        return $delay;
    }

    public function compteOfDelayAfter($idEmployers){
        $delay = $this->em->getRepository(Pointagesfeuilletemps::class)->getCompteDelayAfter($idEmployers);
        return $delay;
    }

    public function compteNbAbs($idEmployers){
        $abs = $this->em->getRepository(Pointagesfeuilletemps::class)->getCompteAbs($idEmployers);
        return $abs;
    }

    public function getHourSupli($idEmployers){
        $supli = $this->em->getRepository(Pointagesfeuilletemps::class)->getHourSuplementaire($idEmployers);
        return $supli;
    }

    public function getHourCong($idEmployers){
        $cong = $this->em->getRepository(Pointagesfeuilletemps::class)->getHourConge($idEmployers);//
        return $cong;
    }

    public function getNbCong($idEmployer){
        $conge = $this->em->getRepository(Pointagesfeuilletemps::class)->getNbConge($idEmployer);
        return $conge;
    }


    public function GestionOfTemp(Request $request,FeuilleService $feuilleservice,pointageservice $pointageservice,ConstService $constservice,
    HolidayService $holidayService)
    {
        $idEmployers = $request->request->get('fk_employer');
        $listOfEmployers = $pointageservice->listOfPoitageForIdEmployers($idEmployers);
        $hourEnterMorning = $constservice->findHourEnterMorning();
        $hourEnterAfter = $constservice->findHourEnterAft();
        $hourExitMorn = $constservice->findHourExitMorning();
        $listFeuilleTemp = $feuilleservice->getAllFeuilleTemps($idEmployers);
        $dateNow = date('Y-m-d H:i:s');//description d'absence
        $listFeuilleTemp = $feuilleservice->getAllFeuilleTemps($idEmployers);
    
        $weekend = $feuilleservice->weekEnd();

        $monthSelected = $request->request->get('month');
        $yearSelected = $request->request->get('year');
        $intMonth = intval($monthSelected);
        $intYear = intval($yearSelected);

        

        if(!empty($monthSelected) && (!empty($yearSelected))){
            $listFeuilleTemp = $feuilleservice->getAllFeuilleTemps($idEmployers);
            $testwekkend = $feuilleservice->testweekend($intMonth,$intYear);
            foreach ($listFeuilleTemp as $key => $Allist) {
                for ($i=0; $i <count($testwekkend) ; $i++) { 
                    $description = 'Jour Ferié ou week end';
                    $feuilleservice->updateDescTemp($description,$idEmployers,$testwekkend[$i]);
                }    
            }
        }
        
        
        

        if (!empty($listFeuilleTemp)) {
            $description = 'Absent';
            $feuilleservice->updateFeuilleAbsent($description,$idEmployers);      
        }



        $arrayDateFeuilleTemp = array();
        
            foreach ($listFeuilleTemp as $key => $value) {
                $dateTemp =  ((array) $value['ft_date'])['date'];
                $allDateString = $feuilleservice->convertFormatDateTimezone($dateTemp);
                $allDateArray = (array) $allDateString;
                array_push($arrayDateFeuilleTemp, $allDateString);
            }

        foreach ($listOfEmployers as $key => $value) {
            $obj =  (object) $value;
            $etat = implode('',$obj->po_etat);
             
            if (!empty($obj->po_pointageArrivee) && (empty($obj->po_pointageDepart) || !empty($obj->po_pointageDepart))) 
            {

               $datePointageArrivee =  ((array) $obj->po_pointageArrivee)['date']; 
               $convertdatePointageArrivee = $feuilleservice->convertFormatDateTimezone($datePointageArrivee);

               $oneFeuilleTemp = $feuilleservice->findOneFeuilleTemp($convertdatePointageArrivee,$idEmployers);
               $holiday = $holidayService->getAllHolidayForEmployer($idEmployers);
                 
               if ($oneFeuilleTemp != null) {
                
                    $timePointage = $feuilleservice->getTime($datePointageArrivee);

                    $intTime = $feuilleservice->intCompare($timePointage);
                    $intEnterMorning = $feuilleservice->intCompare($hourEnterMorning->getValue());
                    $intEnterAft = $feuilleservice->intCompare($hourEnterAfter->getValue());
                    $intExitMorning = $feuilleservice->intCompare($hourExitMorn->getValue());
                    foreach ($holiday as $key => $value) {
                        $objHoliday = (object) $value;
                        $dateDebut =  ((array) $objHoliday->h_dateDebut)['date'];
                        $dateFin = ((array) $objHoliday->h_dateFin)['date'];
                        $dateDebut = $feuilleservice->convertFormatDateTimezone($dateDebut);
                        $dateFin = $feuilleservice->convertFormatDateTimezone($dateFin);
    
                    }
                    if(!empty($holiday)){
                        $resultDate = $feuilleservice->getDatesBetween($dateDebut,$dateFin);
                    }
                    
                    

                if(empty($resultDate)){
                    if (in_array($convertdatePointageArrivee,$weekend)) {
                       $description = "Jour Ferié ou week end";
                    }
                    if ($intTime > $intEnterMorning && $intTime < $intEnterAft && (!in_array($convertdatePointageArrivee,$weekend)) && $etat = 'Entrée') {
                    $description = 'Retard matin';  
                    }
                    elseif($intTime > $intEnterAft &&  (!in_array($convertdatePointageArrivee,$weekend)) && $etat = 'Entrée'){
                        $description =  'Retard aprem'; 
                    }
                    elseif(($intTime == $intEnterMorning ||  $intTime < $intEnterMorning && (!in_array($convertdatePointageArrivee,$weekend))) && $etat = 'Entrée'){
                    $description = 'Pointage  normal'; 
                    }
                    elseif(($intTime == $intEnterAft || ($intTime < $intEnterAft &&
                    $intTime > $intExitMorning && (!in_array($convertdatePointageArrivee,$weekend)))) && $etat = 'Entrée'){
                        $description = 'Pointage  normal'; 
                    }
                }else{
                    if(in_array($convertdatePointageArrivee,$resultDate)){
                        $description = "Congé";
                    }
                    if (in_array($convertdatePointageArrivee,$weekend)) {
                        $description = "Jour Ferié ou week end";
                     }
                     if ($intTime > $intEnterMorning && $intTime < $intEnterAft && (!in_array($convertdatePointageArrivee,$weekend)) 
                     && $etat = 'Entrée' && (!in_array($convertdatePointageArrivee,$resultDate))) {
                     $description = 'Retard matin';  
                     }
                     elseif($intTime > $intEnterAft &&  (!in_array($convertdatePointageArrivee,$weekend)) 
                     && $etat = 'Entrée' && (!in_array($convertdatePointageArrivee,$resultDate))){
                         $description =  'Retard aprem'; 
                     }
                     elseif(($intTime == $intEnterMorning ||  $intTime < $intEnterMorning && (!in_array($convertdatePointageArrivee,$weekend))) 
                     && $etat = 'Entrée' && (!in_array($convertdatePointageArrivee,$resultDate))){
                     $description = 'Pointage  normal'; 
                     }
                     elseif(($intTime == $intEnterAft || ($intTime < $intEnterAft &&
                     $intTime > $intExitMorning && (!in_array($convertdatePointageArrivee,$weekend)))) 
                     && $etat = 'Entrée' && (!in_array($convertdatePointageArrivee,$resultDate))){
                         $description = 'Pointage  normal'; 
                     }
                }
                    
               
                    $oneFeuilleTemp->setPointageArrivee($obj->po_pointageArrivee);
                    $oneFeuilleTemp->setNoteArrivee($obj->po_noteArrivee);
                    $oneFeuilleTemp->setPointageDepart($obj->po_pointageDepart);
                    $oneFeuilleTemp->setNoteDepart($obj->po_noteDepart);
                    $oneFeuilleTemp->setActif($obj->po_actif);
                    $oneFeuilleTemp->setFkUserAuthor($obj->po_fkUserAuthor);
                    $oneFeuilleTemp->setCreeLe($obj->po_creeLe);
                    $oneFeuilleTemp->setFkUserModif($obj->po_fkUserModif);
                    $oneFeuilleTemp->setModifieLe($obj->po_modifieLe);
                    $oneFeuilleTemp->setDescription($description);
                    $oneFeuilleTemp->setEtat($obj->po_etat);
                    $oneFeuilleTemp->setTotalMinute($obj->po_totalMinute);
                
                    $this->em->persist($oneFeuilleTemp);
                    $this->em->flush();
                }
            }
        }
    }
    public function updateDescTemp($description,$id,$dateweek){
        $update = $this->em->getRepository(Pointagesfeuilletemps::class)->updateFeuilleDescript($description,$id,$dateweek);
        return $update;
    }

    public function updateFeuilleAbsent($description,$id){
        $updateAbs = $this->em->getRepository(Pointagesfeuilletemps::class)->updateFeuilleAbs($description,$id);
        return $updateAbs;
    }

    public function getConge(FeuilleService $feuilleservice,HolidayService $holidayService,$idEmployers){
        
        $holiday = $holidayService->getAllHolidayForEmployer($idEmployers);
        $listFeuilleTemp = $feuilleservice->getAllFeuilleTemps($idEmployers);
        $arrayDateFeuilleTemp = array();
        if (!empty($holiday)) {
            foreach ($listFeuilleTemp as $key => $value) {
                $objFeuilleTemps = (object) $value;
                $dateTemp =  ((array) $value['ft_date'])['date'];
                $allDateString = $feuilleservice->convertFormatDateTimezone($dateTemp);
                $allDateArray = (array) $allDateString;
                array_push($arrayDateFeuilleTemp, $allDateString);
        
                foreach ($holiday as $key => $value) {
                    $objHoliday = (object) $value;
                    $dateDebut =  ((array) $objHoliday->h_dateDebut)['date'];
                    $dateFin = ((array) $objHoliday->h_dateFin)['date'];
                    $dateDebut = $feuilleservice->convertFormatDateTimezone($dateDebut);
                    $dateFin = $feuilleservice->convertFormatDateTimezone($dateFin);

                    $resultDate = $feuilleservice->getDatesBetween($dateDebut,$dateFin);
                
                    for ($i=0; $i <count($resultDate) ; $i++) { 
                        if(in_array($resultDate[$i],$arrayDateFeuilleTemp)){
                                $description = 'Congé';
                                $oneFeuilleTemp = $feuilleservice->findOneFeuilleTemp($resultDate[$i],$objHoliday->em_rowid);
                                $oneFeuilleTemp->setDescription($description); 
                                $this->em->persist($oneFeuilleTemp);
                                $this->em->flush();       
                        }    
                    }
                        
                }
            }
        }
    }

    public function InsertWeekDay(FeuilleService $feuilleservice,$id){
        $listFeuilleTemp = $feuilleservice->getAllFeuilleTemps($id);
        $weekend = $feuilleservice->weekEnd();
        foreach ($listFeuilleTemp as $key => $Allist) {
            for ($i=0; $i <count($weekend) ; $i++) { 
                $description = 'Jour Ferié ou week end';
                $feuilleservice->updateDescTemp($description,$id,$weekend[$i]);
            }    
        }
    }


    public function addFeuilleDeTemp(Request $request,FeuilleService $feuilleservice,pointageservice $pointageservice,ConstService $constservice,
    HolidayService $holidayService){
        
        $idEmployers = $request->request->get('fk_employer');
        $datenow = $feuilleservice->newdateNow();
        $lastMonths = $feuilleservice->lastmonths();

        $monthSelected = $request->request->get('month');
        $yearSelected = $request->request->get('year');
                
        $nbDayInMonth = $feuilleservice->nbDayInMonthGetting($monthSelected,$yearSelected);
    
        $feuilleservice->getConge($feuilleservice,$holidayService,$idEmployers);

        $listOfEmployers = $pointageservice->listOfPoitageForIdEmployers($idEmployers);
        
        $gestionOfTemp = $feuilleservice->GestionOfTemp($request,$feuilleservice,$pointageservice,$constservice,$holidayService);

        $listFeuilleTemp = $feuilleservice->getAllFeuilleTemps($idEmployers);
        
        $weekday = $feuilleservice->InsertWeekDay($feuilleservice,$idEmployers);

        
        if (empty($listFeuilleTemp)) //Pas de  feuilleDetemp  ou exist
        {
            
            if (empty($monthSelected) && empty($yearSelected)) {//et pas de date between 

                $result = $feuilleservice->getDatesBetween($datenow, $lastMonths);
                
            }
            elseif(!empty($monthSelected) && !empty($yearSelected)){
                $dateDebut = $yearSelected.'-'.$monthSelected.'-01';
                $dateFin = $yearSelected.'-'.$monthSelected.'-'.$nbDayInMonth;
                $result = $feuilleservice->getDatesBetween($dateDebut, $dateFin);
            }

            if (!empty($idEmployers)) 
            {
                for ($i=0; $i <count($result) ; $i++) { 
                    $generate = new Pointagesfeuilletemps();
                    $format = 'Y-m-d';
                    $generate->setFkEmployer($idEmployers);
                    $generate->setDate(DateTime::createFromFormat($format, $result[$i]));
                    //date_create_from_format('Y-m-d',"$value")
                    $this->em->persist($generate);
                    $this->em->flush();
                }   
            } 
        }
        elseif(!empty($listFeuilleTemp))
        {
            $arrayDateFeuilleTemp = array();
        
            foreach ($listFeuilleTemp as $key => $value) {
                $dateTemp =  ((array) $value['ft_date'])['date'];
                $allDateString = $feuilleservice->convertFormatDateTimezone($dateTemp);
                $allDateArray = (array) $allDateString;
                array_push($arrayDateFeuilleTemp, $allDateString);
            }

        if(empty($monthSelected) && (empty($yearSelected))){
            $dateResult = array();
            if (empty($dateStart) && empty($dateEnd)) { 
                $result = $feuilleservice->getDatesBetween($datenow, $lastMonths); 
                for ($i=0; $i <count($result) ; $i++) { 
                    if(!in_array($result[$i],$arrayDateFeuilleTemp)){
                        array_push($dateResult,$result[$i]);     
                    }
                }
                $result = $dateResult;
                for ($i=0; $i <count($result) ; $i++) { 
                    $generate = new Pointagesfeuilletemps();
                    $format = 'Y-m-d';
                    $generate->setFkEmployer($idEmployers);
                    $generate->setDate(DateTime::createFromFormat($format, $result[$i]));
                    $this->em->persist($generate);
                    $this->em->flush();
                }      
            }
        }

        // echo $date->format('m');filtrer mois du date
            if(!empty($monthSelected) && (!empty($yearSelected))){
                $filtreYearinmonth = $feuilleservice->getAllFeuilleTempsForMonthsYear("$yearSelected","$monthSelected",$idEmployers);

                $dateResult = array();
                $date = new Datetime();
                /*var_dump($monthSelected);
                var_dump($yearSelected);
                die('stop');*/
                
                $monthToday =  $date->format('m');
                $yearToday =  $date->format('Y');
                if($monthToday == $monthSelected && $yearToday == $yearSelected){
                    $result = $feuilleservice->getDatesBetween($datenow, $lastMonths);
                }else{
                    $dateDebut = $yearSelected.'-'.$monthSelected.'-01';
                    $dateFin = $yearSelected.'-'.$monthSelected.'-'.$nbDayInMonth;
                    $result = $feuilleservice->getDatesBetween($dateDebut, $dateFin);
                    
                }
                
               for ($i=0; $i <count($result) ; $i++) { 
                    if(!in_array($result[$i],$arrayDateFeuilleTemp)){
                        array_push($dateResult,$result[$i]);     
                    }
                }

                $result = $dateResult;
            
                for ($i=0; $i <count($result) ; $i++) { 
                    $generate = new Pointagesfeuilletemps();
                    $format = 'Y-m-d';
                    $generate->setFkEmployer($idEmployers);
                    $generate->setDate(DateTime::createFromFormat($format, $result[$i]));
                    $this->em->persist($generate);
                    $this->em->flush();
                    
                }
            }
   
        }
        
    }
    
    public function getAllFeuilleTempsForMonthsYear($year,$month,$idEmployers){
        $monthYear = $this->em->getRepository(Pointagesfeuilletemps::class)->getAllFeuilleDeTempsForMonthsYear($year,$month,$idEmployers);
        return $monthYear;
    }
    public function getAllFeuilleTemps($id){
        $pointageFeuilleDeTempsOfEmployers = $this->em->getRepository(Pointagesfeuilletemps::class)->listFeuilleTempsOfEmployers($id);
        return $pointageFeuilleDeTempsOfEmployers;
    }


    public function getAllTemps(){
        $list = $this->em->getRepository(Pointagesfeuilletemps::class)->getAllFeuilleDeTemps();
        return $list;
    }

    public function nbDayInMonth($month=null,$year=null){//nombres des jours dans un mois et année courant
        
        if ($month==null) {
            $month = date("n",time());
        }
        if ($year=null) {
            $year = date("Y",time());
        }
            
        $totalMonth = date( "j", mktime(0, 0, 0, $month + 1, 1, $year) - 1 );
        
        return $totalMonth;
 
    }


    public function nbDayInMonthGetting($monthselect,$yearselect){//nombres des jours dans un mois et année donnée
        $month = null;
        $year = null;
        if (empty($monthselect) && empty($yearselect)) {
            if ($month==null) {
                $month = date("n",time());
            }
            if ($year=null) {
                $year = date("Y",time());
            }
        }
        elseif(!empty($monthselect) && !empty($yearselect)) {
            $month = $monthselect;
            $year = $yearselect;
        }
            
        $totalMonth = date( "j", mktime(0, 0, 0, $month + 1, 1, $year) - 1 );
        
        return $totalMonth;
 
    }


    public function weekEnd(){//filtre week end en 1mois courant
        $workdays = array();
        $type = CAL_GREGORIAN;
        $month = date('m'); 
        $year = date('Y'); 
        $day_count = cal_days_in_month($type, $month, $year); 


        for ($i = 1; $i <= $day_count; $i++) {
            if($i < 10){
                $i = '0'.$i;
            }
                $date = $year.'-'.$month.'-'.$i; 
                $get_name = date('l', strtotime($date)); 
                $day_name = substr($get_name, 0, 3); 
                
                
                if($day_name == 'Sun' || $day_name == 'Sat'){
                    array_push($workdays,$date);
                }
        }
        return $workdays;
    }



    public function testweekEnd(int $monthInt,int $yearInt){//filtre week end en 1mois donnée
        $workdays = array();
        $type = CAL_GREGORIAN;
        $month = $monthInt; 
        $year = $yearInt; 
        
        $day_count = cal_days_in_month($type, $month, $year); 

        for ($i = 1; $i <= $day_count; $i++) {
            if($i < 10){
                $i = '0'.$i;
            }
            if($month < 10){
                $date = $year.'-'.'0'.$month.'-'.$i;
            }else{
                $date = $year.'-'.$month.'-'.$i;
            }
                 
                $get_name = date('l', strtotime($date)); 
                $day_name = substr($get_name, 0, 3); 
                
                
                if($day_name == 'Sun' || $day_name == 'Sat'){
                    array_push($workdays,$date);
                }
        }
        return $workdays;
    }
}