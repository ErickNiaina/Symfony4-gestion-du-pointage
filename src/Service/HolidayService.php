<?php

namespace App\Service;

use App\Entity\Holiday;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;


class HolidayService
{
    public function __construct(EntityManagerInterface $em,TokenStorageInterface $tokenStorage) 
    {
        $this->em = $em;
        $this->tokenStorage = $tokenStorage;
    }

    public function getAllHolidayForEmployer($idEmployer){
        $holiday = $this->em->getRepository(Holiday::class)->getHolidayForEmployer($idEmployer);
        return $holiday;
    }

}