<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\HolidayService;
use Symfony\Component\HttpFoundation\Response;

class HolidayController extends AbstractController
{
    /**
     * @Route("/holiday", name="holiday")
     */
    public function index(HolidayService $holidayService)
    {
        $test = $holidayService->getAllHolidayForEmployer();
        var_dump($test);

        return new Response('');
    }
}
