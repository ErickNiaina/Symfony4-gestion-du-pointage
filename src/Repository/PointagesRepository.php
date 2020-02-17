<?php

namespace App\Repository;

use Doctrine\ORM\EntityRepository;


class PointagesRepository extends EntityRepository
{
    
    

    public function listPointageOfEmployers()
    {
        $sql = "SELECT po,uo,em FROM App:Pointages  po 
                INNER JOIN App:UserOrigin uo WITH po.fkUserAuthor = uo.rowid  
                INNER JOIN App:Employers em WITH po.fkEmployer = em.rowid";

        $result = $this->getEntityManager()->createQuery($sql)->getScalarResult();

        return $result;

    }

    public function getOnePointageEmployer($id)
    {
        $sql = "SELECT po,uo,em FROM App:Pointages  po 
                INNER JOIN App:UserOrigin uo WITH po.fkUserAuthor = uo.rowid  
                INNER JOIN App:Employers em WITH po.fkEmployer = em.rowid WHERE po.rowid = $id";

        $result = $this->getEntityManager()->createQuery($sql)->getScalarResult();

        return $result;
    
    }


    public function getOnePointageForIdEmployer($id)
    {
        $sql = "SELECT po,uo,em FROM App:Pointages  po 
                INNER JOIN App:UserOrigin uo WITH po.fkUserAuthor = uo.rowid  
                INNER JOIN App:Employers em WITH po.fkEmployer = em.rowid WHERE po.fkEmployer = $id ORDER BY po.pointageArrivee DESC ";
        
        $result = $this->getEntityManager()->createQuery($sql)->setMaxResults(1)->getScalarResult();

        return $result;
    
    } 

    public function editToFullPointage($fkEmployer)
    {
        $sql = "DELETE  FROM App:Pointages  po
                 WHERE po.fkEmployer = $fkEmployer AND (po.pointageDepart IS NULL AND po.totalMinute IS NULL)";
        $result = $this->getEntityManager()->createQuery($sql)->getScalarResult();

        return $result;
    } 


    public function deletePointage($id)
    {
        $sql = "DELETE  FROM App:Pointages  po
                 WHERE po.rowid = $id";
        $result = $this->getEntityManager()->createQuery($sql)->getScalarResult();

        return $result;
    } 

    public function getOnePointageForId($id){
        $sql = "SELECT po,uo,em FROM App:Pointages  po 
                INNER JOIN App:UserOrigin uo WITH po.fkUserAuthor = uo.rowid  
                INNER JOIN App:Employers em WITH po.fkEmployer = em.rowid WHERE po.rowid = $id";

        $result = $this->getEntityManager()->createQuery($sql)->getScalarResult();

        return $result;
    }


    public function getAllPointageForIdEmployers($id)
    {

        $sql = "SELECT po,em FROM App:Pointages  po 
                INNER JOIN App:Employers em WITH po.fkEmployer = em.rowid
                WHERE po.fkEmployer = $id";

        $result = $this->getEntityManager()->createQuery($sql)->getScalarResult();;

        return $result;
    }
}