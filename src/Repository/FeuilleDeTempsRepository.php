<?php

namespace App\Repository;

use App\Entity\Pointagesfeuilletemps;
use App\Entity\UserOrigin;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\AST\NullIfExpression;
use Holiday;

class FeuilleDeTempsRepository extends EntityRepository
{

    public function listFeuilleTempsOfEmployers($id)
    {
        $sql = "SELECT ft,em FROM App:Pointagesfeuilletemps  ft   
                INNER JOIN App:Employers em WITH ft.fkEmployer = em.rowid WHERE ft.fkEmployer = $id AND em.rowid = $id
                ORDER BY ft.date ASC";

        $result = $this->getEntityManager()->createQuery($sql)->getScalarResult();
       
        return  $result;

    }

    public function finOneFeuilleTemp($date,$id)
    {
        $qb = $this->createQueryBuilder("ft");
        $qb->add('where', "ft.date = '${date}'");
        $qb->andwhere("ft.fkEmployer = $id");

        $result = $qb->getQuery()->getOneOrNullResult();
        //return object uniquement

        return $result;

    }

    public function getByDate($start,$end,$id)
    {

        $sql = "SELECT ft,em FROM App:Pointagesfeuilletemps  ft   
                INNER JOIN App:Employers em WITH ft.fkEmployer = em.rowid WHERE ft.date between '$start' and '$end' AND ft.fkEmployer = $id ORDER BY ft.date ASC";
        
       /* $qb = $this->createQueryBuilder("e");
        $qb->add('where', "e.date between '$start' and '$end'");
        $qb->andwhere("e.fkEmployer = $id");*/

        //$result = $qb->getQuery()->getResult();
        //return object array
        $result = $this->getEntityManager()->createQuery($sql)->getScalarResult();
    
        return $result;
    }

    public function getAllFeuilleDeTemps(){
        $sql = "SELECT ft,em FROM App:Pointagesfeuilletemps  ft   
                INNER JOIN App:Employers em WITH ft.fkEmployer = em.rowid ORDER BY ft.date ASC";

        $result = $this->getEntityManager()->createQuery($sql)->setMaxResults(1)->getScalarResult();

        return $result;
    }


    public function getCompteDelayMorn($idEmployers){
        $sql = "SELECT COUNT(ft) FROM App:Pointagesfeuilletemps ft WHERE ft.description = 'Retard matin'
                AND ft.fkEmployer = $idEmployers";
        $result = $this->getEntityManager()->createQuery($sql)->getOneOrNullResult();
        return $result;
    }

    public function getCompteDelayAfter($idEmployers){
        $sql = "SELECT COUNT(ft) FROM App:Pointagesfeuilletemps ft WHERE ft.description = 'Retard aprem'
                AND ft.fkEmployer = $idEmployers";
        $result = $this->getEntityManager()->createQuery($sql)->getOneOrNullResult();//return object
        return $result;
    }

    public function getCompteAbs($idEmployers){
        $sql = "SELECT COUNT(ft) FROM App:Pointagesfeuilletemps ft WHERE ft.description = 'Absent'
                AND ft.fkEmployer = $idEmployers";
        $result = $this->getEntityManager()->createQuery($sql)->getOneOrNullResult();//return object
        return $result;
    }

    public function getHourSuplementaire($idEmployers){
        $sql = "SELECT ft FROM App:Pointagesfeuilletemps ft WHERE ft.description = 'Jour Ferié ou week end'
                AND ft.fkEmployer = $idEmployers";
         $result = $this->getEntityManager()->createQuery($sql)->getScalarResult();
        return $result;
    }

    public function getHourConge($idEmployers){
        $sql = "SELECT ft FROM App:Pointagesfeuilletemps ft WHERE ft.description = 'Congé'
                AND ft.fkEmployer = $idEmployers";
         $result = $this->getEntityManager()->createQuery($sql)->getScalarResult();
        return $result;
    }

    public function getNbConge($idEmployers){
        $sql = "SELECT COUNT(ft) FROM App:Pointagesfeuilletemps ft WHERE ft.description = 'Congé'
                AND ft.fkEmployer = $idEmployers";
        $result = $this->getEntityManager()->createQuery($sql)->getOneOrNullResult();
        return $result;
    }

    public function updateFeuilleDescript($description,$id,$dateweek){//update plusieur champs
        $qb = $this->createQueryBuilder('ft');
        $q = $qb->update(Pointagesfeuilletemps::class, 'ft')
            ->set('ft.description', $qb->expr()->literal($description))
            ->where('ft.fkEmployer = '.$id)
            ->andWhere('ft.description IS NULL')
            ->orWhere('ft.description IS NOT NULL')
            ->andwhere('ft.date ='.$qb->expr()->literal($dateweek))
            ->getQuery();
            $q->execute();
    }


    public function updateFeuilleAbs($description,$id){//update plusieur champs d'absent
        $date = date('Y-m-d');
        $qb = $this->createQueryBuilder('ft');
        $q = $qb->update(Pointagesfeuilletemps::class, 'ft')
            ->set('ft.description', $qb->expr()->literal($description))
            ->Where("ft.description IS NULL")
            ->orWhere("ft.description = ' '")  
            ->andWhere("ft.date < '${date}'")
            ->andwhere('ft.fkEmployer = '.$id)
            ->getQuery();
            $q->execute();
    }


    /*public function updateFeuilleConge($description,$dateList){//update plusieur champs d'absent
        $qb = $this->createQueryBuilder('ft');
            $q = $qb->update(Pointagesfeuilletemps::class, 'ft')
            ->set('ft.description', $qb->expr()->literal($description))
            ->where("ft.date  = '${dateList}'") 
            ->getQuery();
            var_dump($q);die;
            //$q->execute();
    }*/

    public function getAllFeuilleDeTempsForMonthsYear($year,$month,$idEmployers){
        $sql = "SELECT ft,em FROM App:Pointagesfeuilletemps  ft 
                INNER JOIN App:Employers em WITH ft.fkEmployer = em.rowid 
                WHERE ft.date LIKE '%$year-$month%' AND ft.fkEmployer = $idEmployers";
//var_dump($sql);die;
        $result = $this->getEntityManager()->createQuery($sql)->getScalarResult();
        return $result;
    }


}
