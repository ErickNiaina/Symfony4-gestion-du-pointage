<?php

namespace App\Repository;

use Doctrine\ORM\EntityRepository;


class HolidayRepository extends EntityRepository
{

    public function getHolidayForEmployer($idEmployer){
        $sql = "SELECT h,em,uo FROM App:Holiday  h  
                LEFT JOIN App:UserOrigin uo WITH h.fkUser = uo.rowid 
                LEFT JOIN App:Employers em WITH em.fkUserLie = uo.rowid
                WHERE em.rowid = $idEmployer AND h.statut = 3";

        $result = $this->getEntityManager()->createQuery($sql)->getScalarResult();

        return $result;
    }
}
